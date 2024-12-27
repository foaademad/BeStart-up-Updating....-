@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/ai-tool.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/sweetalert/sweetalert2.min.css') }}" />

@endpush

@section('med_title', 'Ai Tools')

@section('content')


    <div class="box-content">
        @include('parts.med_screen')


        <section>

            <div class="tabs mt-3">
                <button class="filter-btn active" data-type="all">All</button>
                <button class="filter-btn" data-type="analyzing">Analyzing Tools</button>
                <button class="filter-btn" data-type="generating">Generating Tools</button>
            </div>

            <div class="card-grid" style='margin-bottom: 20px;' data-title='Tool'>
                <div class="card analyzing" >
                    <div class="card-image">
                        <img src="{{ asset('assets/svg/speech to text.svg') }}" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <a href='{{ route('user.Speech_text') }}'>
                            <h3>Speech-to-text</h3>
                            <p>Converts voices into written text</p>
                        </a>
                        <div class="fav-icon-star">
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="card analyzing" >
                    <div class="card-image">
                        <img src="{{ asset('assets/svg/doc analyzer.svg') }}" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <a href='{{ route('user.document_analyze') }}'>
                            <h3>Document Analyzer</h3>
                            <p>analyzes information from documents</p>
                        </a>
                        <div class="fav-icon-star">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card analyzing" >
                    <div class="card-image">
                        <img src="{{ asset('assets/svg/image analyzer.svg') }}" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <a href='{{ route('user.image_analyze') }}'>
                            <h3>Image Analyzer</h3>
                            <p>Identifies object within images</p>
                        </a>
                        <div class="fav-icon-star">
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card analyzing">
                    <div class="card-image">
                        <img src="{{ asset('assets/svg/web analyzer.svg') }}" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <a href='{{ route('user.web_chat') }}'>
                            <h3>Website Analyzer</h3>
                            <p>Gathers insights about websites</p>
                        </a>
                        <div class="fav-icon-star">
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="card generating" >
                    <div class="card-image">
                        <img src="{{ asset('assets/svg/voice over.svg') }}" alt="" srcset="" style='width:50px;'>
                    </div>
                    <div class="card-content">
                        <a href='{{ route('user.TextToSpeech') }}'>
                            <h3>Voice Over Generator </h3>
                            <p>Creates voice over for videos</p>
                        </a>
                        <div class="fav-icon-star">
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card generating" >
                    <div class="card-image">
                        <svg width="70" height="70" viewBox="0 0 80 80" fill="none" >
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
                    <div class="card-content">
                        <a href='{{ route('user.code') }}'>
                            <h3>Code Generator </h3>
                            <p>Automates code writing based on prompts</p>
                        </a>
                        <div class="fav-icon-star">
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card generating" >
                    <div class="card-image">
                        <img src="{{ asset('assets/svg/image generator.svg') }}" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <a href='{{ route('user.images') }}'>
                            <h3>Image  Generator </h3>
                            <p>Generates images from text</p>
                        </a>
                        <div class="fav-icon-star">
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card generating" >
                    <div class="card-image">
                        <img src="{{ asset('assets/svg/article wizard.svg') }}" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <a href='{{ route('user.web_chat') }}'>
                            <h3>Article Wizard</h3>
                            <p>Helps create articles from prompts</p>
                        </a>
                        <div class="fav-icon-star">
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card generating" >
                    <div class="card-image">
                        <img src="{{ asset('assets/svg/content editor.svg') }}" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <a href='{{ route('user.writer') }}'>
                            <h3>Rewriter </h3>
                            <p>Rephrases text to improve readability</p>
                        </a>
                        <div class="fav-icon-star">
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>

@endsection

@push('scripts')
    <script src='{{ asset('assets/sweetalert/sweetalert2.all.min.js') }}'></script>
    <script>
        const translations = @json([
        'addedToFavorites' => __('messages.added_to_favorites'),
        'removedFromFavorites' => __('messages.removed_from_favorites')
    ]);
    const cardGrid = document.querySelector('.card-grid');
    const itemTitle = cardGrid.getAttribute("data-title"); // Get the data-title attribute value
    </script>
    <script src='{{ asset('assets/js/dashboard/tabs.js') }}'></script>
@endpush
