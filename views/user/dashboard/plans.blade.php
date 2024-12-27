@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/plan.css') }}" />
@endpush
@section('med_title', 'Plans')

@section('content')

    <div class="box-content">
        @include('parts.med_screen')


        <section class="pricing">

            <div class="pricing-toggle">
                <button class="toggle-button active" id="monthlyBtn">Monthly</button>
                <button class="toggle-button" id="yearlyBtn">Yearly</button>
            </div>

            <div class="pricing-cards">
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <h4>Personal</h4>
                        <p class="price" id="price1">$19<span>/month</span></p>
                    </div>
                    <p class="price-description">All the basic features to boost your freelance career</p>
                    <hr>
                    <div class="pricing-card-content">
                        <ul class="features-pricing">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                Full Access to Landingfolio
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                100 GB Free Storage
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                Unlimited Visitors
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                10 Agents
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                Live Chat Support
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                        </ul>
                        <button class="trial-button">subscribe now</button>
                    </div>
                </div>

                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <h4>Personal</h4>
                        <p class="price" id="price2">$19<span>/month</span></p>
                    </div>
                    <p class="price-description">All the basic features to boost your freelance career</p>
                    <hr>
                    <div class="pricing-card-content">
                        <ul class="features-pricing">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                Full Access to Landingfolio
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                100 GB Free Storage
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                Unlimited Visitors
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                10 Agents
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                Live Chat Support
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                        </ul>
                        <button class="trial-button">subscribe now</button>
                    </div>
                </div>

                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <h4>Personal</h4>
                        <p class="price" id="price3">$19<span>/month</span></p>
                    </div>
                    <p class="price-description">All the basic features to boost your freelance career</p>
                    <hr>
                    <div class="pricing-card-content">
                        <ul class="features-pricing">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                Full Access to Landingfolio
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                100 GB Free Storage
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                Unlimited Visitors
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                10 Agents
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.1562C14.4183 18.1562 18 14.5745 18 10.1562C18 5.73797 14.4183 2.15625 10 2.15625C5.58172 2.15625 2 5.73797 2 10.1562C2 14.5745 5.58172 18.1562 10 18.1562ZM13.7071 8.86336C14.0976 8.47283 14.0976 7.83967 13.7071 7.44914C13.3166 7.05862 12.6834 7.05862 12.2929 7.44914L9 10.742L7.70711 9.44914C7.31658 9.05862 6.68342 9.05862 6.29289 9.44914C5.90237 9.83967 5.90237 10.4728 6.29289 10.8634L8.29289 12.8634C8.68342 13.2539 9.31658 13.2539 9.70711 12.8634L13.7071 8.86336Z" fill="#71717A"/>
                                </svg>
                                Live Chat Support
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M9 6.15625V9.15625M9 12.1562H9.0075M15.75 9.15625C15.75 12.8842 12.7279 15.9062 9 15.9062C5.27208 15.9062 2.25 12.8842 2.25 9.15625C2.25 5.42833 5.27208 2.40625 9 2.40625C12.7279 2.40625 15.75 5.42833 15.75 9.15625Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                        </ul>
                        <button class="trial-button">subscribe now</button>
                    </div>
                </div>
            </div>
        </section>




        <div class="overlay"></div>
    </div>

@endsection


@push('scripts')
    <script src='{{ asset('assets/js/dashboard/plan.js') }}'></script>
@endpush
