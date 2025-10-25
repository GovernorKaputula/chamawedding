<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chama & Mwila’s Wedding | 29.11.2025</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <nav class="site-navigation sticky-nav">
        <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#story">Our Story</a></li>
            <li><a href="#timeline">Timeline</a></li>
            <li><a href="#rsvp">RSVP</a></li>
            <li><a href="#gallery">Gallery</a></li>
        </ul>
    </nav>

    <main>
        <header class="hero" id="hero" style="background-image: url('images/wed2.jpg');"> 
            <div class="hero-content" data-scroll>
                <p class="pre-heading">The wedding of</p>
                <h1 class="couple-names">Chama & Mwila</h1>
                <p class="date">29th November 2025</p>
            </div>
        </header>
        
        <section id="story" class="content-section" data-scroll>
            <div class="invitation-message" data-scroll="fade-up">
                 <h2>We invite you to celebrate our union!</h2>
                 <p class="readable-text">
                    With hearts full of love and gratitude, we, Chama and Mwila, request the pleasure of your company as we exchange vows and begin our journey as husband and wife. Your presence will be our greatest gift. <strong>Please join us in Lusaka, Zambia.</strong>
                 </p>
            </div>

            <div class="couple-intro-container">
                <div class="couple-card" data-scroll="fade-right">
                    <img src="images/chama.jpg" alt="Chama Musonda, The Bride" class="profile-photo" />
                    <h3>Chama Musonda</h3>
                    <p>The Bride</p>
                </div>
                <div class="couple-card" data-scroll="fade-left">
                    <img src="images/mwila.jpg" alt="Mwila Mbulakulima, The Groom" class="profile-photo" />
                    <h3>Mwila Mbulakulima</h3>
                    <p>The Groom</p>
                </div>
            </div>
        </section>

        <section id="countdown-section" class="countdown-section" data-scroll>
            <h2>Until We Say "I Do"</h2>
            <div class="countdown-timer" id="countdown">
                <div class="time-unit"><span id="days">00</span><small>Days</small></div>
                <div class="time-unit"><span id="hours">00</span><small>Hours</small></div>
                <div class="time-unit"><span id="minutes">00</span><small>Minutes</small></div>
                <div class="time-unit"><span id="seconds">00</span><small>Seconds</small></div>
            </div>
        </section>

        <section id="timeline" class="content-section" data-scroll>
            <h2>The Wedding Timeline</h2>
            <div class="event-details">
                
                <div class="event ceremony" data-scroll="fade-up">
                    <h4><span class="event-icon"><i class="fa-solid fa-church"></i></span> The Ceremony</h4>
                    <p class="time-details">
                         <strong>09:30 hrs:</strong> Guests arrive and are seated.<br>
                         <strong>10:00 hrs:</strong> Processional begins.<br>
                         <strong>11:30 hrs:</strong> Ceremony concludes.
                    </p>
                    <address>St. Ignatius Catholic Church, Lusaka</address>
                    <a href="https://maps.google.com/?cid=1222717358917862993" target="_blank" class="map-link">View Directions</a>
                </div>

                <hr class="event-divider">

                <div class="event photos-break" data-scroll="fade-up">
                    <h4><span class="event-icon"><i class="fa-solid fa-camera"></i></span> The Photoshoot</h4> 
                    <p class="time-details">
                         <strong>11:30 hrs - 16:00 hrs:</strong> This period is reserved for the bridal party's photoshoot and travel to the reception venue. Guests are welcome to travel to the Radisson Blu to check in, rest, and refresh.
                    </p>
                    <address>
                        *Photoshoot location: <strong>Radisson Blu Hotel, Lusaka</strong>*
                    </address>
                </div>

                <hr class="event-divider">

                <div class="event reception" data-scroll="fade-up">
                    <h4><span class="event-icon"><i class="fa-solid fa-champagne-glasses"></i></span> The Reception</h4>
                    <p class="time-details">
                         <strong>17:00 hrs:</strong> Guests arrive for Cocktails & Canapés.<br>
                         <strong>18:00 hrs:</strong> Dinner Service begins.<br>
                         <strong>19:00 hrs:</strong> Cake Cutting & First Dance.<br>
                         <strong>19:30 hrs:</strong> Dance Floor Opens!
                    </p>
                    <address>Radisson Blu Hotel, Lusaka</address>
                    <a href="https://maps.google.com/?cid=72219736927252305" target="_blank" class="map-link">View Directions</a>
                </div>
            </div>
        </section>

        <section id="rsvp" class="form-section content-section" data-scroll>
            <h2>RSVP: Will You Join Our Celebration?</h2>
            <p class="readable-text">
                We can't wait to share our special day with you! Kindly confirm your attendance by <strong>15th November 2025</strong>.
            </p>

            <form id="rsvp-form" class="rsvp-form">
                <div class="form-group">
                    <label for="name">Your Full Name(s)</label>
                    <input type="text" id="name" name="name" required placeholder="e.g., Mr. & Mrs. Banda" />
                </div>
                
                <div class="form-group attendance-group">
                    <label for="attending">Will you be attending?</label>
                    <select id="attending" name="attending" required>
                        <option value="">-- Please Select --</option>
                        <option value="Yes">Joyfully Attending 🎉</option>
                        <option value="No">Regretfully Declining 😔</option>
                    </select>
                </div>

                <div class="form-group guest-count-group">
                    <label for="guests">Total Number in your party (including yourself)</label>
                    <input type="number" id="guests" name="guests" min="0" value="1" required /> 
                </div>
                
                <div class="form-group">
                    <label for="dietary">Dietary Needs or Allergies (Optional)</label>
                    <textarea id="dietary" name="dietary" rows="3" placeholder="e.g., Vegetarian, Gluten-Free, Nut allergy..."></textarea>
                </div>
                
                <button id="rsvp-submit-button" type="submit" class="cta-button pulse">Submit RSVP</button>
            </form>

            <div id="rsvp-message" class="hidden-message"></div>
        </section>

        <section id="gallery" class="content-section" data-scroll>
            <h2>Gallery</h2>
            <p class="readable-text">A few moments from our journey together.</p>
            
            <div class="photo-grid-5">
                
                <div class="main-photo" data-scroll="fade-up">
                    <img src="images/wed1.jpg" alt="Couple photo 1" role="button">
                </div>

                <div class="sub-photos">
                    <img src="images/wed6.jpg" alt="Couple photo 2" data-scroll="fade-up" data-scroll-delay="100" role="button">
                    <img src="images/wed3.jpg" alt="Couple photo 3" data-scroll="fade-up" data-scroll-delay="200" role="button">
                    <img src="images/wed4.jpg" alt="Couple photo 4" data-scroll="fade-up" data-scroll-delay="300" role="button">
                    <img src="images/wed5.jpg" alt="Couple photo 5" data-scroll="fade-up" data-scroll-delay="400" role="button">
                </div>

            </div>
            
            <div class="contact-details" data-scroll="fade-up">
                 <h3>For Event Details, Kindly Contact:</h3>
                 <p><strong>Bertha Pandwe.</strong> (From Her): <a href="tel:+260979133402">+260 979 133 402</a></p>
                 <p><strong>Chaile Phiri</strong> (From Him): <a href="tel:+26097732180">+260 977 326 180</a></p>
            </div>
        </section>
    </main>

    <footer>
        <p>© Chama & Mwila 2025 | #ChamaAndMwilaSayIDo</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // === 1. SCROLL REVEAL ===
            const scrollElements = document.querySelectorAll("[data-scroll]");
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Apply scrolling effect and stop observing
                        entry.target.classList.add("scrolled");
                        observer.unobserve(entry.target);
                    }
                });
            }, { 
                root: null,
                threshold: 0.15,
                rootMargin: "0px 0px -50px 0px" // Improved rootMargin for better reveal timing
            });
            scrollElements.forEach(el => observer.observe(el));

            // === 2. COUNTDOWN TIMER ===
            const countdownContainer = document.getElementById("countdown-section");
            // Set the target date and time (Nov 29, 2025, 10:00 AM, Zambia Time)
            const countdownDate = new Date("Nov 29, 2025 10:00:00 GMT+02:00").getTime();
            
            const timer = setInterval(() => {
                const now = new Date().getTime();
                const distance = countdownDate - now;
                
                // Time calculations
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Safely update DOM elements with zero padding
                const daysEl = document.getElementById("days");
                const hoursEl = document.getElementById("hours");
                const minutesEl = document.getElementById("minutes");
                const secondsEl = document.getElementById("seconds");

                if (daysEl) daysEl.textContent = days.toString().padStart(2, '0');
                if (hoursEl) hoursEl.textContent = hours.toString().padStart(2, '0');
                if (minutesEl) minutesEl.textContent = minutes.toString().padStart(2, '0');
                if (secondsEl) secondsEl.textContent = seconds.toString().padStart(2, '0');

                if (distance < 0) {
                    clearInterval(timer);
                    if (countdownContainer) {
                        countdownContainer.innerHTML = "<h2>The celebration is underway!</h2>";
                    }
                }
            }, 1000);

            // === 3. GOOGLE SHEETS RSVP SUBMISSION ===
            const form = document.getElementById('rsvp-form');
            const messageDiv = document.getElementById('rsvp-message');
            // NOTE: Replace this with your actual deployed Google Apps Script URL
            const scriptURL = "https://script.google.com/macros/s/AKfycbzy3Nz7vwggV2nTqxhxxm5ZNdR7BS_ILbaSyE0WSQhf2ORsF6nA4crHJ_UXtAmQDcja/exec";

            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                
                // CORRECTED: Get the value of the <select> element
                const attendingSelect = document.getElementById('attending');
                const attendingStatusValue = attendingSelect ? attendingSelect.value : "";
                
                // Validation check for the dropdown
                if (attendingStatusValue === "") {
                    messageDiv.textContent = "⚠️ Please select whether you will attend.";
                    messageDiv.style.display = 'block';
                    return;
                }
                
                // Form data payload
                const data = {
                    name: document.getElementById('name').value,
                    attending: attendingStatusValue, // Corrected value
                    guests: document.getElementById('guests').value,
                    dietary: document.getElementById('dietary').value || 'None'
                };

                // Show loading message and disable button
                messageDiv.textContent = "Sending RSVP...";
                messageDiv.style.display = 'block';
                document.getElementById('rsvp-submit-button').disabled = true;

                try {
                    const res = await fetch(scriptURL, {
                        method: "POST",
                        redirect: "follow",
                        // Using text/plain for compatibility with some Google Scripts
                        headers: { "Content-Type": "text/plain;charset=utf-8" }, 
                        body: JSON.stringify(data)
                    });

                    if (res.ok) {
                        messageDiv.textContent = "✅ Your RSVP has been submitted successfully! Thank you!";
                        form.reset();
                    } else {
                        console.error("Server responded with error status:", res.status);
                        messageDiv.textContent = "⚠️ There was an issue submitting your RSVP. Please check the RSVP link or try again.";
                    }
                } catch (err) {
                    console.error("Fetch Error:", err);
                    messageDiv.textContent = "❌ Network error. Please check your connection and try again.";
                } finally {
                    document.getElementById('rsvp-submit-button').disabled = false;
                }
            });
        });
    </script>
</body>
</html>