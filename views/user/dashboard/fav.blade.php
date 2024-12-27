@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/ai-tool.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/sweetalert/sweetalert2.min.css') }}" />
@endpush

@section('med_title', 'Favourites')

@section('content')


    <div class="box-content">
        @include('parts.med_screen')

        <section>

            <div class="tabs mt-3">
                <button class="filter-btn " data-type="Templates">Templates</button>
                <button class="filter-btn" data-type="Mentors">Mentors</button>
                <button class="filter-btn active" data-type="Tools">Tools</button>
            </div>

            <div class="card-grid" style='margin-bottom: 20px;' data-title='Tool'>
                <div class="card Tools" >
                    <div class="card-image">
                        <img src="{{ asset('assets/svg/speech to text.svg') }}" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <a href='{{ route('user.web_chat') }}'>
                            <h3>Speech-to-text</h3>
                            <p>Converts voices into written text</p>
                        </a>
                        <div class="fav-icon-star">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="card Tools" >
                    <div class="card-image">
                        <img src="{{ asset('assets/svg/doc analyzer.svg') }}" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <a href='{{ route('user.web_chat') }}'>
                            <h3>Document Analyzer</h3>
                            <p>analyzes information from documents</p>
                        </a>
                        <div class="fav-icon-star">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card Tools" >
                    <div class="card-image">
                        <img src="{{ asset('assets/svg/image analyzer.svg') }}" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <a href='{{ route('user.web_chat') }}'>
                            <h3>Image Analyzer</h3>
                            <p>Identifies object within images</p>
                        </a>
                        <div class="fav-icon-star">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card Tools">
                    <div class="card-image">
                        <img src="{{ asset('assets/svg/web analyzer.svg') }}" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <a href='{{ route('user.web_chat') }}'>
                            <h3>Website Analyzer</h3>
                            <p>Gathers insights about websites</p>
                        </a>
                        <div class="fav-icon-star">
                            <i class="fas fa-star"></i>
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
