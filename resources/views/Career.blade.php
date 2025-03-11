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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

        
        <style>
            .btn {
                background-color: #FF4500;
                border: none;
            }
            
            .btn:hover {
                background-color: #FF6F61;
            }
    
            .shadow-lg {
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
    
            .badge {
                display: inline-flex;
                align-items: center;
                padding: 0.5rem 1rem;
            }
    
            .badge img {
                width: 16px;
                height: 16px;
            }
        </style>
</head>

<body>
    
   @include('include.header')
            <!-- Hero Section -->
            @if (session('success'))
            <div class="alert alert-success fixed-top text-center" style="z-index: 9999; top: 20px; left: 50%; transform: translateX(-50%);">
                {{ session('success') }}
            </div>
        @endif
        
            <div class="containers">
                <!-- Content -->
                <div class="content">
                    <div class="box">
                        <p class="box-text">Onalo Media Expertise</p>

                    </div>
                    <h1 class="title">
                        Discover Exciting<br>
                        Career Opportunities<br>
                        With Us!
                    </h1>
                    <p class="description">
                        Looking for Talented Professionals to Join Our Growing Team at ONALO MEDIA
                    </p>
                    {{-- <p class="highlighted-text" data-aos="fade-right" data-aos-duration="1000">Start Your Journey with us – Apply Now for Open Positions</p>
                    <div class="input-container" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
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
            <h1 class="text-center mt-5">Featured Jobs</h1>
          

           


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12">
            @foreach ($jobs as $job)
            <div class="card d-flex flex-row align-items-center shadow-lg mb-4 rounded-3" style="background-color: white; max-width: 100%; width: 100%;">
                
                <!-- Employer Logo -->
                <div class="employer-logo d-flex flex-column align-items-center justify-content-center">
                    <img alt="Employer Logo" loading="lazy" width="50" height="50" decoding="async" style="background-color: maroon; margin-left:20px" src="{{ $job->employer_logo ?? 'default-logo.png' }}"/>
                </div>

                <!-- Job Information -->
                <div class="job-info ms-3">
                    <ul class="job-taglist list-unstyled m-3">
                        <li><a class="fs-14 text-dark" href="/company/{{ $job->company }}">{{ $job->company }}</a></li>
                    </ul>
                    <div class="d-flex align-items-center mb-2">
                        <h3 class="fs-5 fw-semibold text-dark mb-0 me-5">
                            <a href="/job/{{ $job->id }}" class="text-decoration-none">{{ $job->title }}</a>
                        </h3>

                        <!-- Badges for Featured, Full-time, etc. -->
                        <span class="badge text-white pill me-3" style="background-color: #8a2be2; margin-bottom: 20px;">
                            <i class="bi bi-star me-1"></i> Featured
                        </span>
                        <span class="badge text-white rounded-pill me-3" style="background-color: #37c480; margin-bottom: 20px;">
                            <i class="bi bi-clock me-1"></i> {{ strtoupper($job->job_type) }}
                        </span>
                        <span class="badge text-white rounded-pill me-3" style="background-color: #d852c2; margin-bottom: 20px;">
                            <i class="bi bi-person-lines-fill me-1"></i> New Position
                        </span>
                        <span class="badge text-white rounded-pill" style="background-color: #d67659; margin-bottom: 20px;">
                            <i class="bi bi-person-check me-1"></i> 1 applicant
                        </span>
                    </div>
                    <div class="job-desc-meta list-unstyled me-5" style="margin-left: 375px; margin-bottom: 30px;">
                        <span class="fs-14 text-dark me-4"><i class="bi bi-geo-alt"></i> {{ $job->location }}</span>
                        <span class="fs-14 text-dark me-4"><i class="bi bi-calendar"></i> {{ $job->created_at->format('Y-m-d') }}</span>
                        <span class="fs-14 text-dark"><i class="bi bi-currency-dollar"></i> ${{ number_format($job->salary) }} / year</span>
                    </div>
                </div>

                <!-- Job Action (Apply Now Button and Bookmark) -->
                <div class="job-action ms-auto d-flex align-items-center justify-content-center">
                    <button class="btn text-white py-2 px-4 rounded-3" data-bs-toggle="modal" data-bs-target="#applyModal{{ $job->id }}">
                        Apply Now
                    </button>
                    
                    <button class="add-to-bookmark border-0 d-flex justify-content-center align-items-center rounded-circle transition ms-3" style="width: 54px; height: 54px;">
                        <i class="bi bi-bookmark"></i>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


            
            <!-- Modal for Apply Now -->
            @foreach ($jobs as $job)
<!-- Apply Now Modal -->
<div class="modal fade" id="applyModal{{ $job->id }}" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyModalLabel">Apply for {{ $job->title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('apply.job') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="job_id" value="{{ $job->id }}">

                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="full_name" required placeholder="Enter your full name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" required placeholder="Enter your email">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" name="phone" required placeholder="Enter your phone number">
                    </div>

                    <div class="mb-3">
                        <label for="cv" class="form-label">Attach CV</label>
                        <input type="file" class="form-control" name="cv" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn text-white py-2 px-4 rounded-3" data-bs-toggle="modal" data-bs-target="#applyModal{{ $job->id }}">
                        Apply Now
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

            
            <!-- Add Bootstrap's JS and CSS for modal functionality -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
            
              

@include('include.footer')
