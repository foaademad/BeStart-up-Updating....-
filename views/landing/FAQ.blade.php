@extends('layouts.landing_base')

@section('title', 'FAQ')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/FAQ.css') }}">
@endpush

@section('content')
    <section class="faq-section sec-bg">
        <div class="container">
            <h2>FAQ</h2>

            <div class="parent-questions">
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

        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/FAQ.js') }}"></script>
@endpush
