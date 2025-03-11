<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Print Media')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    @include('include.header')
            <div class="service-banner">
                <img src="../images/print-media-onalo.png" alt="">
            </div>
            <!-- Services -->
            
                <!-- Card 1 -->
                
                <div class="custom-card-container">
                    @foreach ($cards as $card)
                        <a href="{{ route('services') }}" style="text-decoration: none;">
                            <div class="custom-card1" data-aos="fade-up" data-aos-duration="700">
                                <div class="custom-card-header">
                                    <div class="custom-card-icon">
                                        <img src="{{ asset($card->image) }}" alt="{{ $card->title }}">
                                    </div>
                                </div>
                                <h1 class="custom-card-heading">{{ $card->title }}</h1>
                                <p class="custom-card-description">{{ $card->description }}</p>
                                <div class="custom-card-footer">
                                    <button class="custom-card-btn">
                                        <img src="../images/arrow-up-right.png" alt="Right Arrow">
                                    </button>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                
                   
                    <!-- Card 3 -->
                    
            <!-- Lets make something together -->
            <!-- <div class="about-section" data-aos="fade-up" data-aos-duration="700">
                <div class="about-wrapper">
                    <div class="about-image">
                        <img src="../images/laptop-man.jpg" data-aos="fade-right" data-aos-duration="1000">
                    </div>
                    <div class="about-content">
                        <span class="about-badge" data-aos="fade-left" data-aos-duration="2000">Best SEO results</span>
                        <h1 class="about-title" data-aos="fade-left" data-aos-duration="2000">Let’s make something awesome together
                        </h1>
                        <p class="about-text" data-aos="fade-left" data-aos-duration="1000">Every pleasure is to be welcomed and every pain avoided. certain circumstances and owing to the claims welcomed and every pain avoided certain circumstances</p>
                            <div class="custom-features-container">
                                <div class="custom-feature-item">
                                    <i class="custom-feature-icon">✔</i>
                                    <span>30-day money back guarantee</span>
                                </div>
                                <div class="custom-feature-item">
                                    <i class="custom-feature-icon">✔</i>
                                    <span>Unlimited Application</span>
                                </div>
                                <div class="custom-feature-item">
                                    <i class="custom-feature-icon">✔</i>
                                    <span>Web site Marketing Solutions</span>
                                </div>
                                <div class="custom-feature-item">
                                    <i class="custom-feature-icon">✔</i>
                                    <span>24/7 system Monitoring</span>
                                </div>
                            </div>
                            
                        <div class="action-buttons" data-aos="fade-up" data-aos-duration="1000">
                            <button class="explore-btn">Explore More</button>
                            <div class="action-icon">
                                <img src="../images/rightArrow.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Our comitment -->
            <section class="expertise-section">
                <div class="expertise-container">
                    <div class="expertise-left" data-aos="fade-up" data-aos-duration="1000">
                        <div class="stats-box">
                            <div class="stat">
                                <h1>98%</h1>
                                <p>Successful Projects</p>
                            </div>
                            <div class="stat">
                                <h1>38K</h1>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="expertise-right">
                        <div class="expertise-header">
                            <span class="header-tag" data-aos="fade-left" data-aos-duration="1000">OUR EXPERTISE</span>
                            <h2>Our commitment is client satisfaction</h2>
                        </div>
                        <ul class="expertise-points">
                            <li data-aos="fade-up" data-aos-duration="1000">Organizational structure model</li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Satisfaction guarantee
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Ontime delivery</li>
                        </ul>
                        <div class="progress-bars">
                            <div class="progress">
                                <span class="label">IT Management</span>
                                <div class="bar">
                                    <div class="fill" style="width: 70%;" data-aos="fade-right"
                                        data-aos-duration="1000"></div>
                                </div>
                                <span class="percentage">70%</span>
                            </div>
                            <div class="progress">
                                <span class="label">Data Security</span>
                                <div class="bar">
                                    <div class="fill" style="width: 92%;" data-aos="fade-right" data-aos-duration="1000"
                                        data-aos-delay="200"></div>
                                </div>
                                <span class="percentage">92%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Markets -->
            <section class="partners-section">
                <div class="partners-container">
                    <div class="partners-header">
                        <div class="header-content">
                            <span class="header-tag-patner" data-aos="fade-left" data-aos-duration="1000">OUR
                                PARTNERS</span>
                            <h1 class="header-titles">Worked with Largest Brands</h1>
                        </div>
                    </div>
                    <div class="partners-grid" data-aos="fade-up" data-aos-duration="1000">
                        <div class="partner-card">
                            <img src="../images/Wattse.png" alt="">
                        </div>
                        <div class="partner-card">
                            <img src="../images/morkat.png" alt="">
                        </div>
                        <div class="partner-card">
                            <img src="../images/lotype.png" alt="">
                        </div>
                        <div class="partner-card">
                            <img src="../images/Muast.png" alt="">
                        </div>
                        <div class="partner-card">
                            <img src="../images/next-tech.png" alt="">
                        </div>
                        <div class="partner-card">
                            <img src="../images/Yuhers.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- fast service -->
            <div class="custum-service-container">
                <div class="custum-service-img-container">
                    <img src="https://themes.potenzaglobalsolutions.com/html/seohub-seo-marketing-social-media-multipurpose-html5-template/images/about/02.png"
                        alt="">
                </div>
                <div class="custum-service-content">
                    <h1>Super-fast support</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas totam, hic, tempore libero
                        aliquid ducimus tempora esse facilis ratione consequatur officiis nihil dolorem error minus,
                        dolor repellendus repellat perspiciatis saepe.</p>
                </div>
            </div>
            <!-- Quality Skills -->
            <!-- <div class="quality-skills">
                <div class="quality-left-container" data-aos="fade-up" data-aos-duration="700">
                    <span class="Quality-bage" data-aos="fade-left" data-aos-duration="1000">Our Qualities</span>
                    <h1>Quality Skills</h1>
                    <p style="opacity: 0.7;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam est ea quisquam dolorum impedit porro provident nulla quae voluptatem quia nisi assumenda veniam ad, mollitia voluptates ipsa dolores distinctio voluptatum?</p>
                    <button class="explore-btn" style="font-weight: bold;">FREE SEO CONSULATION</button>
                </div>
                <div class="progress-bar-container" data-aos="fade-up" data-aos-duration="700">
                    <div class="progress-bar-item">
                        <div class="progress-bar-title">
                            <span>Content marketing strategy</span>
                            <span class="progress-percentage">62%</span>
                        </div>
                        <div class="progress-bar-wrapper">
                            <div class="progress-bar-fill progress-fill-orange" style="width: 62%;"></div>
                        </div>
                    </div>
                    <div class="progress-bar-item">
                        <div class="progress-bar-title">
                            <span>Digital consultancy</span>
                            <span class="progress-percentage">86%</span>
                        </div>
                        <div class="progress-bar-wrapper">
                            <div class="progress-bar-fill progress-fill-green" style="width: 86%;"></div>
                        </div>
                    </div>
                    <div class="progress-bar-item">
                        <div class="progress-bar-title">
                            <span>Mobile Marketing</span>
                            <span class="progress-percentage">52%</span>
                        </div>
                        <div class="progress-bar-wrapper">
                            <div class="progress-bar-fill progress-fill-red" style="width: 52%;"></div>
                        </div>
                    </div>
                    <div class="progress-bar-item">
                        <div class="progress-bar-title">
                            <span>Reputation management</span>
                            <span class="progress-percentage">40%</span>
                        </div>
                        <div class="progress-bar-wrapper">
                            <div class="progress-bar-fill progress-fill-blue" style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Work Process -->
            <div class="custom-section">
                <span class="custom-tag1" id="tag" data-aos="fade-left" data-aos-duration="700" style="width:160px">
                    How It works
                </span>
                <h2>Work Process Of ONALO MEDIA</h2>
            </div>
            <div class="custom-container2">
                <div class="custom-left">
                    <div class="custom-card" data-aos="fade-right" data-aos-duration="700">
                        <div class="custom-icon">
                            <img src="../images/settings.png" class="custom-img" alt="">
                        </div>
                        <div class="custom-content">
                            <h1 class="custom-title">Comprehensive Website Audit</h1>
                            <p>We begin with a detailed consultation your market business goals, target audience,
                                marketing efforts.</p>
                        </div>
                    </div>
                    <div class="custom-card hovered" data-aos="fade-right" data-aos-duration="700" data-aos-delay="100">
                        <div class="custom-icon">
                            <img src="../images/world.svg" class="custom-img" alt="">
                        </div>
                        <div class="custom-content">
                            <h1 class="custom-title">Customized SEO Strategy</h1>
                            <p>Search Engine Optimize (SEO) best marketing is to essential for boosting your website
                                visibility in best.</p>
                        </div>
                    </div>
                    <div class="custom-card" data-aos="fade-right" data-aos-duration="700" data-aos-delay="200">
                        <div class="custom-icon">
                            <img src="../images/envelope.png" class="custom-img" alt="">
                        </div>
                        <div class="custom-content">
                            <h1 class="custom-title">Continuous Optimization</h1>
                            <p>Our team conducts thorough research to analyze your industry, competitors, an audience
                                behavior.</p>
                        </div>
                    </div>
                </div>
                <div class="custom-right">
                    <img src="../images/work process of softex.png" class="custom-img-full" alt="">
                </div>
            </div>
            <!-- Our process -->
            <!-- <section class="process-section">
                <div class="process-container">
                  <div class="process-header">
                    <span class="header-tag">OUR PROCESS</span>
                    <h1 class="header-title">
                      Building great future <br>
                      <span>Together, Be with us</span>
                    </h1>
                  </div>
                  <div class="process-grid">
                    <div class="process-card">
                      <div class="card-header">
                        <h3>Honesty</h3>
                        <div class="step-circle">01</div>
                      </div>
                      <p>Experience and expertise, I have been recognized through the awards achieved. I am able to customize solutions to meet your specific needs.</p>
                    </div>
                    <div class="process-card">
                      <div class="card-header">
                        <h3>Unity</h3>
                        <div class="step-circle">02</div>
                      </div>
                      <p>Experience and expertise, I have been recognized through the awards achieved. I am able to customize solutions to meet your specific needs.</p>
                    </div>
                    <div class="process-card">
                      <div class="card-header">
                        <h3>Innovation</h3>
                        <div class="step-circle">03</div>
                      </div>
                      <p>Experience and expertise, I have been recognized through the awards achieved. I am able to customize solutions to meet your specific needs.</p>
                    </div>
                  </div>
                </div>
            </section> -->
            <!-- Team Member -->
            <div class="team-container-upper">
                <span class="team-tag" data-aos="fade-left" data-aos-duration="1000" style="width:120px">Our TEAM</span>
                <h2 class="team-heading">Experts SEO Marketing Team</h2>
            </div>
            <div class="team-container" id="team-container">
                @foreach($teamMembers as $member)
                <div class="team-card" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">
                    <img src="{{ asset($member->image) }}" alt="{{ $member->name }}" class="team-image" />
                    <div class="team-info">
                        <div class="team-header text-center">
                            <h1 class="team-name text-center">{{ $member->name }}</h1>
                        </div>
                        <p class="team-role text-center">{{ $member->role }}</p>
                    </div>
                </div>
                @endforeach
            </div>

                
            <!-- Customer Review -->
            <div class="custom-testimonials-container">
                <span class="custom-testimonials-label" data-aos="fade-left" data-aos-duration="1000">
                    TESTIMONIALS
                </span>
                <div class="custom-testimonials-content">
                    <h2 class="custom-testimonials-heading" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        What Our Awesome Customers Say
                    </h2>
                    <p class="custom-testimonials-description" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        It is a long-established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. This is the point of using lorem Ipsum.
                    </p>
                    <div class="btn-container">
                        <button class="custom-carousel-btn-min custom-carousel-prev prevBtn" id="">
                            <img class="customer-icon" src="../images/left-icon.svg" alt="">
                        </button>
                        <button class="custom-carousel-btn-min custom-carousel-next nextBtn" id="">
                            <img class="customer-icon" src="../images/right-icon.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>
            <div class="custom-carousel-container">
                <button class="custom-carousel-btn custom-carousel-prev prevBtn" id=""><img class="customer-icon"
                        src="../images/left-icon.svg" alt=""></button>
                <div class="custom-carousel-wrapper">
                    <div class="custom-carousel-track" id="carousel1">
                        <!-- Card 1 -->
                        <div class="custom-carousel-card card-review">
                            <div class="custom-card-header-review">
                                <div class="custom-rating">
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                </div>
                                <div class="custom-quote">&#10078;</div>
                            </div>
                            <div class="custom-card-profile">
                                <div class="custom-avatar">
                                    <img src="../images/avatarlogo.png" alt="User Image" class="custom-avatar-img" />
                                </div>
                                <div>
                                    <h3 class="custom-user-name">Esther Howard</h3>
                                    <p class="custom-user-role">Nursing Assistant</p>
                                </div>
                            </div>
                            <p class="custom-card-text">
                                Consectetur adipiscing elit. Integer nunc viverra laoreet est the is porta pretium metus
                                aliquam
                                eget maecenas porta is nunc viverra Aenean.
                            </p>
                        </div>
                        <!-- Card 2 -->
                        <div class="custom-carousel-card card-review">
                            <div class="custom-card-header-review">
                                <div class="custom-rating">
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                </div>
                                <div class="custom-quote">&#10078;</div>
                            </div>
                            <div class="custom-card-profile">
                                <div class="custom-avatar">
                                    <img src="../images/avatarlogo.png" alt="User Image" class="custom-avatar-img" />
                                </div>
                                <div>
                                    <h3 class="custom-user-name">John Doe</h3>
                                    <p class="custom-user-role">Software Engineer</p>
                                </div>
                            </div>
                            <p class="custom-card-text">
                                Integer nunc viverra laoreet est the is porta pretium metus aliquam eget maecenas porta.
                            </p>
                        </div>
                        <div class="custom-carousel-card card-review">
                            <div class="custom-card-header-review">
                                <div class="custom-rating">
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                </div>
                                <div class="custom-quote">&#10078;</div>
                            </div>
                            <div class="custom-card-profile">
                                <div class="custom-avatar">
                                    <img src="../images/avatarlogo.png" alt="User Image" class="custom-avatar-img" />
                                </div>
                                <div>
                                    <h3 class="custom-user-name">John Doe</h3>
                                    <p class="custom-user-role">Software Engineer</p>
                                </div>
                            </div>
                            <p class="custom-card-text">
                                Integer nunc viverra laoreet est the is porta pretium metus aliquam eget maecenas porta.
                            </p>
                        </div>
                        <div class="custom-carousel-card card-review">
                            <div class="custom-card-header-review">
                                <div class="custom-rating">
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                    <span class="custom-star">&#9733;</span>
                                </div>
                                <div class="custom-quote">&#10078;</div>
                            </div>
                            <div class="custom-card-profile">
                                <div class="custom-avatar">
                                    <img src="../images/avatarlogo.png" alt="User Image" class="custom-avatar-img" />
                                </div>
                                <div>
                                    <h3 class="custom-user-name">John Doe</h3>
                                    <p class="custom-user-role">Software Engineer</p>
                                </div>
                            </div>
                            <p class="custom-card-text">
                                Integer nunc viverra laoreet est the is porta pretium metus aliquam eget maecenas porta.
                            </p>
                        </div>
                    </div>
                </div>
                <button class="custom-carousel-btn custom-carousel-next nextBtn" id=""><img class="customer-icon"
                        src="../images/right-icon.svg" alt=""></button>
            </div>
            <!-- Pricing -->
            {{-- <div class="pricing-header">
                <span class="pricing-badge" data-aos="fade-left" data-aos-duration="1000">
                    Pricing plan
                </span>
                <h2 class="pricing-title-upper">
                    SEO Marketing Pricing Plans
                </h2>
            </div>
            <div class="pricing-grid">
                <!-- Card 1 -->
                <div class="pricing-card pricing-card-basic" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <p class="pricing-title">BASIC</p>
                    <p class="pricing-description">Ideal for small businesses and startups looking to establish an
                        online presence.</p>
                    <div class="pricing-features">
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Local SEO optimization</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Basic content optimization</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Monthly performance reports</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Comprehensive website audit</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Technical SEO enhancementsdit</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Review generation management</p>
                        </div>
                    </div>
                    <div class="pricing-footer">
                        <h1 class="pricing-cost">$599</h1>
                        <p class="pricing-period">/Month</p>
                    </div>
                    <button class="pricing-button">Choose</button>
                </div>
                <!-- Card 2 -->
                <div class="pricing-card pricing-card-standard" data-aos="fade-up" data-aos-duration="1000">
                    <p class="pricing-title">PREMIUM</p>
                    <p class="pricing-description">For businesses ready to take their online presence to the next level.
                    </p>
                    <div class="pricing-features">
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Local SEO optimization</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Basic content optimization</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Monthly performance reports</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Comprehensive website audit</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Technical SEO enhancementsdit</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Review generation management</p>
                        </div>
                    </div>
                    <div class="pricing-footer">
                        <h1 class="pricing-cost">$699</h1>
                        <p class="pricing-period">/Month</p>
                    </div>
                    <button class="pricing-button">Choose</button>
                </div>
                <div class="pricing-card pricing-card-standard" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <p class="pricing-title">ADVANCE</p>
                    <p class="pricing-description">For businesses ready to take their online presence to the next level.
                    </p>
                    <div class="pricing-features">
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Local SEO optimization</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Basic content optimization</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Monthly performance reports</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Comprehensive website audit</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Technical SEO enhancementsdit</p>
                        </div>
                        <div class="feature">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zM10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" />
                            </svg>
                            <p class="feature-text">Review generation management</p>
                        </div>
                    </div>
                    <div class="pricing-footer">
                        <h1 class="pricing-cost">$799</h1>
                        <p class="pricing-period">/Month</p>
                    </div>
                    <button class="pricing-button">Choose</button>
                </div>
            </div> --}}
            
            <!-- Footer -->
           @include('include.footer')
</html>