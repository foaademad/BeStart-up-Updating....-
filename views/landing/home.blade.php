@extends('layouts.landing_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush

@section('content')
    <section class="landing">
        <div class="container mx-auto">
            <div class="content">
                <h3>You won’t need any other <br>
                    business assistant </h3>

                <div class="text-wrapper ">
                    <h2>
                        Ultimate AI
                    </h2>
                    <h1 id="typed-output">Business Planner</h1>
                </div>

                <a href="{{ route('login') }}">
                    <button class="primaryButton btn-basic mt-4">
                        Try Now For Free
                    </button>
                </a>
            </div>
        </div>
    </section>
    <section class="what-can">
        <div class="container mx-auto">
            <h2 class="title-section">What can Be startup do for you?</h2>
            <div class="features">
                <div class="feature-item" data-aos="fade-right">
                    <img src="{{ asset('assets/svg/3d-rocket 1.svg') }}" alt="Kick Start">
                    <div class="text">
                        <h2>Kick Start Your Business In No Time</h2>
                        <p>Normal accelerators make Business models, Business canvas, marketing plans in 4–6 months aprox. but with Bestartup, you can have everything you need in under minutes</p>
                    </div>
                </div>
                <div class="feature-item" data-aos="fade-left">
                    <img src="{{ asset('assets/svg/layers.svg') }}" alt="All in One">
                    <div class="text">
                        <h2>Everything You Need In One Place</h2>
                        <p>Normal accelerators make Business models, Business canvas, marketing plans in 4–6 months aprox. but with Bestartup, you can have everything you need in under minutes</p>
                    </div>
                </div>
                <div class="feature-item" data-aos="fade-right">
                    <img src="{{ asset('assets/svg/Icon (1).svg') }}" alt="Accurate">
                    <div class="text">
                        <h2>Accurate And Experienced</h2>
                        <p>Normal accelerators make Business models, Business canvas, marketing plans in 4–6 months aprox. but with Bestartup, you can have everything you need in under minutes</p>
                    </div>
                </div>
                <div class="feature-item" data-aos="fade-left">
                    <img src="{{ asset('assets/svg/Icon (1).svg') }}" alt="AI Integration">
                    <div class="text">
                        <h2>Various AI Models Integration</h2>
                        <p>Normal accelerators make Business models, Business canvas, marketing plans in 4–6 months aprox. but with Bestartup, you can have everything you need in under minutes</p>
                    </div>
                </div>
                <div class="feature-item" data-aos="fade-right">
                    <img src="{{ asset('assets/svg/Icon (3).svg') }}" alt="Team Management">
                    <div class="text">
                        <h2>Team Management</h2>
                        <p>Normal accelerators make Business models, Business canvas, marketing plans in 4–6 months aprox. but with Bestartup, you can have everything you need in under minutes</p>
                    </div>
                </div>
                <div class="feature-item" data-aos="fade-left">
                    <img src="{{ asset('assets/svg/graphic-designer (1).svg') }}" alt="Customize Templates">
                    <div class="text">
                        <h2>Customize Templates</h2>
                        <p>Normal accelerators make Business models, Business canvas, marketing plans in 4–6 months aprox. but with Bestartup, you can have everything you need in under minutes</p>
                    </div>
                </div>
                <div class="feature-item" data-aos="fade-right">
                    <img src="{{ asset('assets/svg/shield.svg') }}" alt="Security">
                    <div class="text">
                        <h2>Ensure Security</h2>
                        <p>Normal accelerators make Business models, Business canvas, marketing plans in 4–6 months aprox. but with Bestartup, you can have everything you need in under minutes</p>
                    </div>
                </div>
                <div class="feature-item" data-aos="fade-left">
                    <img src="{{ asset('assets/svg/shooting-star.svg') }}" alt="Customer Support">
                    <div class="text">
                        <h2>Outstanding Customer Support</h2>
                        <p>Normal accelerators make Business models, Business canvas, marketing plans in 4–6 months aprox. but with Bestartup, you can have everything you need in under minutes</p>
                    </div>
                </div>
                <div class="feature-item" data-aos="fade-right">
                    <img src="{{ asset('assets/svg/shield.svg') }}" alt="Analytics">
                    <div class="text">
                        <h2>Advanced Analytics</h2>
                        <p>Normal accelerators make Business models, Business canvas, marketing plans in 4–6 months aprox. but with Bestartup, you can have everything you need in under minutes</p>
                    </div>
                </div>
                <div class="feature-item" data-aos="fade-left">
                    <img src="{{ asset('assets/svg/planet-earth.svg') }}" alt="Languages">
                    <div class="text">
                        <h2>Variety Of Languages</h2>
                        <p>Normal accelerators make Business models, Business canvas, marketing plans in 4–6 months aprox. but with Bestartup, you can have everything you need in under minutes</p>
                    </div>
                </div>
            </div>
            <div class="swiper-container features-alternate" style="display: none;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide feature-item">
                        <img src="{{ asset('assets/svg/3d-rocket 1.svg') }}" alt="Kick Start">
                        <div class="text">
                            <h2>Kick Start</h2>
                            <p>Get started quickly!</p>
                        </div>
                    </div>
                    <div class="swiper-slide feature-item">
                        <img src="{{ asset('assets/svg/layers.svg') }}" alt="All in One">
                        <div class="text">
                            <h2>All in One</h2>
                            <p>Everything you need.</p>
                        </div>
                    </div>
                    <div class="swiper-slide feature-item">
                        <img src="{{ asset('assets/svg/Icon (1).svg') }}" alt="Accurate">
                        <div class="text">
                            <h2>Accurate</h2>
                            <p>Reliable solutions.</p>
                        </div>
                    </div>
                    <div class="swiper-slide feature-item">
                        <img src="{{ asset('assets/svg/Icon (1).svg') }}" alt="AI Integration">
                        <div class="text">
                            <h2>AI Models</h2>
                            <p>Advanced integration.</p>
                        </div>
                    </div>
                    <div class="swiper-slide feature-item">
                        <img src="{{ asset('assets/svg/Icon (3).svg') }}" alt="Team Management">
                        <div class="text">
                            <h2>Team Work</h2>
                            <p>Manage easily.</p>
                        </div>
                    </div>
                    <div class="swiper-slide feature-item">
                        <img src="{{ asset('assets/svg/graphic-designer (1).svg') }}" alt="Customize Templates">
                        <div class="text">
                            <h2>Custom Templates</h2>
                            <p>Tailor to your needs.</p>
                        </div>
                    </div>
                    <div class="swiper-slide feature-item">
                        <img src="{{ asset('assets/svg/shield.svg') }}" alt="Security">
                        <div class="text">
                            <h2>Security</h2>
                            <p>Your data is safe.</p>
                        </div>
                    </div>
                    <div class="swiper-slide feature-item">
                        <img src="{{ asset('assets/svg/shooting-star.svg') }}" alt="Customer Support">
                        <div class="text">
                            <h2>Support</h2>
                            <p>We’re here for you.</p>
                        </div>
                    </div>
                    <div class="swiper-slide feature-item">
                        <img src="{{ asset('assets/svg/shield.svg') }}" alt="Analytics">
                        <div class="text">
                            <h2>Analytics</h2>
                            <p>Track performance.</p>
                        </div>
                    </div>
                    <div class="swiper-slide feature-item">
                        <img src="{{ asset('assets/svg/planet-earth.svg') }}" alt="Languages">
                        <div class="text">
                            <h2>Languages</h2>
                            <p>Global reach.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how-work">
        <div class="mx-auto container" id="replaceButton">
            <button class="primaryButton btn-next-steps" id="initialButton" onclick="showSteps()">
                <p>How does Be Startup work?</p>
            </button>
            <p class="press text-center">Press to take a tour ></p>
        </div>
        <div class="container" id="stepsContent" style="display: none;">
            <div class="property">

                <div>
                    <h2 class="section-title">It’s Simple And Easy</h2>
                    <p class="text-center">
                        <span >wither you have thing ready </span>
                        <span class="or">or</span>
                        <span > you’re starting from scratch </span>
                    </p>
                </div>
                <div class="progress-bar">
                    <div class="progress-wrapper">
                        <div class="progress"></div>
                    </div>
                    <div class="percentage">20%</div>
                </div>
                <div class="parent-steps">
                    <div class=" step active ">

                        <div class="step-info ">

                            <div class="frame">
                                <div class="step-num">1</div>
                            </div>


                            <div class="step-information">
                                <div class="text-wrapper-3">Sign Up & Welcome</div>
                                <p class="p">Quick Onboarding To Personalize Your Experience</p>
                            </div>


                        </div>

                        <p class="text-wrapper-4">20%</p>


                    </div>


                    <div class="step ">
                        <div class="step-info ">
                            <div class="frame">
                                <div class="step-num">2</div>
                            </div>
                            <div class="step-information">
                                <div class="text-wrapper-3">AI Business Planning</div>
                                <p class="p">Generate professional pitch decks and presentations</p>
                            </div>
                        </div>
                        <p class="text-wrapper-4">40%</p>
                    </div>

                    <div class="step ">
                        <div class="step-info ">
                            <div class="frame">
                                <div class="step-num">3</div>
                            </div>
                            <div class="step-information">
                                <div class="text-wrapper-3">Presentation Creation</div>
                                <p class="p">Generate professional pitch decks and presentations</p>
                            </div>
                        </div>
                        <p class="text-wrapper-4">60%</p>
                    </div>
                    <div class="step ">
                        <div class="step-info ">
                            <div class="frame">
                                <div class="step-num">4</div>
                            </div>
                            <div class="step-information">
                                <div class="text-wrapper-3">Landing Page Design</div>
                                <p class="p">Create your business landing page with AI assistance</p>
                            </div>
                        </div>
                        <p class="text-wrapper-4">80%</p>

                    </div>
                    <div class="step ">
                        <div class="step-info ">
                            <div class="frame">
                                <div class="step-num">5</div>
                            </div>
                            <div class="step-information">
                                <div class="text-wrapper-3">Presentation Creation</div>
                                <p class="p">AI-powered content creation for your business</p>
                            </div>
                        </div>
                        <p class="text-wrapper-4">100%</p>

                    </div>
                </div>









            </div>


            <!-- </div> -->
        </div>
    </section>
    <section class="section-cards">
        <div class="container">
            <div class="cards">
                <div class="item area-1">
                    <h4>Only platform that you will ever need </h4>
                </div>
                <div class="item area-2">
                    <div class="d-flex justify-content-between">
                        <h5>
                            AI Business <br> planner
                        </h5>
                        <img src="{{ asset('assets/svg/business_planner.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>

                <div class="item area-3">
                    <div class="d-flex justify-content-between">
                        <h5>
                            AI Mentor <br> & Guides
                        </h5>
                        <img src="{{ asset('assets/svg/mentor.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>

                <div class="item area-4">
                    <div class="d-flex justify-content-between">
                        <h5>
                            AI vision <br> planner
                        </h5>
                        <img src="{{ asset('assets/svg/business.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="item area-5">
                    <div class="d-flex justify-content-between">
                        <h5>
                            Bestartup  <br> GPT
                        </h5>
                        <img src="{{ asset('assets/svg/Messaging.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>

                <div class="item area-6">
                    <div class="d-flex justify-content-between">
                        <h5>
                            AI Code <br>
                            Generator
                        </h5>
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" >
                            <path d="M61.6667 65H18.3333C16.4917 65 15 63.7569 15 62.2222V17.7778C15 16.2431 16.4917 15 18.3333 15H61.6667C63.5083 15 65 16.2431 65 17.7778V62.2222C65 63.7569 63.5083 65 61.6667 65Z" fill="url(#paint0_linear_3321_3547)"/>
                            <path d="M52.5379 34.3381L52.5378 34.338L48.918 31.0803C48.918 31.0803 48.918 31.0803 48.918 31.0802C48.7897 30.9648 48.5921 30.9752 48.4767 31.1035L52.5379 34.3381ZM52.5379 34.3381C54.0967 35.7409 55.2928 36.8209 56.0979 37.778L56.0979 37.7781M52.5379 34.3381L56.0979 37.7781M56.0979 37.7781C56.9249 38.7611 57.3763 39.6561 57.3763 40.6875C57.3763 41.7189 56.9249 42.6139 56.0979 43.597L56.0979 43.5971M56.0979 37.7781L56.0979 43.5971M56.0979 43.5971C55.2928 44.5542 54.0967 45.6343 52.5379 47.0368L52.5378 47.037M56.0979 43.5971L52.5378 47.037M52.5378 47.037L48.918 50.2948C48.918 50.2949 48.918 50.2949 48.918 50.2949C48.7898 50.4103 48.5922 50.3999 48.4767 50.2715C48.3613 50.1433 48.3716 49.9457 48.5 49.8302L48.5 49.8302M52.5378 47.037L48.5 49.8302M48.5 49.8302L52.0342 46.6494C52.0342 46.6493 52.0342 46.6493 52.0342 46.6493C53.6472 45.1976 54.8333 44.1293 55.6195 43.1948C56.4014 42.2654 56.7513 41.5097 56.7513 40.6875C56.7513 39.8653 56.4014 39.1097 55.6195 38.1803C54.8333 37.2458 53.6472 36.1774 52.0342 34.7257C52.0342 34.7257 52.0342 34.7257"  stroke="#20AFFD" stroke-width="2.5"/>
                            <path d="M30.8156 31.1035L31.7447 30.2673L30.8156 31.1035C30.9311 31.2318 30.9207 31.4293 30.7924 31.5448L27.2581 34.7257L27.258 34.7257C25.6451 36.1774 24.459 37.2458 23.6728 38.1803L23.6727 38.1804C22.891 39.1097 22.541 39.8653 22.541 40.6875C22.541 41.5097 22.891 42.2654 23.6727 43.1947L23.6728 43.1948C24.459 44.1293 25.6451 45.1976 27.2581 46.6493L27.2581 46.6494L30.7924 49.8302C30.7924 49.8302 30.7924 49.8302 30.7924 49.8302C30.9206 49.9457 30.9311 50.1432 30.8156 50.2715L30.8156 50.2716C30.7 50.3999 30.5025 50.4102 30.3743 50.2949L26.7545 47.037L26.7544 47.0369C25.1957 45.6343 23.9996 44.5542 23.1945 43.597L23.1945 43.5969C22.3674 42.6139 21.916 41.7189 21.916 40.6875C21.916 39.6561 22.3674 38.7611 23.1945 37.7781L23.1945 37.778C23.9996 36.8209 25.1957 35.7409 26.7545 34.3381L26.7545 34.338L30.3743 31.0802L30.3743 31.0802C30.5026 30.9648 30.7001 30.9752 30.8156 31.1035Z" fill="#24B1FD" stroke="#20AFFD" stroke-width="2.5"/>
                            <path d="M44.221 25.1126L44.221 25.1126C44.3876 25.1572 44.4866 25.3285 44.4419 25.4953C44.4419 25.4953 44.4419 25.4953 44.4419 25.4954L36.1636 56.3906L37.371 56.7141L36.1636 56.3906C36.1189 56.5572 35.9476 56.6562 35.7808 56.6115L35.7808 56.6115C35.6142 56.5669 35.5152 56.3955 35.5599 56.2287L43.8382 25.3336L43.8382 25.3336C43.8828 25.1669 44.0542 25.0679 44.221 25.1126Z" fill="#24B1FD" stroke="#20AFFD" stroke-width="2.5"/>
                            <defs>

                                <linearGradient id="paint0_linear_3321_3547" x1="40" y1="84" x2="40" y2="18.1569" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#009CFC"/>
                                    <stop offset="0.12" stop-color="#18ABFC"/>
                                    <stop offset="0.416" stop-color="#4ECCFE"/>
                                    <stop offset="0.672" stop-color="#76E4FE"/>
                                    <stop offset="0.875" stop-color="#8EF3FF"/>
                                    <stop offset="1" stop-color="#97F8FF"/>
                                </linearGradient>
                            </defs>
                        </svg>

                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="item area-7">
                    <div class="d-flex justify-content-between">
                        <h5>
                            AI Image <br>
                            Generator
                        </h5>
                        <img src="{{ asset('assets/svg/image generator.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="item area-8">
                    <div class="d-flex justify-content-between">
                        <h5>
                            AI Voice <br>
                            Over
                        </h5>
                        <img src="{{ asset('assets/svg/voice over.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="item area-9">
                    <div class="d-flex justify-content-between">
                        <h5>
                            AI Article <br>Wizard
                        </h5>
                        <img src="{{ asset('assets/svg/article wizard.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>

                <div class="item area-10">
                    <div class="d-flex justify-content-between">
                        <h5>
                            AI Website <br>
                            Analyzer
                        </h5>
                        <img src="{{ asset('assets/svg/web analyzer.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="item area-11">
                    <div class="d-flex justify-content-between">
                        <h5>
                            AI Image <br>
                            Analyzer
                        </h5>
                        <img src="{{ asset('assets/svg/image analyzer.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="item area-12"> <div class="d-flex justify-content-between">
                        <h5>
                            AI Speech-<br>
                            To-Text
                        </h5>
                        <img src="{{ asset('assets/svg/speech to text.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p></div>
                <div class="item area-13">
                    <div class="d-flex justify-content-between">
                        <h5>
                            AI Content <br>
                            Editor
                        </h5>
                        <img src="{{ asset('assets/svg/content editor.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>

                <div class="item nested-1">
                    <div class="d-flex justify-content-between">
                        <h5>
                            AI Doc. <br>
                            Analyzer
                        </h5>
                        <img src="{{ asset('assets/svg/doc analyzer.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>

                <div class="item nested-2">
                    <div class="d-flex justify-content-between">
                        <h5>
                            AI  <br>
                            Presentation
                        </h5>
                        <img src="{{ asset('assets/svg/presentation.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent
                        vulputate bibendum est  dolor sit amet, consectetur adipiscing elit.  vulputate bibendum est  dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="item nested-3">
                    <div class="d-flex justify-content-between">
                        <h5>
                            AI Landing  <br>
                            Page maker
                        </h5>
                        <img src="{{ asset('assets/svg/landing.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="item nested-4">
                    <div class="d-flex justify-content-between">
                        <h5>
                            AI Customized <br>
                            Templates
                        </h5>
                        <img src="{{ asset('assets/svg/templates.svg') }}" alt="">
                    </div>
                    <p class="mt-4">
                        porttitor vehicula nec ut nunc. Praesent vulputate bibendum est dolor sit amet, consectetur adipiscing elit. vulputate bibendum est dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>

            <div class="cards-mobile">
                <h4>Only platform that you will ever need </h4>
                <div class="card-item">
                    <div class="card-head" onclick="toggleAnswer(this)">
                    <span class="icon">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" >
                        <path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                        <p>What does Bestartup AI Help me with?  </p>
                    </div>
                    <div class="info-card">
                        <p>Bestartup AI is an Accelerator designed for startups and entreprenuers. Our
                            goal is to help you establish the foundations of your startup by creating your corporate
                            documents, creating eye-catchy and compelling presentations, choosing the right path
                            through our AI Strategy Advisor, and more.</p>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-head" onclick="toggleAnswer(this)">
                    <span class="icon">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" >
                        <path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                        <p>What does Bestartup AI Help me with?  </p>
                    </div>
                    <div class="info-card">
                        <p>Bestartup AI is an Accelerator designed for startups and entreprenuers. Our
                            goal is to help you establish the foundations of your startup by creating your corporate
                            documents, creating eye-catchy and compelling presentations, choosing the right path
                            through our AI Strategy Advisor, and more.</p>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-head" onclick="toggleAnswer(this)">
                    <span class="icon">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" >
                        <path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                        <p>What does Bestartup AI Help me with?  </p>
                    </div>
                    <div class="info-card">
                        <p>Bestartup AI is an Accelerator designed for startups and entreprenuers. Our
                            goal is to help you establish the foundations of your startup by creating your corporate
                            documents, creating eye-catchy and compelling presentations, choosing the right path
                            through our AI Strategy Advisor, and more.</p>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-head" onclick="toggleAnswer(this)">
                    <span class="icon">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" >
                        <path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                        <p>What does Bestartup AI Help me with?  </p>
                    </div>
                    <div class="info-card">
                        <p>Bestartup AI is an Accelerator designed for startups and entreprenuers. Our
                            goal is to help you establish the foundations of your startup by creating your corporate
                            documents, creating eye-catchy and compelling presentations, choosing the right path
                            through our AI Strategy Advisor, and more.</p>
                    </div>
                </div>

            </div>
        </div>




    </section>

    <div class="reviews">
        <h2 class="title-section">Don’t just take our words</h2>
        <p> 3940+ Happy Be Startup Users</p>
        <div class="container-review">
            <div class="comments" id="mySwiper">
                <div class="swiper-wrapper">
                    <div class="comment swiper-slide">
            <span>
              <svg width="100" height="45" viewBox="0 0 121 19" fill="none" >
                <g id="Review">
                <g id="star 1">
                <g id="Group">
                <path id="Vector" d="M9.82368 0.231874L12.5214 5.71603L18.5518 6.59566C18.6283 6.60704 18.7002 6.63957 18.7592 6.68957C18.8183 6.73957 18.8622 6.80506 18.886 6.87868C18.9099 6.95229 18.9127 7.0311 18.8942 7.10622C18.8756 7.18135 18.8365 7.24981 18.7812 7.30389L14.4183 11.5718L15.4484 17.5993C15.4617 17.6755 15.4534 17.7539 15.4243 17.8256C15.3953 17.8973 15.3468 17.9594 15.2843 18.005C15.2218 18.0505 15.1478 18.0776 15.0706 18.0832C14.9935 18.0888 14.9163 18.0727 14.8479 18.0367L9.45374 15.1914L4.05961 18.0375C3.99121 18.0736 3.91405 18.0899 3.83688 18.0844C3.75972 18.0788 3.68565 18.0518 3.62309 18.0063C3.56054 17.9608 3.51201 17.8986 3.48301 17.8269C3.45401 17.7552 3.44572 17.6768 3.45907 17.6006L4.48915 11.5718L0.125087 7.30389C0.0697532 7.24981 0.0306183 7.18135 0.01209 7.10622C-0.00643837 7.0311 -0.00362419 6.95229 0.0202156 6.87868C0.0440554 6.80506 0.0879739 6.73957 0.147025 6.68957C0.206076 6.63957 0.277915 6.60704 0.35445 6.59566L6.38488 5.71603L9.0838 0.231874C9.11746 0.162379 9.17001 0.103769 9.23544 0.0627598C9.30087 0.0217505 9.37652 0 9.45374 0C9.53096 0 9.60662 0.0217505 9.67204 0.0627598C9.73747 0.103769 9.79002 0.162379 9.82368 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 2">
                <g id="Group_2">
                <path id="Vector_2" d="M35.3471 0.231874L38.0448 5.71603L44.0752 6.59566C44.1518 6.60704 44.2236 6.63957 44.2827 6.68957C44.3417 6.73957 44.3856 6.80506 44.4095 6.87868C44.4333 6.95229 44.4361 7.0311 44.4176 7.10622C44.3991 7.18135 44.3599 7.24981 44.3046 7.30389L39.9418 11.5718L40.9719 17.5993C40.9851 17.6755 40.9768 17.7539 40.9478 17.8256C40.9188 17.8973 40.8703 17.9594 40.8077 18.005C40.7452 18.0505 40.6712 18.0776 40.5941 18.0832C40.5169 18.0888 40.4398 18.0727 40.3713 18.0367L34.9772 15.1914L29.583 18.0375C29.5146 18.0736 29.4375 18.0899 29.3603 18.0844C29.2832 18.0788 29.2091 18.0518 29.1465 18.0063C29.084 17.9608 29.0354 17.8986 29.0064 17.8269C28.9775 17.7552 28.9692 17.6768 28.9825 17.6006L30.0126 11.5718L25.6485 7.30389C25.5932 7.24981 25.5541 7.18135 25.5355 7.10622C25.517 7.0311 25.5198 6.95229 25.5437 6.87868C25.5675 6.80506 25.6114 6.73957 25.6705 6.68957C25.7295 6.63957 25.8014 6.60704 25.8779 6.59566L31.9083 5.71603L34.6072 0.231874C34.6409 0.162379 34.6935 0.103769 34.7589 0.0627598C34.8243 0.0217505 34.9 0 34.9772 0C35.0544 0 35.1301 0.0217505 35.1955 0.0627598C35.2609 0.103769 35.3135 0.162379 35.3471 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 3">
                <g id="Group_3">
                <path id="Vector_3" d="M60.8706 0.231874L63.5682 5.71603L69.5987 6.59566C69.6752 6.60704 69.747 6.63957 69.8061 6.68957C69.8652 6.73957 69.9091 6.80506 69.9329 6.87868C69.9568 6.95229 69.9596 7.0311 69.941 7.10622C69.9225 7.18135 69.8834 7.24981 69.828 7.30389L65.4652 11.5718L66.4953 17.5993C66.5086 17.6755 66.5002 17.7539 66.4712 17.8256C66.4422 17.8973 66.3937 17.9594 66.3312 18.005C66.2687 18.0505 66.1946 18.0776 66.1175 18.0832C66.0404 18.0888 65.9632 18.0727 65.8948 18.0367L60.5006 15.1914L55.1065 18.0375C55.0381 18.0736 54.9609 18.0899 54.8838 18.0844C54.8066 18.0788 54.7325 18.0518 54.67 18.0063C54.6074 17.9608 54.5589 17.8986 54.5299 17.8269C54.5009 17.7552 54.4926 17.6768 54.5059 17.6006L55.536 11.5718L51.172 7.30389C51.1166 7.24981 51.0775 7.18135 51.059 7.10622C51.0404 7.0311 51.0433 6.95229 51.0671 6.87868C51.0909 6.80506 51.1348 6.73957 51.1939 6.68957C51.253 6.63957 51.3248 6.60704 51.4013 6.59566L57.4318 5.71603L60.1307 0.231874C60.1643 0.162379 60.2169 0.103769 60.2823 0.0627598C60.3477 0.0217505 60.4234 0 60.5006 0C60.5778 0 60.6535 0.0217505 60.7189 0.0627598C60.7843 0.103769 60.8369 0.162379 60.8706 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 4">
                <g id="Group_4">
                <path id="Vector_4" d="M86.394 0.231874L89.0917 5.71603L95.1221 6.59566C95.1986 6.60704 95.2705 6.63957 95.3295 6.68957C95.3886 6.73957 95.4325 6.80506 95.4563 6.87868C95.4802 6.95229 95.483 7.0311 95.4645 7.10622C95.4459 7.18135 95.4068 7.24981 95.3515 7.30389L90.9886 11.5718L92.0187 17.5993C92.032 17.6755 92.0237 17.7539 91.9947 17.8256C91.9657 17.8973 91.9171 17.9594 91.8546 18.005C91.7921 18.0505 91.7181 18.0776 91.6409 18.0832C91.5638 18.0888 91.4866 18.0727 91.4182 18.0367L86.0241 15.1914L80.6299 18.0375C80.5615 18.0736 80.4844 18.0899 80.4072 18.0844C80.33 18.0788 80.256 18.0518 80.1934 18.0063C80.1309 17.9608 80.0823 17.8986 80.0533 17.8269C80.0243 17.7552 80.016 17.6768 80.0294 17.6006L81.0595 11.5718L76.6954 7.30389C76.6401 7.24981 76.6009 7.18135 76.5824 7.10622C76.5639 7.0311 76.5667 6.95229 76.5905 6.87868C76.6144 6.80506 76.6583 6.73957 76.7173 6.68957C76.7764 6.63957 76.8482 6.60704 76.9248 6.59566L82.9552 5.71603L85.6541 0.231874C85.6878 0.162379 85.7403 0.103769 85.8058 0.0627598C85.8712 0.0217505 85.9468 0 86.0241 0C86.1013 0 86.1769 0.0217505 86.2424 0.0627598C86.3078 0.103769 86.3603 0.162379 86.394 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 5">
                <g id="Group_5">
                <path id="Vector_5" d="M111.917 0.231874L114.615 5.71603L120.646 6.59566C120.722 6.60704 120.794 6.63957 120.853 6.68957C120.912 6.73957 120.956 6.80506 120.98 6.87868C121.004 6.95229 121.006 7.0311 120.988 7.10622C120.969 7.18135 120.93 7.24981 120.875 7.30389L116.512 11.5718L117.542 17.5993C117.555 17.6755 117.547 17.7539 117.518 17.8256C117.489 17.8973 117.441 17.9594 117.378 18.005C117.316 18.0505 117.242 18.0776 117.164 18.0832C117.087 18.0888 117.01 18.0727 116.942 18.0367L111.547 15.1914L106.153 18.0375C106.085 18.0736 106.008 18.0899 105.931 18.0844C105.853 18.0788 105.779 18.0518 105.717 18.0063C105.654 17.9608 105.606 17.8986 105.577 17.8269C105.548 17.7552 105.539 17.6768 105.553 17.6006L106.583 11.5718L102.219 7.30389C102.164 7.24981 102.124 7.18135 102.106 7.10622C102.087 7.0311 102.09 6.95229 102.114 6.87868C102.138 6.80506 102.182 6.73957 102.241 6.68957C102.3 6.63957 102.372 6.60704 102.448 6.59566L108.479 5.71603L111.178 0.231874C111.211 0.162379 111.264 0.103769 111.329 0.0627598C111.395 0.0217505 111.47 0 111.547 0C111.625 0 111.7 0.0217505 111.766 0.0627598C111.831 0.103769 111.884 0.162379 111.917 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                </g>
                </svg>
            </span>            <p class="review-content">very great things that our cx say about us about how we make their life easier</p>
                        <div class=" details d-flex gap-2">
                            <img src="../../assets/svg/layers.svg" alt="">
                            <div class="info">
                                <h6>John devf</h6>
                                <p>Position</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment swiper-slide">
            <span>
              <svg width="100" height="45" viewBox="0 0 121 19" fill="none" >
                <g id="Review">
                <g id="star 1">
                <g id="Group">
                <path id="Vector" d="M9.82368 0.231874L12.5214 5.71603L18.5518 6.59566C18.6283 6.60704 18.7002 6.63957 18.7592 6.68957C18.8183 6.73957 18.8622 6.80506 18.886 6.87868C18.9099 6.95229 18.9127 7.0311 18.8942 7.10622C18.8756 7.18135 18.8365 7.24981 18.7812 7.30389L14.4183 11.5718L15.4484 17.5993C15.4617 17.6755 15.4534 17.7539 15.4243 17.8256C15.3953 17.8973 15.3468 17.9594 15.2843 18.005C15.2218 18.0505 15.1478 18.0776 15.0706 18.0832C14.9935 18.0888 14.9163 18.0727 14.8479 18.0367L9.45374 15.1914L4.05961 18.0375C3.99121 18.0736 3.91405 18.0899 3.83688 18.0844C3.75972 18.0788 3.68565 18.0518 3.62309 18.0063C3.56054 17.9608 3.51201 17.8986 3.48301 17.8269C3.45401 17.7552 3.44572 17.6768 3.45907 17.6006L4.48915 11.5718L0.125087 7.30389C0.0697532 7.24981 0.0306183 7.18135 0.01209 7.10622C-0.00643837 7.0311 -0.00362419 6.95229 0.0202156 6.87868C0.0440554 6.80506 0.0879739 6.73957 0.147025 6.68957C0.206076 6.63957 0.277915 6.60704 0.35445 6.59566L6.38488 5.71603L9.0838 0.231874C9.11746 0.162379 9.17001 0.103769 9.23544 0.0627598C9.30087 0.0217505 9.37652 0 9.45374 0C9.53096 0 9.60662 0.0217505 9.67204 0.0627598C9.73747 0.103769 9.79002 0.162379 9.82368 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 2">
                <g id="Group_2">
                <path id="Vector_2" d="M35.3471 0.231874L38.0448 5.71603L44.0752 6.59566C44.1518 6.60704 44.2236 6.63957 44.2827 6.68957C44.3417 6.73957 44.3856 6.80506 44.4095 6.87868C44.4333 6.95229 44.4361 7.0311 44.4176 7.10622C44.3991 7.18135 44.3599 7.24981 44.3046 7.30389L39.9418 11.5718L40.9719 17.5993C40.9851 17.6755 40.9768 17.7539 40.9478 17.8256C40.9188 17.8973 40.8703 17.9594 40.8077 18.005C40.7452 18.0505 40.6712 18.0776 40.5941 18.0832C40.5169 18.0888 40.4398 18.0727 40.3713 18.0367L34.9772 15.1914L29.583 18.0375C29.5146 18.0736 29.4375 18.0899 29.3603 18.0844C29.2832 18.0788 29.2091 18.0518 29.1465 18.0063C29.084 17.9608 29.0354 17.8986 29.0064 17.8269C28.9775 17.7552 28.9692 17.6768 28.9825 17.6006L30.0126 11.5718L25.6485 7.30389C25.5932 7.24981 25.5541 7.18135 25.5355 7.10622C25.517 7.0311 25.5198 6.95229 25.5437 6.87868C25.5675 6.80506 25.6114 6.73957 25.6705 6.68957C25.7295 6.63957 25.8014 6.60704 25.8779 6.59566L31.9083 5.71603L34.6072 0.231874C34.6409 0.162379 34.6935 0.103769 34.7589 0.0627598C34.8243 0.0217505 34.9 0 34.9772 0C35.0544 0 35.1301 0.0217505 35.1955 0.0627598C35.2609 0.103769 35.3135 0.162379 35.3471 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 3">
                <g id="Group_3">
                <path id="Vector_3" d="M60.8706 0.231874L63.5682 5.71603L69.5987 6.59566C69.6752 6.60704 69.747 6.63957 69.8061 6.68957C69.8652 6.73957 69.9091 6.80506 69.9329 6.87868C69.9568 6.95229 69.9596 7.0311 69.941 7.10622C69.9225 7.18135 69.8834 7.24981 69.828 7.30389L65.4652 11.5718L66.4953 17.5993C66.5086 17.6755 66.5002 17.7539 66.4712 17.8256C66.4422 17.8973 66.3937 17.9594 66.3312 18.005C66.2687 18.0505 66.1946 18.0776 66.1175 18.0832C66.0404 18.0888 65.9632 18.0727 65.8948 18.0367L60.5006 15.1914L55.1065 18.0375C55.0381 18.0736 54.9609 18.0899 54.8838 18.0844C54.8066 18.0788 54.7325 18.0518 54.67 18.0063C54.6074 17.9608 54.5589 17.8986 54.5299 17.8269C54.5009 17.7552 54.4926 17.6768 54.5059 17.6006L55.536 11.5718L51.172 7.30389C51.1166 7.24981 51.0775 7.18135 51.059 7.10622C51.0404 7.0311 51.0433 6.95229 51.0671 6.87868C51.0909 6.80506 51.1348 6.73957 51.1939 6.68957C51.253 6.63957 51.3248 6.60704 51.4013 6.59566L57.4318 5.71603L60.1307 0.231874C60.1643 0.162379 60.2169 0.103769 60.2823 0.0627598C60.3477 0.0217505 60.4234 0 60.5006 0C60.5778 0 60.6535 0.0217505 60.7189 0.0627598C60.7843 0.103769 60.8369 0.162379 60.8706 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 4">
                <g id="Group_4">
                <path id="Vector_4" d="M86.394 0.231874L89.0917 5.71603L95.1221 6.59566C95.1986 6.60704 95.2705 6.63957 95.3295 6.68957C95.3886 6.73957 95.4325 6.80506 95.4563 6.87868C95.4802 6.95229 95.483 7.0311 95.4645 7.10622C95.4459 7.18135 95.4068 7.24981 95.3515 7.30389L90.9886 11.5718L92.0187 17.5993C92.032 17.6755 92.0237 17.7539 91.9947 17.8256C91.9657 17.8973 91.9171 17.9594 91.8546 18.005C91.7921 18.0505 91.7181 18.0776 91.6409 18.0832C91.5638 18.0888 91.4866 18.0727 91.4182 18.0367L86.0241 15.1914L80.6299 18.0375C80.5615 18.0736 80.4844 18.0899 80.4072 18.0844C80.33 18.0788 80.256 18.0518 80.1934 18.0063C80.1309 17.9608 80.0823 17.8986 80.0533 17.8269C80.0243 17.7552 80.016 17.6768 80.0294 17.6006L81.0595 11.5718L76.6954 7.30389C76.6401 7.24981 76.6009 7.18135 76.5824 7.10622C76.5639 7.0311 76.5667 6.95229 76.5905 6.87868C76.6144 6.80506 76.6583 6.73957 76.7173 6.68957C76.7764 6.63957 76.8482 6.60704 76.9248 6.59566L82.9552 5.71603L85.6541 0.231874C85.6878 0.162379 85.7403 0.103769 85.8058 0.0627598C85.8712 0.0217505 85.9468 0 86.0241 0C86.1013 0 86.1769 0.0217505 86.2424 0.0627598C86.3078 0.103769 86.3603 0.162379 86.394 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 5">
                <g id="Group_5">
                <path id="Vector_5" d="M111.917 0.231874L114.615 5.71603L120.646 6.59566C120.722 6.60704 120.794 6.63957 120.853 6.68957C120.912 6.73957 120.956 6.80506 120.98 6.87868C121.004 6.95229 121.006 7.0311 120.988 7.10622C120.969 7.18135 120.93 7.24981 120.875 7.30389L116.512 11.5718L117.542 17.5993C117.555 17.6755 117.547 17.7539 117.518 17.8256C117.489 17.8973 117.441 17.9594 117.378 18.005C117.316 18.0505 117.242 18.0776 117.164 18.0832C117.087 18.0888 117.01 18.0727 116.942 18.0367L111.547 15.1914L106.153 18.0375C106.085 18.0736 106.008 18.0899 105.931 18.0844C105.853 18.0788 105.779 18.0518 105.717 18.0063C105.654 17.9608 105.606 17.8986 105.577 17.8269C105.548 17.7552 105.539 17.6768 105.553 17.6006L106.583 11.5718L102.219 7.30389C102.164 7.24981 102.124 7.18135 102.106 7.10622C102.087 7.0311 102.09 6.95229 102.114 6.87868C102.138 6.80506 102.182 6.73957 102.241 6.68957C102.3 6.63957 102.372 6.60704 102.448 6.59566L108.479 5.71603L111.178 0.231874C111.211 0.162379 111.264 0.103769 111.329 0.0627598C111.395 0.0217505 111.47 0 111.547 0C111.625 0 111.7 0.0217505 111.766 0.0627598C111.831 0.103769 111.884 0.162379 111.917 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                </g>
                </svg>
            </span>            <p class="review-content">very great things that our cx say about us about how we make their life easier</p>
                        <div class=" details d-flex gap-2">
                            <img src="../../assets/svg/layers.svg" alt="">
                            <div class="info">
                                <h6>John devf</h6>
                                <p>Position</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment swiper-slide">
            <span>
              <svg width="100" height="45" viewBox="0 0 121 19" fill="none" >
                <g id="Review">
                <g id="star 1">
                <g id="Group">
                <path id="Vector" d="M9.82368 0.231874L12.5214 5.71603L18.5518 6.59566C18.6283 6.60704 18.7002 6.63957 18.7592 6.68957C18.8183 6.73957 18.8622 6.80506 18.886 6.87868C18.9099 6.95229 18.9127 7.0311 18.8942 7.10622C18.8756 7.18135 18.8365 7.24981 18.7812 7.30389L14.4183 11.5718L15.4484 17.5993C15.4617 17.6755 15.4534 17.7539 15.4243 17.8256C15.3953 17.8973 15.3468 17.9594 15.2843 18.005C15.2218 18.0505 15.1478 18.0776 15.0706 18.0832C14.9935 18.0888 14.9163 18.0727 14.8479 18.0367L9.45374 15.1914L4.05961 18.0375C3.99121 18.0736 3.91405 18.0899 3.83688 18.0844C3.75972 18.0788 3.68565 18.0518 3.62309 18.0063C3.56054 17.9608 3.51201 17.8986 3.48301 17.8269C3.45401 17.7552 3.44572 17.6768 3.45907 17.6006L4.48915 11.5718L0.125087 7.30389C0.0697532 7.24981 0.0306183 7.18135 0.01209 7.10622C-0.00643837 7.0311 -0.00362419 6.95229 0.0202156 6.87868C0.0440554 6.80506 0.0879739 6.73957 0.147025 6.68957C0.206076 6.63957 0.277915 6.60704 0.35445 6.59566L6.38488 5.71603L9.0838 0.231874C9.11746 0.162379 9.17001 0.103769 9.23544 0.0627598C9.30087 0.0217505 9.37652 0 9.45374 0C9.53096 0 9.60662 0.0217505 9.67204 0.0627598C9.73747 0.103769 9.79002 0.162379 9.82368 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 2">
                <g id="Group_2">
                <path id="Vector_2" d="M35.3471 0.231874L38.0448 5.71603L44.0752 6.59566C44.1518 6.60704 44.2236 6.63957 44.2827 6.68957C44.3417 6.73957 44.3856 6.80506 44.4095 6.87868C44.4333 6.95229 44.4361 7.0311 44.4176 7.10622C44.3991 7.18135 44.3599 7.24981 44.3046 7.30389L39.9418 11.5718L40.9719 17.5993C40.9851 17.6755 40.9768 17.7539 40.9478 17.8256C40.9188 17.8973 40.8703 17.9594 40.8077 18.005C40.7452 18.0505 40.6712 18.0776 40.5941 18.0832C40.5169 18.0888 40.4398 18.0727 40.3713 18.0367L34.9772 15.1914L29.583 18.0375C29.5146 18.0736 29.4375 18.0899 29.3603 18.0844C29.2832 18.0788 29.2091 18.0518 29.1465 18.0063C29.084 17.9608 29.0354 17.8986 29.0064 17.8269C28.9775 17.7552 28.9692 17.6768 28.9825 17.6006L30.0126 11.5718L25.6485 7.30389C25.5932 7.24981 25.5541 7.18135 25.5355 7.10622C25.517 7.0311 25.5198 6.95229 25.5437 6.87868C25.5675 6.80506 25.6114 6.73957 25.6705 6.68957C25.7295 6.63957 25.8014 6.60704 25.8779 6.59566L31.9083 5.71603L34.6072 0.231874C34.6409 0.162379 34.6935 0.103769 34.7589 0.0627598C34.8243 0.0217505 34.9 0 34.9772 0C35.0544 0 35.1301 0.0217505 35.1955 0.0627598C35.2609 0.103769 35.3135 0.162379 35.3471 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 3">
                <g id="Group_3">
                <path id="Vector_3" d="M60.8706 0.231874L63.5682 5.71603L69.5987 6.59566C69.6752 6.60704 69.747 6.63957 69.8061 6.68957C69.8652 6.73957 69.9091 6.80506 69.9329 6.87868C69.9568 6.95229 69.9596 7.0311 69.941 7.10622C69.9225 7.18135 69.8834 7.24981 69.828 7.30389L65.4652 11.5718L66.4953 17.5993C66.5086 17.6755 66.5002 17.7539 66.4712 17.8256C66.4422 17.8973 66.3937 17.9594 66.3312 18.005C66.2687 18.0505 66.1946 18.0776 66.1175 18.0832C66.0404 18.0888 65.9632 18.0727 65.8948 18.0367L60.5006 15.1914L55.1065 18.0375C55.0381 18.0736 54.9609 18.0899 54.8838 18.0844C54.8066 18.0788 54.7325 18.0518 54.67 18.0063C54.6074 17.9608 54.5589 17.8986 54.5299 17.8269C54.5009 17.7552 54.4926 17.6768 54.5059 17.6006L55.536 11.5718L51.172 7.30389C51.1166 7.24981 51.0775 7.18135 51.059 7.10622C51.0404 7.0311 51.0433 6.95229 51.0671 6.87868C51.0909 6.80506 51.1348 6.73957 51.1939 6.68957C51.253 6.63957 51.3248 6.60704 51.4013 6.59566L57.4318 5.71603L60.1307 0.231874C60.1643 0.162379 60.2169 0.103769 60.2823 0.0627598C60.3477 0.0217505 60.4234 0 60.5006 0C60.5778 0 60.6535 0.0217505 60.7189 0.0627598C60.7843 0.103769 60.8369 0.162379 60.8706 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 4">
                <g id="Group_4">
                <path id="Vector_4" d="M86.394 0.231874L89.0917 5.71603L95.1221 6.59566C95.1986 6.60704 95.2705 6.63957 95.3295 6.68957C95.3886 6.73957 95.4325 6.80506 95.4563 6.87868C95.4802 6.95229 95.483 7.0311 95.4645 7.10622C95.4459 7.18135 95.4068 7.24981 95.3515 7.30389L90.9886 11.5718L92.0187 17.5993C92.032 17.6755 92.0237 17.7539 91.9947 17.8256C91.9657 17.8973 91.9171 17.9594 91.8546 18.005C91.7921 18.0505 91.7181 18.0776 91.6409 18.0832C91.5638 18.0888 91.4866 18.0727 91.4182 18.0367L86.0241 15.1914L80.6299 18.0375C80.5615 18.0736 80.4844 18.0899 80.4072 18.0844C80.33 18.0788 80.256 18.0518 80.1934 18.0063C80.1309 17.9608 80.0823 17.8986 80.0533 17.8269C80.0243 17.7552 80.016 17.6768 80.0294 17.6006L81.0595 11.5718L76.6954 7.30389C76.6401 7.24981 76.6009 7.18135 76.5824 7.10622C76.5639 7.0311 76.5667 6.95229 76.5905 6.87868C76.6144 6.80506 76.6583 6.73957 76.7173 6.68957C76.7764 6.63957 76.8482 6.60704 76.9248 6.59566L82.9552 5.71603L85.6541 0.231874C85.6878 0.162379 85.7403 0.103769 85.8058 0.0627598C85.8712 0.0217505 85.9468 0 86.0241 0C86.1013 0 86.1769 0.0217505 86.2424 0.0627598C86.3078 0.103769 86.3603 0.162379 86.394 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 5">
                <g id="Group_5">
                <path id="Vector_5" d="M111.917 0.231874L114.615 5.71603L120.646 6.59566C120.722 6.60704 120.794 6.63957 120.853 6.68957C120.912 6.73957 120.956 6.80506 120.98 6.87868C121.004 6.95229 121.006 7.0311 120.988 7.10622C120.969 7.18135 120.93 7.24981 120.875 7.30389L116.512 11.5718L117.542 17.5993C117.555 17.6755 117.547 17.7539 117.518 17.8256C117.489 17.8973 117.441 17.9594 117.378 18.005C117.316 18.0505 117.242 18.0776 117.164 18.0832C117.087 18.0888 117.01 18.0727 116.942 18.0367L111.547 15.1914L106.153 18.0375C106.085 18.0736 106.008 18.0899 105.931 18.0844C105.853 18.0788 105.779 18.0518 105.717 18.0063C105.654 17.9608 105.606 17.8986 105.577 17.8269C105.548 17.7552 105.539 17.6768 105.553 17.6006L106.583 11.5718L102.219 7.30389C102.164 7.24981 102.124 7.18135 102.106 7.10622C102.087 7.0311 102.09 6.95229 102.114 6.87868C102.138 6.80506 102.182 6.73957 102.241 6.68957C102.3 6.63957 102.372 6.60704 102.448 6.59566L108.479 5.71603L111.178 0.231874C111.211 0.162379 111.264 0.103769 111.329 0.0627598C111.395 0.0217505 111.47 0 111.547 0C111.625 0 111.7 0.0217505 111.766 0.0627598C111.831 0.103769 111.884 0.162379 111.917 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                </g>
                </svg>
            </span>            <p class="review-content">very great things that our cx say about us about how we make their life easier</p>
                        <div class=" details d-flex gap-2">
                            <img src="../../assets/svg/layers.svg" alt="">
                            <div class="info">
                                <h6>John devf</h6>
                                <p>Position</p>
                            </div>

                        </div>
                    </div>
                    <div class="comment swiper-slide">
            <span>
              <svg width="100" height="45" viewBox="0 0 121 19" fill="none" >
                <g id="Review">
                <g id="star 1">
                <g id="Group">
                <path id="Vector" d="M9.82368 0.231874L12.5214 5.71603L18.5518 6.59566C18.6283 6.60704 18.7002 6.63957 18.7592 6.68957C18.8183 6.73957 18.8622 6.80506 18.886 6.87868C18.9099 6.95229 18.9127 7.0311 18.8942 7.10622C18.8756 7.18135 18.8365 7.24981 18.7812 7.30389L14.4183 11.5718L15.4484 17.5993C15.4617 17.6755 15.4534 17.7539 15.4243 17.8256C15.3953 17.8973 15.3468 17.9594 15.2843 18.005C15.2218 18.0505 15.1478 18.0776 15.0706 18.0832C14.9935 18.0888 14.9163 18.0727 14.8479 18.0367L9.45374 15.1914L4.05961 18.0375C3.99121 18.0736 3.91405 18.0899 3.83688 18.0844C3.75972 18.0788 3.68565 18.0518 3.62309 18.0063C3.56054 17.9608 3.51201 17.8986 3.48301 17.8269C3.45401 17.7552 3.44572 17.6768 3.45907 17.6006L4.48915 11.5718L0.125087 7.30389C0.0697532 7.24981 0.0306183 7.18135 0.01209 7.10622C-0.00643837 7.0311 -0.00362419 6.95229 0.0202156 6.87868C0.0440554 6.80506 0.0879739 6.73957 0.147025 6.68957C0.206076 6.63957 0.277915 6.60704 0.35445 6.59566L6.38488 5.71603L9.0838 0.231874C9.11746 0.162379 9.17001 0.103769 9.23544 0.0627598C9.30087 0.0217505 9.37652 0 9.45374 0C9.53096 0 9.60662 0.0217505 9.67204 0.0627598C9.73747 0.103769 9.79002 0.162379 9.82368 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 2">
                <g id="Group_2">
                <path id="Vector_2" d="M35.3471 0.231874L38.0448 5.71603L44.0752 6.59566C44.1518 6.60704 44.2236 6.63957 44.2827 6.68957C44.3417 6.73957 44.3856 6.80506 44.4095 6.87868C44.4333 6.95229 44.4361 7.0311 44.4176 7.10622C44.3991 7.18135 44.3599 7.24981 44.3046 7.30389L39.9418 11.5718L40.9719 17.5993C40.9851 17.6755 40.9768 17.7539 40.9478 17.8256C40.9188 17.8973 40.8703 17.9594 40.8077 18.005C40.7452 18.0505 40.6712 18.0776 40.5941 18.0832C40.5169 18.0888 40.4398 18.0727 40.3713 18.0367L34.9772 15.1914L29.583 18.0375C29.5146 18.0736 29.4375 18.0899 29.3603 18.0844C29.2832 18.0788 29.2091 18.0518 29.1465 18.0063C29.084 17.9608 29.0354 17.8986 29.0064 17.8269C28.9775 17.7552 28.9692 17.6768 28.9825 17.6006L30.0126 11.5718L25.6485 7.30389C25.5932 7.24981 25.5541 7.18135 25.5355 7.10622C25.517 7.0311 25.5198 6.95229 25.5437 6.87868C25.5675 6.80506 25.6114 6.73957 25.6705 6.68957C25.7295 6.63957 25.8014 6.60704 25.8779 6.59566L31.9083 5.71603L34.6072 0.231874C34.6409 0.162379 34.6935 0.103769 34.7589 0.0627598C34.8243 0.0217505 34.9 0 34.9772 0C35.0544 0 35.1301 0.0217505 35.1955 0.0627598C35.2609 0.103769 35.3135 0.162379 35.3471 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 3">
                <g id="Group_3">
                <path id="Vector_3" d="M60.8706 0.231874L63.5682 5.71603L69.5987 6.59566C69.6752 6.60704 69.747 6.63957 69.8061 6.68957C69.8652 6.73957 69.9091 6.80506 69.9329 6.87868C69.9568 6.95229 69.9596 7.0311 69.941 7.10622C69.9225 7.18135 69.8834 7.24981 69.828 7.30389L65.4652 11.5718L66.4953 17.5993C66.5086 17.6755 66.5002 17.7539 66.4712 17.8256C66.4422 17.8973 66.3937 17.9594 66.3312 18.005C66.2687 18.0505 66.1946 18.0776 66.1175 18.0832C66.0404 18.0888 65.9632 18.0727 65.8948 18.0367L60.5006 15.1914L55.1065 18.0375C55.0381 18.0736 54.9609 18.0899 54.8838 18.0844C54.8066 18.0788 54.7325 18.0518 54.67 18.0063C54.6074 17.9608 54.5589 17.8986 54.5299 17.8269C54.5009 17.7552 54.4926 17.6768 54.5059 17.6006L55.536 11.5718L51.172 7.30389C51.1166 7.24981 51.0775 7.18135 51.059 7.10622C51.0404 7.0311 51.0433 6.95229 51.0671 6.87868C51.0909 6.80506 51.1348 6.73957 51.1939 6.68957C51.253 6.63957 51.3248 6.60704 51.4013 6.59566L57.4318 5.71603L60.1307 0.231874C60.1643 0.162379 60.2169 0.103769 60.2823 0.0627598C60.3477 0.0217505 60.4234 0 60.5006 0C60.5778 0 60.6535 0.0217505 60.7189 0.0627598C60.7843 0.103769 60.8369 0.162379 60.8706 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 4">
                <g id="Group_4">
                <path id="Vector_4" d="M86.394 0.231874L89.0917 5.71603L95.1221 6.59566C95.1986 6.60704 95.2705 6.63957 95.3295 6.68957C95.3886 6.73957 95.4325 6.80506 95.4563 6.87868C95.4802 6.95229 95.483 7.0311 95.4645 7.10622C95.4459 7.18135 95.4068 7.24981 95.3515 7.30389L90.9886 11.5718L92.0187 17.5993C92.032 17.6755 92.0237 17.7539 91.9947 17.8256C91.9657 17.8973 91.9171 17.9594 91.8546 18.005C91.7921 18.0505 91.7181 18.0776 91.6409 18.0832C91.5638 18.0888 91.4866 18.0727 91.4182 18.0367L86.0241 15.1914L80.6299 18.0375C80.5615 18.0736 80.4844 18.0899 80.4072 18.0844C80.33 18.0788 80.256 18.0518 80.1934 18.0063C80.1309 17.9608 80.0823 17.8986 80.0533 17.8269C80.0243 17.7552 80.016 17.6768 80.0294 17.6006L81.0595 11.5718L76.6954 7.30389C76.6401 7.24981 76.6009 7.18135 76.5824 7.10622C76.5639 7.0311 76.5667 6.95229 76.5905 6.87868C76.6144 6.80506 76.6583 6.73957 76.7173 6.68957C76.7764 6.63957 76.8482 6.60704 76.9248 6.59566L82.9552 5.71603L85.6541 0.231874C85.6878 0.162379 85.7403 0.103769 85.8058 0.0627598C85.8712 0.0217505 85.9468 0 86.0241 0C86.1013 0 86.1769 0.0217505 86.2424 0.0627598C86.3078 0.103769 86.3603 0.162379 86.394 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                <g id="star 5">
                <g id="Group_5">
                <path id="Vector_5" d="M111.917 0.231874L114.615 5.71603L120.646 6.59566C120.722 6.60704 120.794 6.63957 120.853 6.68957C120.912 6.73957 120.956 6.80506 120.98 6.87868C121.004 6.95229 121.006 7.0311 120.988 7.10622C120.969 7.18135 120.93 7.24981 120.875 7.30389L116.512 11.5718L117.542 17.5993C117.555 17.6755 117.547 17.7539 117.518 17.8256C117.489 17.8973 117.441 17.9594 117.378 18.005C117.316 18.0505 117.242 18.0776 117.164 18.0832C117.087 18.0888 117.01 18.0727 116.942 18.0367L111.547 15.1914L106.153 18.0375C106.085 18.0736 106.008 18.0899 105.931 18.0844C105.853 18.0788 105.779 18.0518 105.717 18.0063C105.654 17.9608 105.606 17.8986 105.577 17.8269C105.548 17.7552 105.539 17.6768 105.553 17.6006L106.583 11.5718L102.219 7.30389C102.164 7.24981 102.124 7.18135 102.106 7.10622C102.087 7.0311 102.09 6.95229 102.114 6.87868C102.138 6.80506 102.182 6.73957 102.241 6.68957C102.3 6.63957 102.372 6.60704 102.448 6.59566L108.479 5.71603L111.178 0.231874C111.211 0.162379 111.264 0.103769 111.329 0.0627598C111.395 0.0217505 111.47 0 111.547 0C111.625 0 111.7 0.0217505 111.766 0.0627598C111.831 0.103769 111.884 0.162379 111.917 0.231874Z" fill="#2563EB"/>
                </g>
                </g>
                </g>
                </svg>
            </span>            <p class="review-content">very great things that our cx say about us about how we make their life easier</p>
                        <div class=" details d-flex gap-2">
                            <img src="../../assets/svg/layers.svg" alt="">
                            <div class="info">
                                <h6>John devf</h6>
                                <p>Position</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment swiper-slide">
              <span>
                <svg width="100" height="45" viewBox="0 0 121 19" fill="none" >
                  <g id="Review">
                  <g id="star 1">
                  <g id="Group">
                  <path id="Vector" d="M9.82368 0.231874L12.5214 5.71603L18.5518 6.59566C18.6283 6.60704 18.7002 6.63957 18.7592 6.68957C18.8183 6.73957 18.8622 6.80506 18.886 6.87868C18.9099 6.95229 18.9127 7.0311 18.8942 7.10622C18.8756 7.18135 18.8365 7.24981 18.7812 7.30389L14.4183 11.5718L15.4484 17.5993C15.4617 17.6755 15.4534 17.7539 15.4243 17.8256C15.3953 17.8973 15.3468 17.9594 15.2843 18.005C15.2218 18.0505 15.1478 18.0776 15.0706 18.0832C14.9935 18.0888 14.9163 18.0727 14.8479 18.0367L9.45374 15.1914L4.05961 18.0375C3.99121 18.0736 3.91405 18.0899 3.83688 18.0844C3.75972 18.0788 3.68565 18.0518 3.62309 18.0063C3.56054 17.9608 3.51201 17.8986 3.48301 17.8269C3.45401 17.7552 3.44572 17.6768 3.45907 17.6006L4.48915 11.5718L0.125087 7.30389C0.0697532 7.24981 0.0306183 7.18135 0.01209 7.10622C-0.00643837 7.0311 -0.00362419 6.95229 0.0202156 6.87868C0.0440554 6.80506 0.0879739 6.73957 0.147025 6.68957C0.206076 6.63957 0.277915 6.60704 0.35445 6.59566L6.38488 5.71603L9.0838 0.231874C9.11746 0.162379 9.17001 0.103769 9.23544 0.0627598C9.30087 0.0217505 9.37652 0 9.45374 0C9.53096 0 9.60662 0.0217505 9.67204 0.0627598C9.73747 0.103769 9.79002 0.162379 9.82368 0.231874Z" fill="#2563EB"/>
                  </g>
                  </g>
                  <g id="star 2">
                  <g id="Group_2">
                  <path id="Vector_2" d="M35.3471 0.231874L38.0448 5.71603L44.0752 6.59566C44.1518 6.60704 44.2236 6.63957 44.2827 6.68957C44.3417 6.73957 44.3856 6.80506 44.4095 6.87868C44.4333 6.95229 44.4361 7.0311 44.4176 7.10622C44.3991 7.18135 44.3599 7.24981 44.3046 7.30389L39.9418 11.5718L40.9719 17.5993C40.9851 17.6755 40.9768 17.7539 40.9478 17.8256C40.9188 17.8973 40.8703 17.9594 40.8077 18.005C40.7452 18.0505 40.6712 18.0776 40.5941 18.0832C40.5169 18.0888 40.4398 18.0727 40.3713 18.0367L34.9772 15.1914L29.583 18.0375C29.5146 18.0736 29.4375 18.0899 29.3603 18.0844C29.2832 18.0788 29.2091 18.0518 29.1465 18.0063C29.084 17.9608 29.0354 17.8986 29.0064 17.8269C28.9775 17.7552 28.9692 17.6768 28.9825 17.6006L30.0126 11.5718L25.6485 7.30389C25.5932 7.24981 25.5541 7.18135 25.5355 7.10622C25.517 7.0311 25.5198 6.95229 25.5437 6.87868C25.5675 6.80506 25.6114 6.73957 25.6705 6.68957C25.7295 6.63957 25.8014 6.60704 25.8779 6.59566L31.9083 5.71603L34.6072 0.231874C34.6409 0.162379 34.6935 0.103769 34.7589 0.0627598C34.8243 0.0217505 34.9 0 34.9772 0C35.0544 0 35.1301 0.0217505 35.1955 0.0627598C35.2609 0.103769 35.3135 0.162379 35.3471 0.231874Z" fill="#2563EB"/>
                  </g>
                  </g>
                  <g id="star 3">
                  <g id="Group_3">
                  <path id="Vector_3" d="M60.8706 0.231874L63.5682 5.71603L69.5987 6.59566C69.6752 6.60704 69.747 6.63957 69.8061 6.68957C69.8652 6.73957 69.9091 6.80506 69.9329 6.87868C69.9568 6.95229 69.9596 7.0311 69.941 7.10622C69.9225 7.18135 69.8834 7.24981 69.828 7.30389L65.4652 11.5718L66.4953 17.5993C66.5086 17.6755 66.5002 17.7539 66.4712 17.8256C66.4422 17.8973 66.3937 17.9594 66.3312 18.005C66.2687 18.0505 66.1946 18.0776 66.1175 18.0832C66.0404 18.0888 65.9632 18.0727 65.8948 18.0367L60.5006 15.1914L55.1065 18.0375C55.0381 18.0736 54.9609 18.0899 54.8838 18.0844C54.8066 18.0788 54.7325 18.0518 54.67 18.0063C54.6074 17.9608 54.5589 17.8986 54.5299 17.8269C54.5009 17.7552 54.4926 17.6768 54.5059 17.6006L55.536 11.5718L51.172 7.30389C51.1166 7.24981 51.0775 7.18135 51.059 7.10622C51.0404 7.0311 51.0433 6.95229 51.0671 6.87868C51.0909 6.80506 51.1348 6.73957 51.1939 6.68957C51.253 6.63957 51.3248 6.60704 51.4013 6.59566L57.4318 5.71603L60.1307 0.231874C60.1643 0.162379 60.2169 0.103769 60.2823 0.0627598C60.3477 0.0217505 60.4234 0 60.5006 0C60.5778 0 60.6535 0.0217505 60.7189 0.0627598C60.7843 0.103769 60.8369 0.162379 60.8706 0.231874Z" fill="#2563EB"/>
                  </g>
                  </g>
                  <g id="star 4">
                  <g id="Group_4">
                  <path id="Vector_4" d="M86.394 0.231874L89.0917 5.71603L95.1221 6.59566C95.1986 6.60704 95.2705 6.63957 95.3295 6.68957C95.3886 6.73957 95.4325 6.80506 95.4563 6.87868C95.4802 6.95229 95.483 7.0311 95.4645 7.10622C95.4459 7.18135 95.4068 7.24981 95.3515 7.30389L90.9886 11.5718L92.0187 17.5993C92.032 17.6755 92.0237 17.7539 91.9947 17.8256C91.9657 17.8973 91.9171 17.9594 91.8546 18.005C91.7921 18.0505 91.7181 18.0776 91.6409 18.0832C91.5638 18.0888 91.4866 18.0727 91.4182 18.0367L86.0241 15.1914L80.6299 18.0375C80.5615 18.0736 80.4844 18.0899 80.4072 18.0844C80.33 18.0788 80.256 18.0518 80.1934 18.0063C80.1309 17.9608 80.0823 17.8986 80.0533 17.8269C80.0243 17.7552 80.016 17.6768 80.0294 17.6006L81.0595 11.5718L76.6954 7.30389C76.6401 7.24981 76.6009 7.18135 76.5824 7.10622C76.5639 7.0311 76.5667 6.95229 76.5905 6.87868C76.6144 6.80506 76.6583 6.73957 76.7173 6.68957C76.7764 6.63957 76.8482 6.60704 76.9248 6.59566L82.9552 5.71603L85.6541 0.231874C85.6878 0.162379 85.7403 0.103769 85.8058 0.0627598C85.8712 0.0217505 85.9468 0 86.0241 0C86.1013 0 86.1769 0.0217505 86.2424 0.0627598C86.3078 0.103769 86.3603 0.162379 86.394 0.231874Z" fill="#2563EB"/>
                  </g>
                  </g>
                  <g id="star 5">
                  <g id="Group_5">
                  <path id="Vector_5" d="M111.917 0.231874L114.615 5.71603L120.646 6.59566C120.722 6.60704 120.794 6.63957 120.853 6.68957C120.912 6.73957 120.956 6.80506 120.98 6.87868C121.004 6.95229 121.006 7.0311 120.988 7.10622C120.969 7.18135 120.93 7.24981 120.875 7.30389L116.512 11.5718L117.542 17.5993C117.555 17.6755 117.547 17.7539 117.518 17.8256C117.489 17.8973 117.441 17.9594 117.378 18.005C117.316 18.0505 117.242 18.0776 117.164 18.0832C117.087 18.0888 117.01 18.0727 116.942 18.0367L111.547 15.1914L106.153 18.0375C106.085 18.0736 106.008 18.0899 105.931 18.0844C105.853 18.0788 105.779 18.0518 105.717 18.0063C105.654 17.9608 105.606 17.8986 105.577 17.8269C105.548 17.7552 105.539 17.6768 105.553 17.6006L106.583 11.5718L102.219 7.30389C102.164 7.24981 102.124 7.18135 102.106 7.10622C102.087 7.0311 102.09 6.95229 102.114 6.87868C102.138 6.80506 102.182 6.73957 102.241 6.68957C102.3 6.63957 102.372 6.60704 102.448 6.59566L108.479 5.71603L111.178 0.231874C111.211 0.162379 111.264 0.103769 111.329 0.0627598C111.395 0.0217505 111.47 0 111.547 0C111.625 0 111.7 0.0217505 111.766 0.0627598C111.831 0.103769 111.884 0.162379 111.917 0.231874Z" fill="#2563EB"/>
                  </g>
                  </g>
                  </g>
                  </svg>
              </span>
                        <p class="review-content">very great things that our cx say about us about how we make their life easier</p>
                        <div class=" details d-flex gap-2">
                            <img src="../../assets/svg/layers.svg" alt="">

                            <div class="info">
                                <h6>John devf</h6>
                                <p>Position</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <section class="pricing">
        <h2 class="title-section">Simple Pricing. Unbeatable Value.</h2>
        <p class="des-sec">Get started right away</p>

        <div class="container">
            <div class="toggle-buttons">
                <button class="toggle-button active" id="monthlyBtn">Monthly</button>
                <button class="toggle-button" id="yearlyBtn">Yearly</button>
            </div>

            <div class="pricing-cards">
                <div class="pricing-card">
                    <div>
                        <h4>Personal</h4>
                        <p class="price" id="price1">$19<span>/month</span></p>
                    </div>
                    <p class="price-description">All the basic features to boost your freelance career</p>
                    <hr>
                    <div>
                        <ul class="features-pricing">
                            <li>Full Access to Landingfolio</li>
                            <li>100 GB Free Storage</li>
                            <li>Unlimited Visitors</li>
                            <li>10 Agents</li>
                            <li>Live Chat Support</li>
                        </ul>
                        <button class="trial-button">Get 14 Days Free Trial</button>
                    </div>
                </div>

                <!-- Second pricing card -->
                <div class="pricing-card">
                    <div>
                        <h4>Personal</h4>
                        <p class="price" id="price2">$19<span>/month</span></p>
                    </div>
                    <p class="price-description">All the basic features to boost your freelance career</p>
                    <hr>
                    <div>
                        <ul class="features-pricing">
                            <li>Full Access to Landingfolio</li>
                            <li>100 GB Free Storage</li>
                            <li>Unlimited Visitors</li>
                            <li>10 Agents</li>
                            <li>Live Chat Support</li>
                        </ul>
                        <button class="trial-button">Get 14 Days Free Trial</button>
                    </div>
                </div>

                <!-- Third pricing card -->
                <div class="pricing-card">
                    <div>
                        <h4>Personal</h4>
                        <p class="price" id="price3">$19<span>/month</span></p>
                    </div>
                    <p class="price-description">All the basic features to boost your freelance career</p>
                    <hr>
                    <div>
                        <ul class="features-pricing">
                            <li>Full Access to Landingfolio</li>
                            <li>100 GB Free Storage</li>
                            <li>Unlimited Visitors</li>
                            <li>10 Agents</li>
                            <li>Live Chat Support</li>
                        </ul>
                        <button class="trial-button">Get 14 Days Free Trial</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="questions-section">
        <div class="container">
            <h2 class="questions-title  title-section">Do you have any questions?</h2>
            <p class="questions-subtitle">
                you can check our <a href="{{ route('faq') }}">FAQs</a> page or <a href="{{ route('contact') }}">Contact us</a>
            </p>
            <div class="info-box" style='overflow:hidden'>
                <div class='info-text-box'>
                    <div class="info-text">
                        <h4>Your success is a click away</h4>
                        <p>+100 templates, chatbots and tools ready to help you get everything done</p>
                        <a href='{{ route('login') }}'>
                            <button class="join-button">
                                Join Now
                            </button>
                        </a>
                        <p class="no-credit">no credit card required</p>
                    </div>
                </div>
                <div class='info-image'>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/landing.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init(
            {
                once: true
            }
        );
    </script>
@endpush


