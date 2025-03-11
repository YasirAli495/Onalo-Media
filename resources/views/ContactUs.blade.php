<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Contact Us')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ContactUs.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>


<body>
   @include('include.header')
            <!-- Banner -->
            <div class="Contact-banner">
                <img src="../images/services.png" alt="">
            </div>
            <!-- Contact section -->
            <div class="contact-ways-container">
                <h1 class="text-center">What do you want to contact us about?</h1>
                
            </div>
            <!-- Contact Section -->
            <div class="custom-contact-container">
                <!-- Left Section (Details) -->
                <section class="contact-section" data-aos="fade-right" data-aos-duration="1000">
                    <h4 class="contact-heading">Contact Us</h4>
                    <h4 class="contact-title">Get in Touch with Us</h4>

                    <h2 class="contact-subtitle">Your Connection Matters</h2>

                    <p class="contact-description">
                        Our team is here to provide quick and effective support. Reach out via phone, email, live chat, or visit us during business hours.
                    </p>
                
                    @php
                        $contact = App\Models\ContactDetail::first();
                    @endphp
                
                    <div class="contact-details">
                        <div class="contact-card">
                            <div class="icon">
                                <img src="{{ asset('images/phone.png') }}" alt="Phone">
                            </div>
                            <div class="info">
                                <p class="label">Phone Number</p>
                                <p class="value">{{ $contact->phone ?? 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="contact-card">
                            <div class="icon">
                                <img src="{{ asset('images/message.svg') }}" alt="Message">
                            </div>
                            <div class="info">
                                <p class="label">Email Address</p>
                                <p class="value">{{ $contact->email ?? 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="contact-card full">
                            <div class="icon">
                                <img src="{{ asset('images/location.svg') }}" alt="Location">
                            </div>
                            <div class="info">
                                <p class="label">Location</p>
                                <p class="value">{{ $contact->location ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Right Section (Form) -->
                <!-- contact.blade.php -->


<section class="contact-form-section mb-5" id="contact-form-section" data-aos="fade-left" data-aos-duration="1000">
    <div class="contact-form-container">
        <h2 class="form-heading" id="formTitle">Get In Touch</h2>
        <p class="form-description" id="formDescription">
            We’re here to help! If you have any questions or would like to discuss how our SEO and
            digital marketing services can benefit your business,
        </p>
        <form action="{{ url('/contact') }}" method="POST" class="contact-form">
            @csrf
            <div class="form-row">
                <input type="text" name="first_name" class="form-input" placeholder="First Name" required>
                <input type="text" name="last_name" class="form-input" placeholder="Last Name" required>
            </div>
            <div class="form-row">
                <input type="email" name="email" class="form-input" placeholder="Email Address" required>
                <input type="tel" name="phone" class="form-input" placeholder="Phone Number" required>
            </div>
            <div class="form-row">
                <select name="country" class="form-select" required>
                    <option value="" disabled selected>Select Country</option>
                    <option value="USA">USA</option>
                    <option value="India">India</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Bangladesh">Bangladesh</option>
                </select>
            </div>
            <textarea name="message" class="form-textarea" placeholder="Your Message" required></textarea>
            <button type="submit" class="form-button">
                Free Consultation <span>→</span>
            </button>
        </form>
    </div>
</section>


            </div>
            <!-- Contact details -->
            {{-- <section class="contact-cards-section">
                <div class="contact-card-box" data-aos="fade-up" data-aos-duration="700">
                    <div class="icon">
                        <img src="../images/send.svg" alt="">
                    </div>
                    <div class="details">
                        <p class="address">San Francisco 1446 Vorwuw Parkway</p>
                        <p class="label">Phone Number</p>
                        <p class="phone">123-456-7890</p>
                        <a href="#" class="map-link">View On Map</a>
                    </div>
                </div>
                <div class="contact-card-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="icon">
                        <img src="../images/send.svg" alt="">
                    </div>
                    <div class="details">
                        <p class="address">San Francisco 1446 Vorwuw Parkway</p>
                        <p class="label">Phone Number</p>
                        <p class="phone">123-456-7890</p>
                        <a href="#" class="map-link">View On Map</a>
                    </div>
                </div>
                <div class="contact-card-box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <div class="icon">
                        <img src="../images/send.svg" alt="">
                    </div>
                    <div class="details">
                        <p class="address">San Francisco 1446 Vorwuw Parkway</p>
                        <p class="label">Phone Number</p>
                        <p class="phone">123-456-7890</p>
                        <a href="#" class="map-link">View On Map</a>
                    </div>
                </div>
            </section> --}}
            <!-- Map -->
            <div class="map-container mt-5">
                <iframe width="100%" height="100%" frameborder="0" allowfullscreen="" loading="lazy"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.7979296853837!2d144.9617242753708!3d-37.81820183429083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b384a66f05%3A0x184e7067954ebf3b!2s13%2F2%20Elizabeth%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1734374395254!5m2!1sen!2s"
                    style="border-radius: 20px;"></iframe>
            </div>
           {{-- footer --}}
           @include('include.footer')

</html>