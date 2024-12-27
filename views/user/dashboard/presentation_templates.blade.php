@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/presentation.css') }}" />
@endpush

@section('med_title', 'Bestartup Presentations')

@section('content')


    <div class="box-content">
        @include('parts.med_screen')

        <section>
{{--            <h4 class="section-title">Templates</h4>--}}
            <div class="tabs">
                <button class="tab active">All</button>
                <button class="tab">Startups</button>
                <button class="tab">Businesses</button>
                <button class="tab">Marketing</button>
            </div>

            <div class="card-grid">
                <!-- Card 1 -->
                <div class="card" data-bs-toggle="modal" data-bs-target="#modal1">
                    <div class="card-image">
                        <p>Startup Pitch Deck Template</p>
                    </div>
                    <div class="card-content">
                        <h3>Pitch Deck</h3>
                        <p>Lorem ipsum dolor sit amet, Posuere orfs...</p>

                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card" data-bs-toggle="modal" data-bs-target="#modal2">
                    <div class="card-image">
                        <p>Business Plan Template</p>
                    </div>
                    <div class="card-content">
                        <h3>Business Plan</h3>
                        <p>Lorem ipsum dolor sit amet, Posuere orfs...</p>

                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card" data-bs-toggle="modal" data-bs-target="#modal3">
                    <div class="card-image">
                        <p>Marketing Strategy Template</p>
                    </div>
                    <div class="card-content">
                        <h3>Marketing Strategy</h3>
                        <p>Lorem ipsum dolor sit amet, Posuere orfs...</p>

                    </div>
                </div>
            </div>

            <!-- Modal 1 -->
            <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal1Label">Startup Pitch Deck</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h2>Welcome to Startup Pitch Deck</h2>
                            <p>Here is the detailed content for this template...</p>
                            <!-- انا هنا عاملها لينك عشان تنقلك ع الفورم شوف انت هتعملها ازاي ف routes   -->
                            <a href="#" class="btn-tempalte">
                                use tempalte
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 2 -->
            <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal2Label">Business Plan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h2>Welcome to the Business Plan Template</h2>
                            <p>Details and information for this specific template...</p>
                            <a href="#" class="btn-tempalte">
                                use tempalte
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 3 -->
            <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal3Label">Marketing Strategy</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- تصميم مخصص لمودال 3 -->
                            <h2>Welcome to Marketing Strategy</h2>
                            <p>Here are marketing tips and strategies...</p>
                            <a href="#" class="btn-tempalte">
                                use tempalte
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection

@push('scripts')
    <script src='{{ asset('assets/js/dashboard/presentation.js') }}'></script>
@endpush
