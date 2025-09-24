import './bootstrap';
import intlTelInput from 'intl-tel-input';


document.querySelectorAll('input[type="tel"]').forEach(input => {
    const iti = intlTelInput(input, {
        initialCountry: "de",
        separateDialCode: true,
        loadUtils: () => import("intl-tel-input/utils"),
    });
    // Create and insert the error span dynamically
    // Get the parent `.iti` wrapper
    const itiWrapper = input.closest(".iti");
    const fullPhoneInput = document.getElementById("fullPhone");
    // Create the error span
    const errorSpan = document.createElement("span");
    errorSpan.id = "phoneError";
    errorSpan.className = "text-red-500 text-sm hidden mt-1 block";
    errorSpan.innerText = "Invalid or incomplete phone number";

    // Insert the span after the `.iti` wrapper
    if (itiWrapper && itiWrapper.parentNode) {
        itiWrapper.parentNode.insertBefore(errorSpan, itiWrapper.nextSibling);
    }

    input.addEventListener("input", () => {
        if (iti.isValidNumber()) {
            const fullNumber = iti.getNumber(intlTelInput.utils.numberFormat.E164);
            errorSpan.classList.add("hidden");
            fullPhoneInput.value = fullNumber;
            input.closest('form').querySelector('button[type="submit"]').disabled = false;
        } else {
            errorSpan.classList.remove("hidden");
            fullPhoneInput.value = "";
            input.closest('form').querySelector('button[type="submit"]').disabled = true;
        }
    });
});

document.getElementById("bookingForm").addEventListener("submit", async function (e) {
    e.preventDefault();
    // Get phone full number from intl-tel-input
    const iti = window.iti; // if you saved it globally
    const phoneInput = document.getElementById("phone");
    const fullPhoneInput = document.getElementById("fullPhone");
    if (iti && iti.isValidNumber()) {
        fullPhoneInput.value = iti.getNumber();
    }

    // Collect form data
    const formData = new FormData(this);
    const data = Object.fromEntries(formData.entries());

    // Reset errors
    document.querySelectorAll("[id^='error-']").forEach(el => el.classList.add("hidden"));
    document.getElementById("form-success").classList.add("hidden");
    document.getElementById("form-error").classList.add("hidden");

    // Basic validation
    let valid = true;
    if (!data.name) { document.getElementById("error-name").classList.remove("hidden"); valid = false; }
    if (!data.email || !/^\S+@\S+\.\S+$/.test(data.email)) { document.getElementById("error-email").classList.remove("hidden"); valid = false; }
    if (!data.phone) { document.getElementById("error-phone").classList.remove("hidden"); valid = false; }
    if (!data.date_city) { document.getElementById("error-date").classList.remove("hidden"); valid = false; }
    if (!data.privacy) { document.getElementById("error-privacy").classList.remove("hidden"); valid = false; }
    if (!valid) return;

    try {
        const res = await fetch("/register", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify(data)
        });

        const result = await res.json();
        if (res.ok && result.success) {
            document.getElementById("form-success").classList.remove("hidden");
            document.getElementById("bookingForm").reset();
        } else if (res.status === 422) {
            // Show validation errors dynamically
            for (const [field, messages] of Object.entries(result.errors)) {
                const errorEl = document.getElementById(`error-${field}`);
                if (errorEl) {
                    errorEl.innerText = messages[0]; // show first error
                    errorEl.classList.remove("hidden");
                }
            }
        } else if (result.message) {
            console.log(result.message);
            // document.getElementById("form-error").innerHTML = result.message;
            document.getElementById("form-error").classList.remove("hidden");
        }
    } catch (err) {
        console.error("Error submitting form:", err);
        // document.getElementById("form-error").innerHTML = err.message;
        document.getElementById("form-error").classList.remove("hidden");
    }

});
