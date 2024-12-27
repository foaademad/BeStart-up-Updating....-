@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/speech_text.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/atom-one-dark.min.css">
    <style>
        .welcome{
            margin-top: auto;
        }

        .welcome-msg {
            width:fit-content;
            margin:0 auto 220px;
            font-size: 1.6rem;

        }

        .welcome-msg span {
            background: linear-gradient(to right, #9a4efb, #6C63FF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
@endpush
@section('med_title', 'Speech To Text')

@section('content')

    <div class="box-content">
        @include('parts.med_screen')

        <div class="chat-box">
            <div class="left-part-ofcode">
                <div class="form-container">
                    <form>
                        <div class="drop-box" id="dropBox">
                            <p id="dropText">Drop Your Documents To Get Analyzed Here Or <span id="browse">Browse</span></p>
                            <input type="file" id="fileInput" style="display: none;" />
                        </div>

                        <label for="language">Audio Language (Optional)</label>
                        <select id="language">
                            <option value="none" selected="">Auto Detect</option>
                            <option value="en">English</option>
                            <option value="es">Spanish</option>
                            <option value="fr">French</option>
                            <option value="de">German</option>
                            <option value="it">Italian</option>
                            <option value="jp">Japanese</option>
                            <option value="cn">Chinese</option>
                            <option value="ar">Arabic</option>
                            <option value="hi">Hindi</option>
                            <option value="pt">Portuguese</option>
                        </select>

                        <label for="instructions">Audio Description (Optional)</label>
                        <textarea id="instructions" placeholder="Enter audio instructions"></textarea>

                        <button type="button" class="new-chat-button">Transcribe</button>
                    </form>
                </div>
            </div>

            <div class="analysis-container" >
                <div class="icon-chat">
                    <div class="underpages" style='font-size:14px;margin-bottom: 0;'>
                        <p>convert spoken words into accurate and actionable text.</p>
                    </div>

                </div>

                <div class="all-chat" >

                </div>
                <div class="welcome">
                    <h4 class="welcome-msg">Transcribe your audio easily</h4>
                </div>

            </div>


        </div>
    </div>

@endsection


@push('scripts')

    <script src="{{ asset('assets/js/dashboard/speech-to-text.js') }}"></script>

@endpush
