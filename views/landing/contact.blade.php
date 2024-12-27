<!-- resources/views/about.blade.php -->
@extends('layouts.landing_base')

@section('title', 'About Us')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endpush

@section('content')
    <section class="contact-section sec-bg">
        <div class="container">
            <h2>Contact Us</h2>

            <div class="contact-email">
                <a href="mailto:Support@Bestartup.ai" class="email-link">
                    <span class="email-icon">✉️</span>
                    <span class="email-text">Support@Bestartup.ai</span>
                </a>
            </div>

            <div class="social-media d-flex gap-3">
                <p>Social media channels</p>
                <a href="#" class="social-icon">X</a>
                <a href="#" class="social-icon">in</a>
            </div>
        </div>
    </section>
@endsection
