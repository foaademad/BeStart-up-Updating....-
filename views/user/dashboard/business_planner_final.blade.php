@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/result-business-plan.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        ul li{
            list-style-type:circle
        }
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0 10px;
            background-color:var(--backColor-Base-sidebar-base);
            border: 1px solid #afa5c9;
            border-radius: 5px;
        }

        .styled-table th,
        .styled-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #afa5c9;
        }

        .styled-table th {
            background-color: var(--backColor-Base-sidebar-base);
            color: var(--Color-Text-sideBar-text-color);
            font-weight: bold;
        }

        .styled-table tbody tr:nth-child(even) {
            background-color: var(--backColor-Base-sidebar-base);
        }

        .styled-table tbody tr:nth-child(odd) {
            background-color: #ddd;
        }
        .dark .styled-table tbody tr:nth-child(odd) {
            background-color: #242435;
        }

        .styled-table td {
            color: var(--Color-Text-sideBar-text-color);
            font-size: 14px;
        }

        .styled-table th {
            font-size: 16px;
            color: var(--Color-Text-sideBar-text-color);
        }

    </style>
@endpush

@section('med_title', 'Make a business plan')

@section('content')


        <div class="box-content">
            @include('parts.med_screen')

            <div class="Genration-content">
                <div class="sm-slidebar">
                    <h2>Sections</h2>
                    <ul class="section-list chat-container">
                        <li class="tab active" data-target="Idea Evaluation">
                            Idea Evaluation <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="tab" data-target="Business Plan">
                            Business Plan <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="tab" data-target="Strategic Plan">
                            Strategic Plan <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="tab" data-target="Marketing Strategy">
                            Marketing Strategy <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="tab" data-target="Sales Strategy">
                            Sales Strategy <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="tab" data-target="Business Model">
                            Business Model Canvas <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="tab" data-target="Risk Assessment">
                            Risk Assessment <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="tab" data-target="Governance Model">
                            Governance Model <i class="fas fa-angle-right"></i>
                        </li>
                    </ul>

                    <div class="proceed-button">
                        <button class="btn-Presentation">
                            Proceed To Presentation Maker
                        </button>
                    </div>
                </div>

                <div class="box-generate">

                    {{-- Display OpenAI responses --}}
                    @if (!empty($decodedResponses))
                        @foreach ($decodedResponses as $responseKey => $response)
                            @foreach ($response as $sectionTitle => $sectionContent)
                                <div id="{{ $sectionTitle }}" class="contentofbody {{  $sectionTitle == 'Idea Evaluation' ? 'active' : '' }}">
                                    <div class="headOfContent">
                                        <h2>{{ $sectionTitle }}</h2>
                                    </div>
                                    <div class="contentsmall p-3">
                                        @foreach ($sectionContent as $item)
                                            <div class="paragraph">
                                                <div class="titleOfParagraph">
                                                    <div>
                                                        <li>{{ $item['title'] }}</li>
                                                        @isset($item['score'])
                                                            <div class="circle">
                                                                <span class="circleValue">{{ $item['score'] }}</span>
                                                            </div>
                                                        @endisset
                                                    </div>
                                                </div>
                                                <div class="pagraph-content">
                                                    <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                                        {{ $item['content'] ?: 'No content available.' }}

                                                        @if (!empty($item['chart']))
                                                            <div class="chart-container mt-3">
                                                                <canvas id="chart-{{ $loop->parent->index }}-{{ $loop->index }}"></canvas>
                                                            </div>
                                                            <script>
                                                                document.addEventListener('DOMContentLoaded', function () {
                                                                    let ctx = document.getElementById('chart-{{ $loop->parent->index }}-{{ $loop->index }}').getContext('2d');
                                                                    new Chart(ctx, {
                                                                        type: "{{ $item['chart']['type'] }}",
                                                                        data: {
                                                                            labels: @json($item['chart']['data']['labels']),
                                                                            datasets: @json($item['chart']['data']['datasets'])
                                                                        },

                                                                    });
                                                                });
                                                            </script>
                                                        @endif

                                                        @if (!empty($item['list_items']))
                                                            <ul>
                                                                @foreach ($item['list_items'] as $listItem)
                                                                    <li>{{ $listItem }}</li>
                                                                @endforeach
                                                            </ul>
                                                        @endif

                                                        @if (!empty($item['table']))
                                                            <table class="styled-table mt-3">
                                                                <thead>
                                                                <tr>
                                                                    @foreach ($item['table']['headers'] as $header)
                                                                        <th>{{ $header }}</th>
                                                                    @endforeach
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach ($item['table']['rows'] as $row)
                                                                    <tr>
                                                                        @foreach ($row as $cell)
                                                                            <td>{{ $cell }}</td>
                                                                        @endforeach
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    @endif

                    <div class="overlay-history"></div>
                </div>
            </div>
        </div>
@endsection
@push('scripts')

    <script src="{{ asset('assets/js/dashboard/business_plan-part2.js') }}"></script>
@endpush
