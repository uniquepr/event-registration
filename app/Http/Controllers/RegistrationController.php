<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{


    public function store(Request $request)
    {
        // Custom validation messages
        $messages = [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Phone number is required.',
            'date_city.required' => 'Please select a date.',
            'privacy.accepted' => 'You must agree to the terms.',
        ];

        $validator = Validator::make($request->all(), [
            'name'      => 'required|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'required|string',
            'date_city' => 'required|string',
            'privacy'   => 'accepted',
            'eventName'   => 'required|string',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $validated = $validator->validated();
        // Store in database 
        try {
            $lead = Lead::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->fullPhone ? $request->fullPhone : $request->phone,
                'date_city' => $request->date_city,
                'eventName' => $request->eventName,
                'privacy' => $request->privacy ? 'agreed' : 'not agreed',
                'submitted_at' => now(),
                'page_url' => url()->previous(),
            ]);

            $data = $lead->toArray();
            // Send to Zapier
            $zapierWebhook = config('app.webhook');
            $response  = Http::post($zapierWebhook, $data);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }

        if ($lead->save() === false || $response->failed()) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to save data. Please try again.'
            ], 500);
        }
        return response()->json([
            'success' => true,
            'message' => 'Registration submitted successfully!'
        ]);
    }
}
