@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/help.css') }}" />
@endpush

@section('med_title', 'Help guide')
@section('content')

    <div class="box-content">
        @include('parts.med_screen')

        <div class="faq-container">
            <h1>General Info</h1>
            <div class="accordion">

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                <span class="icon">
                  <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5"
                          stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
                        <p>About Be start up </p>
                    </div>
                    <div class="faq-answer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                            bibendum velit lacus, non aliquam mi pulvinar ac. Nullam non mauris
                            sollicitudin, rhoncus dui quis, sodales dolor. </p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                <span class="icon">
                  <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5"
                          stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
                        <p>Trust and safety</p>
                    </div>
                    <div class="faq-answer">
                        <p>Information about maintaining trust and safety while using Be start
                            up. </p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                <span class="icon">
                  <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5"
                          stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
                        <p>Privacy and Legal</p>
                    </div>
                    <div class="faq-answer">
                        <p>Details about privacy and legal policies can be found here.</p>
                    </div>
                </div>



                <h1>Usage Help</h1>
                <div class="accordion">

                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                  <span class="icon">
                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </span>
                            <p> How to generate images with Be start up
                            </p>
                        </div>
                        <div class="faq-answer">
                            <p> Learn the steps to generate high-quality images using Be start up. </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                  <span class="icon">
                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path id="Vector" d="M3 13.5625H24M13.5 3.0625V24.0625" stroke="#8646F4" stroke-width="5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </span>
                            <p> Uploading documents and analyzing them on Be start up </p>
                        </div>
                        <div class="faq-answer">
                            <p>Understand how to upload documents and get detailed analyses on Be
                                start up. </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
    <script>

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
