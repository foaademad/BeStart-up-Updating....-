@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/support.css') }}" />
@endpush

@section('med_title', 'Support')

@section('content')

    <div class="box-content">
        @include('parts.med_screen')


        <div class="container-fluid">

            <section class="Support-section sec-bg">
                <div class="containerofsupport">
                    <h3>Send us an email!</h3>
                    <p>Our customer support team is ready and excited to help</p>
                    <div class="contact-email">
                        <a href="mailto:Support@Bestartup.ai" class="email-link">
                            <span class="email-icon">✉️</span>
                            <span class="email-text">Support@Bestartup.ai</span>
                        </a>
                    </div>

                    <div class="social-media d-flex flex-column gap-3">
                        <p>Social media channels</p>
                        <div class="iconofsupport">
                            <a href="#" class="social-icon">X</a>
                            <a href="#" class="social-icon">in</a>
                        </div>

                    </div>
                    <p class="mt-4">You can also check our Frequently Asked Questions</p>
                </div>
            </section>
            <section class="faq-section sec-bg">
                <div class="container">

                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                        <span class="icon">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </span>                     <p>What does Bestartup AI Help me with?  </p>
                        </div>
                        <div class="faq-answer">
                            <p>Bestartup AI is an Accelerator designed for startups and entreprenuers. Our
                                goal is to help you establish the foundations of your startup by creating your corporate
                                documents, creating eye-catchy and compelling presentations, choosing the right path
                                through our AI Strategy Advisor, and more.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                        <span class="icon">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </span>
                            <p>Who can use Bestartup AI? </p>
                        </div>
                        <div class="faq-answer">
                            <p> Bestartup AI is designed for entrepreneurs, startups, small to medium-sized
                                businesses, and anyone looking to launch a new venture with the support of cutting-
                                edge AI-driven business tools. </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                        <span class="icon">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </span>                     <p>How does Bestartup AI Protect my data? </p>
                        </div>
                        <div class="faq-answer">
                            <p>Bestartup AI was built and is constantly developed by leading IT experts, Data
                                privacy is at the core of our mission in accelerating Startups. Bestartup AI is ISO 27701
                                certified and GDPR compliant.  </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                        <span class="icon">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </span>                     <p>Is Bestartup AI customizable for different industries? </p>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, Bestartup AI’s tools are highly adaptable and can be tailored to suit a
                                wide range of industries, helping you craft business plans and strategies unique to your
                                market needs. </p>
                        </div>
                    </div>
                </div>

            </section>


        </div>



    </div>

@endsection


@push('scripts')
    <script>

        // Tab functionality
        const tabs = document.querySelectorAll('.tab');
        const cards = document.querySelectorAll('.card');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove 'active' class from all tabs
                tabs.forEach(tab => tab.classList.remove('active'));

                // Add 'active' class to the clicked tab
                tab.classList.add('active');
            });
        });




        // F&Q

        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            const isOpen = answer.classList.contains("open");

            document.querySelectorAll(".faq-answer").forEach(ans => {
                ans.classList.remove("open");
            });
            document.querySelectorAll(".faq-question").forEach(q => {
                q.querySelector("span").innerHTML = `<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
<path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>`; ;
            });

            if (isOpen) {
                answer.classList.remove("open");
                element.querySelector(".icon").classList.remove("open");
                element.querySelector("span").innerHTML = `<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
<path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>`;
            } else {
                answer.classList.add("open");
                element.querySelector(".icon").classList.add("open");
            }
        }
    </script>
@endpush
