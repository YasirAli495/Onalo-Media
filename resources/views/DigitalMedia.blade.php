<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Digital Media')</title>

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
          {{-- banner --}}
    <div class="service-banner">
                <img src="../images/Digital-media-onalo.png" alt="">
            </div>
            <!-- Services -->
            <div class="custom-card-container">
                <!-- Card 1 -->
                
                <div class="custom-card-container" >
                    @foreach ($cards as $card)
                        <a href="{{ route('services') }}" style="text-decoration: none; width:270px; height:600px">
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
            </div>    
                
               
               
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
            <section class="custom-work-section">
                <div class="container position-relative">
                    <div class="custom-work-description text-center" data-aos="fade-up">
                        <h5>HOW WE WORK</h5>
                        <h2 class="h2_margin">Our Process For Delivering Results</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry’s standard dummy text ever.</p>
                    </div>
                    <div class="custom-work-steps d-flex justify-content-center position-relative">
                        <div data-aos="fade-left" data-aos-duration="700" class="custom-work-step" style="top: -66px; left: -30px;">
                            <h2>01.</h2>
                            <h4>Make An Appointment</h4>
                        </div>
                        <div data-aos="fade-left" data-aos-duration="700" class="custom-work-step" style="bottom: -70px; left: 260px;">
                            <h2>02.</h2>
                            <h4>Meet Our Team</h4>
                        </div>
                        <div data-aos="fade-right" data-aos-duration="700" class="custom-work-step" style="right: 260px; top: -66px;">
                            <h2>03.</h2>
                            <h4>Get Consultation</h4>
                        </div>
                        <div data-aos="fade-right" data-aos-duration="700" class="custom-work-step" style="right: -49px; bottom: -70px;">
                            <h2>04.</h2>
                            <h4>Start Project</h4>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center" data-aos="zoom-in">
                        <a href="{{ url('/contact') }}" class="custom-work-button">Contact Now</a>
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
                    <p class="custum-service-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
                        totam, hic, tempore libero aliquid ducimus tempora esse facilis ratione consequatur officiis
                        nihil dolorem error minus, dolor repellendus repellat perspiciatis saepe.</p>
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
            <div class="boc">
                <section class="elementor-section">
                    <ul class="tab-menu">
                        <li><a href="#tab1-0" class="tab-a active">Marketing</a></li>
                        <li><a href="#tab1-1" class="tab-a">Planning</a></li>
                        <li><a href="#tab1-2" class="tab-a">Analysis</a></li>
                        <li><a href="#tab1-3" class="tab-a">Strategy</a></li>
                    </ul>

                    <div class="ht-tab-content">
                        <div class="ht-tab-pane tab-active" id="tab1-0">
                            <div class="row" style="flex-wrap: nowrap; @media (max-width:850px) {
                            .row{
                              flex-wrap: wrap;
                            }
                          }">
                                <div class="col-lg-6">
                                    <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/01-4.png"
                                        alt="Marketing">
                                </div>
                                <div class="col-lg-6">
                                    <p>SEO strategies help you rank higher on search engines...</p>
                                    <div class="tab-list">
                                        <ul>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>User-Friendly Interface</li>
                                            </div>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>Advanced reporting and analytics</li>
                                            </div>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>Customizable branding options</li>
                                            </div>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>Start your journey to success</li>
                                            </div>
                                        </ul>
                                    </div>
                                    <a href="#" class="primary-btn">Explore More</a>
                                </div>
                            </div>
                        </div>

                        <div class="ht-tab-pane" id="tab1-1">
                            <div class="row" style="flex-wrap: nowrap; @media (max-width:850px) {
                            .row{
                              flex-wrap: wrap;
                            }
                          }">
                                <div class="col-lg-6">
                                    <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/02-5.png"
                                        alt="Planning">
                                </div>
                                <div class="col-lg-6">
                                    <p>SEO strategies help you rank higher on search engines...</p>
                                    <div class="tab-list">
                                        <ul>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>User-Friendly Interface</li>
                                            </div>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>Advanced reporting and analytics</li>
                                            </div>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>Customizable branding options</li>
                                            </div>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>Start your journey to success</li>
                                            </div>
                                        </ul>
                                    </div>
                                    <a href="#" class="primary-btn">Explore More</a>
                                </div>
                            </div>
                        </div>

                        <div class="ht-tab-pane" id="tab1-2">
                            <div class="row" style="flex-wrap: nowrap; @media (max-width:850px) {
                            .row{
                              flex-wrap: wrap;
                            }
                          }">
                                <div class="col-lg-6">
                                    <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/03-4.png"
                                        alt="Analysis">
                                </div>
                                <div class="col-lg-6">
                                    <p>SEO strategies help you rank higher on search engines...</p>
                                    <div class="tab-list">
                                        <ul>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>User-Friendly Interface</li>
                                            </div>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>Advanced reporting and analytics</li>
                                            </div>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>Customizable branding options</li>
                                            </div>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>Start your journey to success</li>
                                            </div>
                                        </ul>
                                    </div>
                                    <a href="#" class="primary-btn">Explore More</a>
                                </div>
                            </div>
                        </div>

                        <div class="ht-tab-pane" id="tab1-3">
                            <div class="row" style="flex-wrap: nowrap; @media (max-width:850px) {
                            .row{
                              flex-wrap: wrap;
                            }
                          }">
                                <div class="col-lg-6">
                                    <img src="https://seoland.themeht.com/wp-content/uploads/2024/04/04-4.png"
                                        alt="Strategy">
                                </div>
                                <div class="col-lg-6">
                                    <p>SEO strategies help you rank higher on search engines...</p>
                                    <div class="tab-list">
                                        <ul>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>User-Friendly Interface</li>
                                            </div>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>Advanced reporting and analytics</li>
                                            </div>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>Customizable branding options</li>
                                            </div>
                                            <div style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                                    height="15" viewBox="0 0 30 30"
                                                    style="fill:#f76f00;  margin-top: -5px;">
                                                    <path
                                                        d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z">
                                                    </path>
                                                </svg>
                                                <li>Start your journey to success</li>
                                            </div>
                                        </ul>
                                    </div>
                                    <a href="#" class="primary-btn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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