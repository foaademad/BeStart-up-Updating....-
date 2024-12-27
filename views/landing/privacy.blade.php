@extends('layouts.landing_base')

@section('title', 'FAQ')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/privacy.css') }}">
@endpush

@section('content')
    <section class="privacy-section sec-bg">
        <div class="container">
            <h1>Privacy & Terms</h1>
            <p>
                Welcome to Bestartup AI! We value your privacy and are committed to
                protecting your personal information. This Privacy Policy outlines how
                we collect, use, and protect your data when you use our services.
            </p>
            <div class="content">
                <div>
                    <h5>
                        1. Information We Collect We collect the following types of
                        information:
                    </h5>
                    <ul>
                        <li>
                            Personal Information: Name, email address, phone number, and
                            other contact details you provide when you sign up or contact
                            us.
                        </li>
                        <li>
                            Usage Data: Information about how you use our platform,
                            including IP address, browser type, and usage patterns.
                        </li>
                        <li>
                            Cookies and Tracking Technologies: We use cookies to enhance
                            your experience on our site and collect data to optimize our
                            services.
                        </li>
                    </ul>
                </div>
                <div>
                    <h5>2. How We Use Your Information We use your data to:</h5>
                    <ul>
                        <li>Provide and improve our services.</li>
                        <li>
                            Communicate with you, respond to inquiries, and offer support.
                        </li>
                        <li>
                            Analyze and understand how you use our platform to enhance our
                            offerings.
                        </li>
                        <li>
                            Analyze and understand how you use our platform to enhance our
                            offerings. Comply with legal obligations.
                        </li>
                    </ul>
                </div>
                <div>
                    <h5>Data Sharing and Disclosure </h5>
                    <ul>
                        <li>We do not sell your personal information. We may share your data with trusted third-
                            party service providers who assist us in operating our platform. These providers are
                            contractually obligated to keep your data confidential and use it solely for providing
                            services to us. </li>
                    </ul>
                </div>
                <div>
                    <h5>3.  Data Security  </h5>
                    <ul>
                        <li>We implement industry-standard measures to protect your personal information.
                            While we strive to use commercially acceptable means to protect your data, no
                            method of transmission over the internet or electronic storage is 100% secure. </li>
                    </ul>
                </div>
                <div>
                    <h5>4.  Your Rights  Depending on your location, you may have certain rights over your personal data,
                        including:  </h5>
                    <ul>
                        <li> The right to access or request a copy of your data. </li>
                        <li>The right to correct or update your personal data. </li>
                        <li>The right to request deletion of your data. </li>
                        <li>To exercise any of these rights, please contact us at <a href="">help@bestartup.ai</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection


