@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/ai-tool.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/sweetalert/sweetalert2.min.css') }}" />
    <style>
        .card-image{
            border-radius:50%;
            max-width:100px;
        }
    </style>
@endpush
@section('med_title', 'Mentors')

@section('content')


    <div class="box-content">
        @include('parts.med_screen')


        <section>

            <div class="tabs mt-3">
                <button class="filter-btn active" data-type="business">Business</button>
                <button class="filter-btn" data-type="marketing">Marketing</button>
                <button class="filter-btn" data-type="development">Development</button>
                <button class="filter-btn" data-type="financial">Financial</button>
                <button class="filter-btn" data-type="management">Management</button>
                <button class="filter-btn" data-type="specialist">Specialist</button>
            </div>

            <div class="card-grid" style='margin-bottom: 20px;' data-title='Chat'>
                @foreach ($chats as $chat)
                    <div class="card {{ $chat->group }}">
                        <div class="card-image">
                            <img src="{{ asset('assets/imgs'. $chat->logo) }}" alt="{{ $chat->name }}" srcset="" style="border-radius:50%; max-width:100px;">
                        </div>
                        <div class="card-content">
                            <a href="{{ route('user.chat', ['chat_code' => $chat->chat_code]) }}">
                                <h3>{{ $chat->name }}</h3>
                                <p>{{ $chat->sub_name }}</p>
                            </a>
                            <div class="fav-icon-star">
                                <i class="far fa-star"></i>
{{--                                <i class="fas fa-star"></i>--}}
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
