
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Primary Meta Tags -->
    <meta name="title" content="Address Istanbul | Roadshow Event Registration">
    <meta name="keyword"
        content="Roadshow, Event, Registration, Dubai Real Estate, Investment Opportunities, Luxury Properties, London, Paris, Zurich">
    <meta name="description"
        content="Join us for the Roadshow Event Registration and explore exclusive investment opportunities in luxury properties across major cities.">
    <meta name="author" content="Unique Properties">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Roadshow Event Registration">
    <meta property="og:description"
        content="Join us for the Roadshow Event Registration and explore exclusive investment opportunities in luxury properties across major cities.">
    <meta property="og:image" content="{{ asset('images/logos/logoWhiteBg.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Roadshow Event Registration">
    <meta property="twitter:description"
        content="Join us for the Roadshow Event Registration and explore exclusive investment opportunities in luxury properties across major cities.">
    <meta property="twitter:image" content="{{ asset('images/logos/logoWhiteBg.png') }}">
    {{-- end meta --}}

    <title>Address Istanbul | Roadshow Event Registration</title>
    <link rel="canonical" href="{{ url()->current() }}" />
    <!-- Favicon and touch icons -->
    <!-- General Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logos/favicon.png') }}" />
    <!-- Shortcut Icon for Older Browsers -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logos/favicon.ico') }}" />
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="{{ asset('images/logos/apple-touch-icon.png') }}" />
    <!-- Android Chrome Icons -->
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('images/logos/android-chrome-192x192.png') }}" />
    <link rel="icon" type="image/png" sizes="512x512"
        href="{{ asset('images/logos/android-chrome-512x512.png') }}" />
    <!-- Favicon and touch icons -->
    <meta name="robots" content="index,follow" />
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-primary font-sans text-white antialiased">

    <!-- Hero Section with Background Image -->
    <div class="relative min-h-screen w-full flex items-center flex-col justify-between p-4 md:p-8 overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/dubai.webp') }}'); filter: saturate(0.5) contrast(1.2); opacity: 0.5;">
        </div>
        <!-- Logo -->
        <div class="mb-6">
            <img src="{{ asset('images/logos/logo.png') }}" alt="Unique Properties"
                class="h-8 mx-auto lg:mx-0 relative z-10">
        </div>
        <!-- Main Content & Form Container -->
        <div class="relative mb-6 z-10 w-full max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-center space-y-8 lg:space-y-0 lg:space-x-12 p-6 md:p-12 rounded-2xl backdrop-filter backdrop-blur-xs bg-black/20 border border-white/10 shadow-2xl">

            <!-- Left Side: Content & Benefits -->
            <div class="flex-1 text-center lg:text-left">


                <!-- Headline -->
                <h1 class="text-xl sm:text-2xl md:text-3xl  font-serif leading-tight mb-2 text-white">
                    Looking for the perfect investment destination?
                </h1>

                <!-- Sub-headline -->
                <p class="text-base mb-6  mx-auto lg:mx-0 text-white/80">Step into the world of Dubai luxury at our exclusive Roadshow in the heart of Istanbul. Meet Dubai’s leading property experts and explore a curated collection of high-ROI investment opportunities — from premium waterfront residences to luxury apartments and villas — all designed for long-term growth and Golden Visa eligibility.
                </p>
                <!-- Benefits -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-white/90 mb-6">
                    <div
                        class="flex flex-row justify-center text-start border border-white/20 p-2 rounded-lg bg-black/20 backdrop-filter backdrop-blur-lg shadow-xl">
                        <img src="{{ asset('images/exclusive.png') }}" alt="Exclusive Access"
                            class="h-10 w-10 me-2">
                        <p class="font-bold text-sm">Exclusive <br>Access</p>
                    </div>
                    <div
                        class="flex flex-row justify-center text-start border border-white/20 p-2 rounded-lg g-black/20 backdrop-filter backdrop-blur-lg shadow-xl">
                        <img src="{{ asset('images/insights.png') }}" alt="Expert Insights"
                            class="h-10 w-10 me-2">
                        <p class="font-bold text-sm">Expert <br>Insights</p>
                    </div>
                    <div
                        class="flex flex-row justify-center text-start border border-white/20 p-2 rounded-lg g-black/20 backdrop-filter backdrop-blur-lg shadow-xl">
                        <img src="{{ asset('images/consultation.png') }}" alt="Direct Consultations"
                            class="h-10 w-10 me-2">
                        <p class="font-bold text-sm">Direct <br>Consultations</p>
                    </div>
                </div>
                <!-- Why Choose Dubai -->
                <div class="text-left mb-6">
                    <h3 class="text-xl sm:text-2xl md:text-3xl font-serif leading-tight mb-4 text-white">
                        Why Choose Dubai?
                    </h3>

                    <ul class="space-y-3">
                        <li class="flex items-start space-x-2">
                            <span class="text-secondary">✔</span>
                            <p class="text-white/90"><span class="font-semibold text-white">Tax-free property
                                    income:</span> Enjoy a tax-free real estate environment.</p>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-secondary">✔</span>
                            <p class="text-white/90"><span class="font-semibold text-white">High rental yields:</span>
                                Benefit from high rental yields among the best globally.</p>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-secondary">✔</span>
                            <p class="text-white/90"><span class="font-semibold text-white">Flexible payment
                                    plans:</span> Invest with confidence in a booming, diversified economy.</p>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-secondary">✔</span>
                            <p class="text-white/90"><span class="font-semibold text-white">Golden Visa
                                    opportunity:</span> Secure your Dubai Golden Visa by investing in real estate.</p>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-secondary">✔</span>
                            <p class="text-white/90"><span class="font-semibold text-white">A lifestyle of luxury,
                                    safety, and innovation:</span> Experience a world-class lifestyle with top-tier
                                amenities.</p>
                        </li>
                    </ul>

                </div>
                <!-- Locations -->
                <div class="">
                    <div class="flex flex-col md:flex-row md:space-x-8 space-y-4 md:space-y-0 text-white/80">
                        <!-- Location 1 -->
                        <div
                            class="flex-1 p-2 rounded-lg border border-white/20 backdrop-filter backdrop-blur-sm bg-primary/20 text-center">
                            <p class="text-sm">📅 Dates: 13th–14th December 2025</p>
                            <p class="text-xs text-white/60">📍 Location: Address Istanbul</p>
                        </div>
                        <!-- Location 2 -->
                        <!--<div-->
                        <!--    class="flex-1 p-2 rounded-lg border border-white/20 backdrop-filter backdrop-blur-sm bg-primary/20 text-center">-->
                        <!--    <p class="text-sm">📅 Dates: 11th & 12th October</p>-->
                        <!--    <p class="text-xs text-white/60">📍 Location: The Charles Hotel, Munich</p>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>

            <!-- Right Side: Registration Form -->
            <div class="w-full lg:w-1/3 p-6 md:p-8 rounded-2xl bg-white/10 backdrop-filter backdrop-blur-sm shadow-xl">
                <h2 class="text-xl md:text-2xl font-serif mb-6 text-center text-white">Register for the Event</h2>

                <form id="bookingForm" class="space-y-4" action="{{ route('register.store') }}" method="POST">
                    <!-- Name Field -->
                    <div>
                        <input type="text" id="name" name="name" placeholder="First Name"  required
                            class="w-full p-3 rounded-lg bg-gray-700/50 border border-white/20 text-white 
                   placeholder-gray-400 focus:outline-none focus:border-[#D1CCBD] transition-colors">
                        <p class="mt-1 text-sm text-red-400 hidden" id="error-name">Name is required.</p>
                    </div>

                    <!-- Email Field -->
                    <div>
                        <input type="email" id="email" name="email" placeholder="Email Address" required
                            class="w-full p-3 rounded-lg bg-gray-700/50 border border-white/20 text-white 
                   placeholder-gray-400 focus:outline-none focus:border-[#D1CCBD] transition-colors">
                        <p class="mt-1 text-sm text-red-400 hidden" id="error-email">Valid email is required.</p>
                    </div>

                    <!-- Phone Field -->
                    <div>
                        <input type="hidden" id="fullPhone" name="fullPhone">
                        <input type="tel" id="phone" name="phone" placeholder="Contact Number" data-country='tr' required
                            class="w-full p-3 rounded-lg bg-gray-700/50 border border-white/20 text-white 
                   placeholder-gray-400 focus:outline-none focus:border-[#D1CCBD] transition-colors">
                   <p class="mt-1 text-sm text-red-400 hidden" id="error-phone">Phone is required.</p>
                    </div>

                    <!-- Date Dropdown -->
                    <div>
                        <select id="date_city" name="date_city" required
                            class="w-full p-3 rounded-lg bg-gray-700/50 border border-white/20 text-white 
                   focus:outline-none focus:border-[#D1CCBD] transition-colors">
                            <option value="" disabled selected>Date of Visit</option>
                            <option value="13 Dec 2025">13 Dec 2025</option>
                            <option value="14 Dec 2025">14 Dec 2025</option>
                        </select>
                        <p class="mt-1 text-sm text-red-400 hidden" id="error-date">Please select date of
                            visit.</p>
                    </div>

                    <!-- Privacy Checkbox -->
                    <div class="flex items-center text-xs">
                        <input type="checkbox" id="privacy" name="privacy" required
                            class="form-checkbox h-4 w-4 text-[#D1CCBD] rounded border-gray-300 focus:ring-[#D1CCBD]">
                        <label for="privacy" class="ml-2 text-white/80">
                            I agree to Unique Properties' Terms and Conditions.
                        </label>

                    </div>
                    <div>
                        <p class="mt-1 text-sm text-red-400 hidden" id="error-privacy">You must accept the terms.</p>
                    </div>
                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                            class="w-full py-3 px-6 rounded-lg font-bold text-lg text-primary bg-gradient-to-r 
                   from-[#D1CCBD] to-[#919388] hover:from-[#919388] hover:to-[#D1CCBD] 
                   transition-all duration-300 ease-in-out transform hover:scale-105 shadow-lg">
                            Submit Now
                        </button>
                    </div>

                    <!-- Success/Error Messages -->
                    <p id="form-success" class="hidden mt-4 text-green-400 text-center font-semibold">✅ Submitted
                        successfully!</p>
                    <p id="form-error" class="hidden mt-4 text-red-400 text-center font-semibold">❌ Something went
                        wrong. Please try again.</p>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center text-sm text-white">
            <p>&copy; {{ date('Y') }} Unique Properties. All Rights Reserved.</p>
        </div>
    </div>

</body>

</html>