@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/ai-tool.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/sweetalert/sweetalert2.min.css') }}" />
    <style>
        .card-image{
            border-radius:50%;
            max-width:100px;
        }
        .card-image i {
            font-size:30px;
            padding:15px;
            border-radius:50%
        }
        .blog-icon{
            background: #E1F0FF;
            color: #007bff;
        }
        .main-icon{
            background: #FFF4DF;
            color: #FF9D00;
        }
        .ecommerce-icon{
            background: #007bff;
            color: #fff;
        }
        .email-icon{
            background: #F8D7DA;
            color: #B02A37;
        }
        .framework-icon {
            background: #087990;
            color: #FFF;
        }
        .marketing-icon{
            /*background: #ff0000;*/
            background: #a155d8;
            color: #fff;
        }
        .social-icon {
            color: #fff;
            background: #AB54EB;
        }
        .web-icon {
            background: #0ab57e;
            color: #fff;
        }
        .social-icon{
            background: #CFF4FC;
            color: #087990;
        }
        .ad-icon {
            background: #1e1e2d;
            color: #fff;
        }
        .card {
            text-align: center;
            min-height: 136px;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            border-radius: 10px;
            color: var(--Color-Text-sideBar-text-color);
            background-color: var(--backColor-Base-sidebar-base);
            position: relative;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
        }
        .card-content a{
            text-align:left;
        }
        .card .card-image{
            width:66%;
        }
        .card .card-content p{
            width:80%;
        }
        .card-grid {
            display: grid;
            gap: 10px;
            grid-template-columns: repeat(3, minmax(180px, 1fr));
        }
        @media (max-width:992px) {
            .card-grid {
                display: grid;
                gap: 10px;
                grid-template-columns: repeat(4, minmax(164px, 1fr));
            }
            .filter-btn{
                padding: 8px 10px;
            }
            .card {
                flex-direction: column;
                padding:20px;
            }
            .card-content a{
                text-align:center;
            }
            .card .card-content p{
                width:100%;
            }
        }
        @media (max-width:767px) {
            .card-grid {
                display: grid;
                gap: 10px;
                grid-template-columns: repeat(3, minmax(164px, 1fr));
            }
        }
        @media (max-width:580px) {
            .card-grid {
                display: grid;
                gap: 10px;
                grid-template-columns: repeat(1, minmax(164px, 1fr));
            }
        }

    </style>
@endpush

@section('med_title', 'Templates')

@section('content')


    <div class="box-content">
        @include('parts.med_screen')


        <section>

            <div class="tabs mt-3">
                <button class="filter-btn active" data-type="ad">Ads</button>
                <button class="filter-btn" data-type="blog">Blogs</button>
                <button class="filter-btn" data-type="text">Contents</button>
                <button class="filter-btn" data-type="ecommerce">Ecommerce</button>
                <button class="filter-btn" data-type="email">Emails</button>
                <button class="filter-btn" data-type="framework">Frameworks</button>
                <button class="filter-btn" data-type="social">Media</button>
                <button class="filter-btn" data-type="marketing">Marketing</button>
                <button class="filter-btn" data-type="web">Websites</button>
            </div>

            <div class="card-grid" style='margin-bottom: 20px;' data-title='Template'>
                @foreach ($templates as $template)
                    <div class="card {{ $template->group }}">
                        <div class="card-image">

                            <i class="{{ $template->icon }}"></i>
                        </div>
                        <div class="card-content">
                            <a href="{{ route('user.custom_template', ['slug' => $template->slug]) }}">
                                <h3>{{ $template->name }}</h3>
                                <p>{{ $template->description }}</p>
                            </a>
                            <div class="fav-icon-star">
{{--                                <i class="fas fa-star"></i>--}}
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                @endforeach

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
