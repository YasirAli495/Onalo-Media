<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Onalo Media') }}</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <style>
            /* Basic styling for modal */
      .modal {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.7);
          display: none;
          justify-content: center;
          align-items: center;
      }
      
      .modal-content {
          background-color: white;
          padding: 20px;
          width: 80%;
          max-width: 800px;
          border-radius: 8px;
          position: relative;
          overflow-y: auto;
      }
      
      .close-btn {
          position: absolute;
          top: 10px;
          right: 10px;
          font-size: 30px;
          cursor: pointer;
      }
      
      /* Container for the blog cards */
.blog-container {
    display: flex;
    flex-wrap: wrap;
    
    gap: 20px;
    padding: 100px;
}

/* Styling for each individual blog card */
.blog-card {
    width: 25%; /* Adjust the width to fit 3 cards per row */
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Hover effect for the card */
.blog-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
}

/* Styling for the image inside the blog card */
.blog-image {
    width: 100%;
    height: 200px; /* Fixed height */
    object-fit: cover; /* Ensures image doesn't get distorted */
}

/* Styling for the blog details section */
.blog-details {
    padding: 15px;
}

/* Meta info section */
.blog-meta {
    font-size: 14px;
    color: #777;
    margin-bottom: 10px;
}

/* Title styling */
.blog-title {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

/* Description text */
.blog-description {
    font-size: 14px;
    color: #555;
    line-height: 1.6;
}



          </style>
</head>

<body>
   @include('include.header')
   @if(session('success'))
    <div class="alert alert-success" style="position: fixed; top: 20px; left: 50%; transform: translateX(-50%); z-index: 9999; width: 80%">
        <span class="close-btn" style="position: absolute; top: 10px; right: 20px; cursor: pointer; font-size: 20px; font-weight: bold; color: black;">&times;</span>
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" style="position: fixed; top: 20px; left: 50%; transform: translateX(-50%); z-index: 9999; width: 80%">
        <span class="close-btn" style="position: absolute; top: 10px; right: 20px; cursor: pointer; font-size: 20px; font-weight: bold; color: black;">&times;</span>
        {{ session('error') }}
    </div>
@endif

            <!-- Hero Section -->
            <div class="containers">
                <!-- Content -->
                <div class="content">
                    <div class="box">
                        <p class="box-text">Onalo Media Expertise</p>

                    </div>
                    <h1 class="title">
                        Boost Your Rankings<br>
                        with Our<br>
                        Expert SEO Solutions
                    </h1>
                    
                    <p class="description">
                        Our dedicated team of SEO professionals is committed to driving targeted traffic to your website and increasing your online visibility.
                    </p>
                    
                    {{-- <p class="highlighted-text" data-aos="fade-right" data-aos-duration="1000">##Analyze Your Website
                        With SEOMAX</p> --}}
                    {{-- <div class="input-container" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                        <input type="text" placeholder="Your Web URL" class="url-input" />
                        <button class="analyze-button">
                            <p class="analyze-text">Analyze Website</p>
                            <p class="analyze-text-mobile">Analyze</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="arrow-icon" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 15.707a1 1 0 010-1.414L13.586 11H4a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div> --}}
                </div>
                <!-- Navigation Buttons -->
                <button class="prev"><img src="images/left-icon.svg" alt=""></button>
                <button class="next"><img src="images/right-icon.svg" alt=""></button>
            </div>
            <!-- Skill to improve company brand -->
            <div class="about-section">
                <div class="about-wrapper">
                    <div class="about-image">
                        <img src="./images/skill softex.png" data-aos="fade-right" data-aos-duration="1000">
                    </div>
                    <div class="about-content">
                        <span class="about-badge" data-aos="fade-left" data-aos-duration="2000" style="width: 180px">About Company</span>
                        <h1 class="about-title" data-aos="fade-left" data-aos-duration="2000">Skills to Elevate Your Company Brand</h1>

                        <p class="about-text" data-aos="fade-left" data-aos-duration="1000">It is a long established
                            fact that a reader will be distracted the readable content
                            of a page when looking at layout the point established fact that</p>

                        <div class="progress-wrapper" data-aos="fade-up" data-aos-duration="1000">
                            <!-- Progress Circle 1 -->
                            <div class="progress-item">
                                <div class="progress-circle">
                                    <svg class="progress-svg">
                                        <circle cx="50%" cy="50%" r="35" class="progress-bg"></circle>
                                        <circle cx="50%" cy="50%" r="35" class="progress-bar" stroke-dasharray="220"
                                            stroke-dashoffset="77"></circle>
                                    </svg>
                                    <div class="progress-text">65%</div>
                                </div>
                                <p class="progress-label">Paid Search Marketing</p>
                            </div>

                            <!-- Progress Circle 2 -->
                            <div class="progress-item">
                                <div class="progress-circle">
                                    <svg class="progress-svg">
                                        <circle cx="50%" cy="50%" r="35" class="progress-bg"></circle>
                                        <circle cx="50%" cy="50%" r="35" class="progress-bar" stroke-dasharray="220"
                                            stroke-dashoffset="11"></circle>
                                    </svg>
                                    <div class="progress-text">95%</div>
                                </div>
                                <p class="progress-label">Search Engine Optimization</p>
                            </div>
                        </div>

                        <div class="action-buttons" data-aos="fade-up" data-aos-duration="1000">
                            <a href="{{ url('/about') }}" style="text-decoration: none"><button class="explore-btn">Explore More</button></a>
                            <div class="action-icon">
                                <a href="{{ url('/about') }}" style="text-decoration: none"><img src="./images/arrow-up-right.png" alt="">
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services upper -->
            <div class="custom-seo-container">
                <div class="custom-seo-header">
                    <span class="custom-seo-tag" data-aos="fade-right" data-aos-duration="1000" style="margin-left: 440px; margin-top:200px">
                        Our SEO SERVICES
                    </span>
                    <a href="{{ url('/contact') }}" style="text-decoration: none"><button class="custom-seo-btn md:block hidden" data-aos="fade-right" data-aos-duration="1000"
                        data-aos-delay="700">
                        Request A Free Consultation
                    </button></a>
                </div>
                <h1 class="custom-seo-title">
                    Features Loved by Clients of ONALO MEDIA
                </h1>
                
                <div class="btn-container-services" style="margin-left:400px;">
                    <a href="javascript:void(0);" onclick="filterCards('digital')" style="text-decoration: none" class="pricing-button" data-aos="fade-right" data-aos-duration="1000">
                        Digital Media
                    </a>
                    <a href="javascript:void(0);" onclick="filterCards('print')" style="text-decoration: none" class="pricing-button" data-aos="fade-right" data-aos-duration="1000">
                        Print Media
                    </a>
                </div>
                
            </div>
            <!-- Services -->
            <div class="container">
                <!-- Card 1 -->
                <div class="row" id="card-container" style="display: flex; flex-wrap: wrap; gap: 20px;">
                    <!-- Cards for both categories -->
                    @foreach ($cards as $card)
                        <div class="col-3 card-category" style="max-width: 270px; margin-bottom: 20px;" data-category="{{ $card->category }}">
                            <a href="{{ route('services') }}" style="text-decoration: none; width: 100%; height: 600px;">
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
                        </div>
                    @endforeach
                </div>
            </div>
                
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
                            <img src="./images/settings.png" class="custom-img" alt="">
                        </div>
                        <div class="custom-content">
                            <h1 class="custom-title">Comprehensive Website Audit</h1>
                            <p>We begin with a detailed consultation your market business goals, target audience,
                                marketing efforts.</p>
                        </div>
                    </div>
                    <div class="custom-card hovered" data-aos="fade-right" data-aos-duration="700" data-aos-delay="100">
                        <div class="custom-icon">
                            <img src="./images/world.svg" class="custom-img" alt="">
                        </div>
                        <div class="custom-content">
                            <h1 class="custom-title">Customized SEO Strategy</h1>
                            <p>Search Engine Optimize (SEO) best marketing is to essential for boosting your website
                                visibility in best.</p>
                        </div>
                    </div>
                    <div class="custom-card" data-aos="fade-right" data-aos-duration="700" data-aos-delay="200">
                        <div class="custom-icon">
                            <img src="./images/envelope.png" class="custom-img" alt="">
                        </div>
                        <div class="custom-content">
                            <h1 class="custom-title">Continuous Optimization</h1>
                            <p>Our team conducts thorough research to analyze your industry, competitors, an audience
                                behavior.</p>
                        </div>
                    </div>
                </div>
                <div class="custom-right">
                    <img src="./images/work process of softex.png" class="custom-img-full" alt="">
                </div>
            </div>
            
            <section class="custom-step-section">
                <div class="custom-step-container ">

                    <div class="custom-step-item" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                        <div class="custom-step-icon custom-bg-orange">
                            <img width="40" height="40" src="https://img.icons8.com/ios/50/FFFFFF/case-study.png"
                                alt="case-study" />
                        </div>
                        <h4 class="custom-step-title">Research</h4>
                        <p class="custom-step-text">Migrating your rank Google Analytics to another solution.</p>
                        <span class="custom-step-badge custom-badge-blue">1ST STEP</span>
                    </div>

                    <div class="custom-step-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300" data-aos-once="true">
                        <div class="custom-step-icon custom-bg-blue">
                            <img width="40" height="40"
                                src="https://img.icons8.com/ios-filled/50/FFFFFF/sorting-options.png"
                                alt="sorting-options" />
                        </div>
                        <h4 class="custom-step-title">Customize</h4>
                        <p class="custom-step-text">Migrating your rank Google Analytics to another solution.</p>
                        <span class="custom-step-badge custom-badge-orange">2ND STEP</span>
                    </div>

                    <div class="custom-step-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="500" data-aos-once="true">
                        <div class="custom-step-icon custom-bg-orange">
                            <img width="40" height="40"
                                src="https://img.icons8.com/external-smashingstocks-mixed-smashing-stocks/68/FFFFFF/external-targeting-finance-trading-and-banking-smashingstocks-mixed-smashing-stocks-2.png"
                                alt="external-targeting-finance-trading-and-banking-smashingstocks-mixed-smashing-stocks-2" />
                        </div>
                        <h4 class="custom-step-title">Targeting</h4>
                        <p class="custom-step-text">Migrating your rank Google Analytics to another solution.</p>
                        <span class="custom-step-badge custom-badge-blue">3RD STEP</span>
                    </div>

                    <div class="custom-step-item"data-aos="fade-up" data-aos-duration="700" data-aos-delay="700" data-aos-once="true">
                        <div class="custom-step-icon custom-bg-blue">
                            <img width="40" height="40" src="https://img.icons8.com/wired/64/FFFFFF/define-location.png"
                                alt="define-location" />
                        </div>
                        <h4 class="custom-step-title">Result</h4>
                        <p class="custom-step-text">Migrating your rank Google Analytics to another solution.</p>
                        <span class="custom-step-badge custom-badge-orange">4TH STEP</span>
                    </div>

                </div>
            </section>
            <!-- Case Studies -->
            <div class="team-container-upper">
                <span class="Case-studies-tag mt-5" data-aos="fade-left" data-aos-duration="1000" style="width:190px">Featured Projects</span>
                <h2 class="team-heading">Our Case Studies</h2>
            </div>
            <div class="grid-container" id="grid-container">
                <div class="card-case-studies card-large">
                    <img src="/images/Driving Engagement The Success Story of C-1.jpg" alt="Web Design" />
                    <p class="card-title-case-studies">Web Design</p>
                </div>
                <div class="card-case-studies card-large">
                    <img src="/images/From Local to Global Scaling C-2.jpg" alt="Social Media Posts" />
                    <p class="card-title-case-studies">Social Media Posts</p>
                </div>
                <div class="card-case-studies">
                    <img src="images/The Impact of AI on Content CreationB-4.jpg" alt="Marketing Campaign" />
                    <p class="card-title-case-studies">Marketing Campaign</p>
                </div>
                <div class="card-case-studies">
                    <img src="images/Influencer Marketing ROI C-4.jpg" alt="Brand Design" />
                    <p class="card-title-case-studies">Brand Design</p>
                </div>
                <div class="card-case-studies">
                    <img src="images/Reaching New Heights How X C-5.jpg" alt="Brand Design" />
                    <p class="card-title-case-studies">Brand Design</p>
                </div>
                <div class="card-case-studies">
                    <img src="images/Revolutionizing Brand C-6.jpg" alt="Packaging Design" />
                    <p class="card-title-case-studies">Packaging Design</p>
                </div>
            </div>
            <!-- Team Member -->
            <div class="team-container-upper">
                <span class="team-tag" data-aos="fade-left" data-aos-duration="1000" style="width:120px">Our TEAM</span>
                <h2 class="team-heading">Experts SEO Marketing Team</h2>
            </div>
            <div class="team-container" id="team-container">
                @foreach($teamMembers as $member)
                <div class="team-card" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">
                    <img src="{{ asset($member->image) }}" alt="{{ $member->name }}" class="team-image" style="width: 340px;height: 300px" />
                    <div class="team-info">
                        <div class="team-header text-center">
                            <h1 class="team-name ">{{ $member->name }}</h1>
                        </div>
                        <p class="team-role text-center">{{ $member->role }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Pricing -->
             {{--<div class="pricing-header">
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
            <!-- Customer Review -->
            {{-- <div class="custom-testimonials-container">
                <span class="custom-testimonials-label" data-aos="fade-left" data-aos-duration="1000" style="margin-left:450px;">
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
                            <img class="customer-icon" src="images/left-icon.svg" alt="">
                        </button>
                        <button class="custom-carousel-btn-min custom-carousel-next nextBtn" id="">
                            <img class="customer-icon" src="images/right-icon.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>
            <div class="custom-carousel-container">
                <button class="custom-carousel-btn custom-carousel-prev prevBtn" id="">
                    <img class="customer-icon" src="images/left-icon.svg" alt=""></button>
                <div class="custom-carousel-wrapper">
                    <div class="custom-carousel-track" id="carousel1">
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
                                    <img src="../images/avatarlogo.png" alt="User Image of Esther Howard"
                                        class="custom-avatar-img" />
                                </div>
                                <div>
                                    <h3 class="custom-user-name">Esther Howard</h3>
                                    <p class="custom-user-role">Nursing Assistant</p>
                                </div>
                            </div>
                            <p class="custom-card-text">
                                Consectetur adipiscing elit. Integer nunc viverra laoreet est the is porta pretium metus
                                aliquam eget maecenas porta is nunc viverra Aenean.
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
                                    <img src="../images/avatarlogo.png" alt="User Image of John Doe"
                                        class="custom-avatar-img" />
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
                                    <span class="custom-star">&#9734;</span>
                                </div>
                                <div class="custom-quote">&#10078;</div>
                            </div>
                            <div class="custom-card-profile">
                                <div class="custom-avatar">
                                    <img src="../images/avatarlogo.png" alt="User Image of Jane Smith"
                                        class="custom-avatar-img" />
                                </div>
                                <div>
                                    <h3 class="custom-user-name">Jane Smith</h3>
                                    <p class="custom-user-role">Graphic Designer</p>
                                </div>
                            </div>
                            <p class="custom-card-text">
                                Nunc viverra laoreet est the is porta pretium metus aliquam eget maecenas porta.
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
                                    <img src="../images/avatarlogo.png" alt="User Image of Michael Brown"
                                        class="custom-avatar-img" />
                                </div>
                                <div>
                                    <h3 class="custom-user-name">Michael Brown</h3>
                                    <p class="custom-user-role">Project Manager</p>
                                </div>
                            </div>
                            <p class="custom-card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nunc viverra laoreet
                                est the is porta pretium metus.
                            </p>
                        </div>
                    </div>

                </div>
                <button class="custom-carousel-btn custom-carousel-next nextBtn" id=""><img class="customer-icon"
                        src="images/right-icon.svg" alt=""></button>
            </div> --}}
            <!-- Blog -->
            <div class="custom-blog-container">
                <span class="custom-blog-badge" data-aos="fade-left" data-aos-duration="1000" style="width:120px">OUR BLOG</span>
                <h2 class="custom-blog-heading">Our Latest Articles & Blog</h2>
            </div>
            
                <div class="blog-container container">
                  @foreach($blogs as $blog)
                  <section class="blog-card">
                      <img src="{{ asset($blog->image) }}" alt="Blog Image" class="blog-image">
                      <div class="blog-details">
                          <div class="blog-meta">
                              <span class="author">{{ $blog->author }}</span> | 
                              <span class="date">{{ \Carbon\Carbon::parse($blog->published_at)->format('F d, Y') }}</span>
                          </div>
                          <h2 class="blog-title">{{ $blog->title }}</h2>
                          <p class="blog-description">
                              {{ Str::limit($blog->description, 200) }}<button href="#" class="read-more btn btn-sm text-light" data-id="{{ $blog->id }}" style="background-color: #800000">Read More</button>
                          </p>
                      </div>
                  </section>
                  @endforeach
                  
                  <!-- Full-screen modal for showing complete blog -->
                  <div id="full-blog-modal" class="modal" style="display:none;">
                      <div class="modal-content">
                          <span id="close-btn" class="close-btn">&times;</span>
                          <h2 id="modal-title"></h2>
                          <p id="modal-author"></p>
                          <p id="modal-date"></p>
                          <p id="modal-description"></p>
                      </div>
                  </div>
                  
  
  
            <!-- Contact US -->
            <div class="custom-testimonials-container">
                <span class="custom-testimonials-label" data-aos="fade-left" data-aos-duration="1000" style="width:150px; margin-left: 450px">
                    CONTACT US
                </span>
                <div class="custom-testimonials-content">
                    <h2 class="custom-testimonials-heading" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        How can we help you today?
                    </h2>
                    <p class="custom-testimonials-description" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        The a long established fact that a reader will be
                        distracted the readable content of page when
                        looking at layout the point.
                    </p>
                </div>
            </div>
            <div class="Contact-container">
                <div class="contact-wrapper" id="contactWrapper">
                    <div class="form-container">
                        <h1 class="form-title">Get in Touch</h1>
                        <form action="{{ url('/home') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="form-info-boxes">
                                <input type="text" name="first_name" class="form-input" placeholder="First Name" required />
                                <input type="text" name="last_name" class="form-input" placeholder="Last Name" required />
                            </div>
                            <div class="form-info-boxes">
                                <input type="email" name="email" class="form-input" placeholder="Email Address" required />
                                <input type="tel" name="phone" class="form-input" placeholder="Phone Number" required />
                            </div>
                            <div class="form-info-boxes">
                                <select name="country" class="form-input" required>
                                    <option value="" disabled selected>Select Country</option>
                                    <option value="USA">USA</option>
                                    <option value="India">India</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                </select>
                            </div>
                            <textarea name="message" class="form-input form-text-area" placeholder="Your Message" required></textarea>
                            <div class="form-info">
                                <input type="checkbox" style="margin-top: 5px;" />
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user.
                                </p>
                            </div>
                            <button type="submit" class="form-btn">
                                Free Consultation <span>→</span>
                            </button>
                        </form>
                    </div>
                
                    <div class="map">
                        <iframe width="100%" height="100%" frameborder="0" style="border-radius: 20px;" allowfullscreen
                            loading="lazy"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.7979296853837!2d144.9617242753708!3d-37.81820183429083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b384a66f05%3A0x184e7067954ebf3b!2s13%2F2%20Elizabeth%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1734374395254!5m2!1sen!2s"></iframe>
                    </div>
                </div></div></div></div>

           
            
            <!-- Footer -->
           
            @include('include.footer')

<script>
    function filterCards(category) {
        // Hide all cards first
        document.querySelectorAll('.card-category').forEach(function (card) {
            card.style.display = 'none';  // Hide all cards
        });

        // Show cards of the selected category
        document.querySelectorAll('.card-category').forEach(function (card) {
            if (card.getAttribute('data-category') === category) {
                card.style.display = 'block';  // Show the cards of the selected category
            }
        });
    }

    // Initial state: Show all cards by default
    filterCards('digital');
</script>

<script>
    // Get all the close buttons
    const closeButtons = document.querySelectorAll('.close-btn');

    // Add click event listener to each close button
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Get the parent alert div
            const alertDiv = button.parentElement;
            
            // Fade out the alert and then remove it
            alertDiv.style.opacity = '0';
            
            // Wait for the fade-out effect to finish before removing
            setTimeout(() => {
                alertDiv.remove();
            }, 2000); // Match this with the transition time
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
// Get modal and close button
var modal = document.getElementById("full-blog-modal");
var closeBtn = document.getElementById("close-btn");

// Event listener for Read More button
var readMoreButtons = document.querySelectorAll('.read-more');
readMoreButtons.forEach(function(button) {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        var blogId = e.target.getAttribute('data-id');
        
        // Fetch the full blog details from the server
        fetch(`/getBlogDetails/${blogId}`)
            .then(response => response.json())
            .then(data => {
                // Set the modal content with the blog data
                document.getElementById("modal-title").innerText = data.title;
                document.getElementById("modal-author").innerText = "By " + data.author;
                document.getElementById("modal-date").innerText = data.date;
                document.getElementById("modal-description").innerText = data.description;
                
                // Show the modal
                modal.style.display = "flex";
            });
    });
});

// Event listener for closing the modal
closeBtn.addEventListener('click', function() {
    modal.style.display = "none";
});

// Close the modal when clicking outside the modal content
window.addEventListener('click', function(e) {
    if (e.target === modal) {
        modal.style.display = "none";
    }
});
});

  </script>

</body>
</html>