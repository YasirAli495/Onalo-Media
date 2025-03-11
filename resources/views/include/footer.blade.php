<div class="gradient-section" style="margin-top: 150px">
    <h1 class="section-heading">Subscribe to stay connected with the latest online media marketing trends!</h1>
    {{-- <div class="input-container">
        <input type="text" placeholder="Your Web URL" class="input-field" />
        <button class="analyze-button">
            <p class="button-text-desktop">Analyze Website</p>
            <p class="button-text-mobile">Analyze</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="button-icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10.293 15.707a1 1 0 010-1.414L13.586 11H4a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div> --}}
</div>

<footer class="footer-container">
    <div class="footer-section">
        <h1 class="footer-logo">Onalo Media</h1>
        <p class="footer-description">Phasellus ultricies aliquam volutpat ullamcorper laoreet neque, a lacinia curabitur lacinia mollis</p>
        <div class="social-icons">
            @foreach(['t4.png', 't3.png', 't2.png', 't1.png'] as $icon)
                <div><img src="{{ asset('images/' . $icon) }}" class="social-icon" alt=""></div>
            @endforeach
        </div>
    </div>

    <div class="footer-section">
        <h1 class="footer-heading">Quick Links</h1>
        <div class="quick-links">
            @foreach([
                ['Onalo Media About', url('/about')], 
                ['Our Services', url('/services')], 
                ['Our Blogs', url('/blog')], 
                ['FAQ’S', url('/career')], 
                ['Contact Us', url('/contact')]
            ] as $link)
                <div class="link-item">
                    <img src="{{ asset('images/DbArrow.png') }}" class="link-icon" alt="">
                    <a href="{{ $link[1] }}" class="link-text">{{ $link[0] }}</a>
                </div>
            @endforeach
        </div>
    </div>
    

    <div class="footer-section">
        <h1 class="footer-heading">Contact Us</h1>
        <div class="contact-item">
            <img src="{{ asset('images/www.svg') }}" class="contact-icon" alt="">
            <a href="mailto:info@example.com" class="contact-text">info@example.com</a>
        </div>
        <div class="contact-item">
            <img src="{{ asset('images/phone.png') }}" class="contact-icon" alt="">
            <a href="tel:+2086660112" class="contact-text">+208-666-0112</a>
        </div>
        <input type="text" class="contact-input" placeholder="Your Email Address">
        <div class="checkbox-item">
            <input type="checkbox" id="privacy-checkbox">
            <label for="privacy-checkbox">I agree to the <span class="privacy-policy">Privacy Policy.</span></label>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        disable: false,
        startEvent: 'DOMContentLoaded',
        initClassName: 'aos-init',
        animatedClassName: 'aos-animate',
        useClassNames: false,
        disableMutationObserver: false,
        debounceDelay: 50,
        throttleDelay: 99,
        disable: function() {
            return window.innerWidth < 768; // Disable AOS on devices smaller than 768px
        },
    });
</script>

<script src="{{ asset('js/Home.js') }}"></script>
<script src="{{ asset('js/sharedDynamicContent.js') }}"></script>
<script src="{{ asset('js/navbar.js') }}"></script>
