document.addEventListener("DOMContentLoaded", function() {
    
    // === 1. SCROLL REVEAL LOGIC ===
    
    const scrollElements = document.querySelectorAll("[data-scroll]");

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("scrolled");
                observer.unobserve(entry.target);
            }
        });
    }, {
        root: null,
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    });

    scrollElements.forEach(element => {
        observer.observe(element);
    });


    // ---


    // === 2. WEDDING COUNTDOWN LOGIC ===
    
    // Set the date and time for the wedding (29th Nov 2025 at 10:00:00)
    // FIX: Appending "GMT+02:00" ensures the time is calculated for Lusaka (CAT).
    const countdownDate = new Date("Nov 29, 2025 10:00:00 GMT+02:00").getTime();

    // Update the count every 1 second
    const x = setInterval(function() {
        const now = new Date().getTime();
        const distance = countdownDate - now;

        // Calculate time units
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Safely check if the elements exist before updating
        const daysEl = document.getElementById("days");
        const hoursEl = document.getElementById("hours");
        const minutesEl = document.getElementById("minutes");
        const secondsEl = document.getElementById("seconds");

        if (daysEl && hoursEl && minutesEl && secondsEl) {
            // Display results, ensuring two digits (padStart)
            daysEl.innerHTML = String(days).padStart(2, '0');
            hoursEl.innerHTML = String(hours).padStart(2, '0');
            minutesEl.innerHTML = String(minutes).padStart(2, '0');
            secondsEl.innerHTML = String(seconds).padStart(2, '0');
        }

        // If the countdown is finished (time runs out)
        if (distance < 0) {
            clearInterval(x);
            const countdownContainer = document.getElementById("countdown");
            if (countdownContainer) {
                countdownContainer.innerHTML = "<h2 style='color: white; margin: 0; text-transform: none;'>The celebration is underway!</h2>";
            }
        }
    }, 1000);


    // ---


    // === 3. WHATSAPP RSVP FUNCTIONALITY (FIXED & ATTACHED) ===

    const rsvpButton = document.getElementById('rsvp-submit-button');
    
    // Attach the event listener to the button once the DOM is ready
    if (rsvpButton) {
        rsvpButton.addEventListener('click', sendRSVPToWhatsApp);
    }
    
    // Function to handle the RSVP form submission and send data to WhatsApp
    function sendRSVPToWhatsApp(event) {
        // Prevent the default form submission (stops page reload)
        event.preventDefault();

        const form = document.getElementById('rsvp-form');

        // 1. Basic Form Validation Check
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        // 2. Collect Data
        const fullName = document.getElementById('name').value;
        const attendingRadio = form.querySelector('input[name="attending"]:checked');
        const attending = attendingRadio ? attendingRadio.value : 'Not Selected';
        const guests = document.getElementById('guests').value;
        const dietary = document.getElementById('dietary').value || 'None';

        // 3. Format the Message Text for WhatsApp
        // %0A is the URL-encoded equivalent of a newline character
        let messageText = "🎉 New Wedding RSVP! 🎉\n\n";
        messageText += "*Name(s):* " + fullName + "%0A";
        messageText += "*Attending:* " + (attending === 'Yes' ? 'YES (Joyfully Attending!)' : 'NO (Regretfully Declining)') + "%0A";
        
        // Include guest count only if the guest is attending
        if (attending === 'Yes') {
            messageText += "*Total Guests:* " + guests + "%0A";
        }

        messageText += "*Dietary Needs:* " + dietary + "%0A%0A";
        messageText += "Please confirm receipt with the guest. Thank you!";

        // 4. Create the WhatsApp URL
        // Target number: +260978464004
        const phoneNumber = "260978464004"; 

        const whatsappUrl = 
            "https://wa.me/" + 
            phoneNumber + 
            "?text=" + 
            encodeURIComponent(messageText);

        // 5. Open WhatsApp in a new tab/window
        window.open(whatsappUrl, '_blank');

        // 6. Provide Confirmation to the User on the Website
        const submitButton = document.getElementById('rsvp-submit-button');
        const messageDiv = document.getElementById('rsvp-message');
        
        // Visual feedback for the user
        submitButton.textContent = "WhatsApp Draft Created! ✅";
        submitButton.classList.remove('pulse');
        submitButton.disabled = true;

        messageDiv.textContent = "Your RSVP draft is open in WhatsApp. **You must press 'Send' there to complete the submission!**";
        messageDiv.style.display = 'block';

        // Optional: After confirmation, hide the form to prevent double-submitting
        setTimeout(() => {
            // form.style.display = 'none'; 
        }, 2000); 
    }

});