jQuery(document).ready(function($) {
    // Mobile menu toggle
    $('.mobile-menu-toggle').on('click', function() {
        $('.wpl-navigation').toggleClass('active');
        $('body').toggleClass('mobile-menu-active');
    });
    
    // Smooth scroll for anchor links
    $('a[href*="#"]').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 80
        }, 500);
    });
    
    // Countdown timer
    function initializeCountdown() {
        const summitDate = new Date('2024-09-15T00:00:00').getTime();
        
        function updateCountdown() {
            const now = new Date().getTime();
            const distance = summitDate - now;
            
            if (distance < 0) {
                $('.countdown-timer').html('<div class="countdown-ended">Summit has started!</div>');
                return;
            }
            
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            $('#days').text(days.toString().padStart(2, '0'));
            $('#hours').text(hours.toString().padStart(2, '0'));
            $('#minutes').text(minutes.toString().padStart(2, '0'));
            $('#seconds').text(seconds.toString().padStart(2, '0'));
        }
        
        updateCountdown();
        setInterval(updateCountdown, 1000);
    }
    
    // Load speakers
    function loadSpeakers() {
        $.ajax({
            url: wpl_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'fetch_speakers'
            },
            success: function(response) {
                if (response.success) {
                    displaySpeakers(response.data);
                }
            },
            error: function() {
                $('#speakers-container, #all-speakers-container').html('<p>Error loading speakers. Please try again later.</p>');
            }
        });
    }
    
    function displaySpeakers(speakers) {
        let speakersHTML = '';
        
        speakers.forEach(speaker => {
            speakersHTML += `
                <div class="speaker-card">
                    <img src="${speaker.image}" alt="${speaker.name}" class="speaker-image">
                    <div class="speaker-info">
                        <h3 class="speaker-name">${speaker.name}</h3>
                        <p class="speaker-title">${speaker.title}</p>
                        <p class="speaker-company">${speaker.company}</p>
                    </div>
                </div>
            `;
        });
        
        $('#speakers-container, #all-speakers-container').html(speakersHTML);
    }
    
    // Initialize
    initializeCountdown();
    loadSpeakers();
});