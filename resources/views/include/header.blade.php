
    <div class="full-width">
        <div class="flex-column gap-16">
            <!-- Navbar -->
            <nav id="navbar" class="initial-navbar">
                <div class="navbar-container">
                    <!-- Logo -->
                    <div class="logo-container">
                        <div class="Logo-bg">
                            <img src="{{ asset('images/Logo3.png') }}" alt="" style="width:100%; height:60px;">
                        </div>
                       
                    </div>
                    <!-- Navbar Links -->
                    <div class="navbar-links">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                        <a href="{{ url('/about') }}" class="nav-link">About Us</a>
                        <div class="nav-dropdown">
                            <a class="nav-link">Service</a>
                            <div class="dropdown-menu">
                                <a href="{{ url('/digitalmedia') }}" class="dropdown-item">Digital Marketing</a>
                                <a href="{{ url('/printmedia') }}" class="dropdown-item">Print Marketing</a>
                            </div>
                        </div>
                        <a href="{{ url('/blog') }}" class="nav-link lg-only">Blog</a>
                        <a href="{{ url('/career') }}" class="nav-link lg-only">Career</a>
                        
                    </div>
                    <!-- Call to Action Button -->
                    <div class="navbar-cta">
                        <a href="{{ url('/contact') }}" class="nav-link"><button class="cta-button">
                            Get In Touch</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="cta-icon" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </button>
                        <div class="cta-icon-container">
                            <i class="fas fa-th"></i>
                        </div>
                        <div class="hamburger-container" id="hamburger">
                            <img src="{{ asset('images/hamburger.png') }}" alt="Hamburger Menu">
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Sidebar (Outside Navbar) -->
            <div class="sidebar" id="sidebar">
                <!-- Header -->
                <div class="sidebar-header">
                    <div class="logo-container">
                        <img src="https://via.placeholder.com/30" alt="Logo" />
                        <span class="sidebar-logo">Onalo Media</span>
                    </div>
                    <span class="sidebar-close" id="closeSidebar">&times;</span>
                </div>
                <!-- Navigation Links -->
                <div class="sidebar-links">
                    <a href="{{ url('/') }}" class="sidebar-link">
                        Home
                        <span>+</span>
                    </a>
                    <a href="{{ url('/about') }}" class="sidebar-link">
                        About Us
                        <span>+</span>
                    </a>
                    <div class="services-links">
                        <div href="#" class="sidebar-link" id="serviceLink">
                            Service
                            <span id="toggleIcon">+</span>
                        </div>
                        <div class="dropdown-menu-services" id="serviceDropdown">
                            <a href="{{ url('/digitalmedia') }}" class="sidebar-link">Digital Media</a>
                            <a href="{{ url('/printmedia') }}" class="sidebar-link">Print Media</a>
                        </div>
                    </div>
                    
                    <a href="{{ url('/blog') }}" class="sidebar-link">
                        Blog
                        <span>+</span>
                    </a>
                    
                </div>
                <!-- Call to Action -->
                <div class="sidebar-cta">
                    <a href="{{ url('/contact') }}" class="sidebar-link">
                        <button>Get in Touch</button>                       
                    </a>
                </div>
                <!-- Contact Details -->
                <div class="sidebar-contact">
                    <h3>Contact Us</h3>
                    <div class="sidebar-contact-icons">
                        <img class="contact-icon-sidebar" src="{{ asset('images/phone.png') }}" alt="">
                        <p>+1 123 456 7890</p>
                    </div>
                    <div class="sidebar-contact-icons">
                        <img class="contact-icon-sidebar" src="{{ asset('images/location.svg') }}" alt="">
                        <p>421 Allen, Mexico 4233</p>
                    </div>
                    <div class="sidebar-contact-icons">
                        <img class="contact-icon-sidebar" src="{{ asset('images/message.svg') }}" alt="">
                        <p>onalo@gmail.com</p>
                    </div>
                    <div class="sidebar-contact-icons">
                        <img class="contact-icon-sidebar" src="{{ asset('images/www.svg') }}" alt="">
                        <p>onalomedia.com</p>
                    </div>
                </div>
                <!-- Social Media Links -->
                <div class="sidebar-social">
                    <h3>Our Location</h3>
                    <div class="social-icons-container">
                        <div class="icon-container">
                            <img src="{{ asset('images/linkdin-icon.svg') }}" alt="">
                        </div>
                        <div class="icon-container">
                            <img src="{{ asset('images/Twitter-icon.svg') }}" alt="">
                        </div>
                        <div class="icon-container">
                            <img src="{{ asset('images/YT-icon.svg') }}" alt="">
                        </div>
                        <div class="icon-container">
                            <img src="{{ asset('images/facebook-icon.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
