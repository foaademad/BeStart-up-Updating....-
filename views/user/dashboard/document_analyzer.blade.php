@extends('layouts.dashboard_base')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/dashboard/speech_text.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/atom-one-dark.min.css">
<style>
    .input-area {
        display: flex;
        align-items: center;
        height: auto;
    }

    .input-area textarea {
        flex: 1;
        padding-left: 5px;
        border-radius: 10px;
        font-size: 14px;
        height: 100%;
        outline: none;
        border: none;
        color: var(--Color-Text-sideBar-text-color);
        background-color: transparent;
        resize: none;
        min-height: 22px;
        max-height: 150px;
        overflow-y: auto;
    }

    .input-area .actions {
        display: flex;
        gap: 10px;
    }

    .input-area .actions button {
        opacity: 0.5;
    }

    .input-area .actions button span {
        width: 28px;
        height: 28px;
    }

    .input-area .actions span {
        width: 22px;
        height: 22px;
        display: block;
    }

    .box-chat {
        width: 98%;
        /*background: #F3EDFE;*/
        background: #f1f3f8;
        padding: 12px 19px;
        border-radius: 36px;
        margin-top: auto;
        position: sticky;
        bottom: 6px;
        left: 10px;
    }

    @media (max-width : 767px) {

        .box-chat {
            left: 5px;
        }
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
                        <input type="file" id="fileInput" accept=".pdf,.doc,.docx,.txt,.csv" style="display: none;" />
                        <div id="fileNameDisplay"></div>
                        <p id="errorMessage" style="color: red; display: none; margin-top: 10px;"></p>
                    </div>

                    <label for="language">Language</label>
                    <select id="language">
                        <option value="Auto Detect" selected>Auto Detect</option>
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

                    <label for="document-type">Document Type:</label>
                    <select id="document-type" name="document_type">
                        <option value="general_document" selected>General Document</option>
                        <option value="report">Report</option>
                        <option value="contract">Contract</option>
                        <option value="invoice">Invoice</option>
                        <option value="research_paper">Research Paper</option>
                        <option value="resume">Resume</option>
                    </select>

                    <label for="chat-tone">Chat Tone:</label>
                    <select id="chat-tone" name="chat_tone">
                        <option value="simplified" selected>Simplified</option>
                        <option value="friendly">Friendly</option>
                        <option value="professional">Professional</option>
                        <option value="detailed">Detailed</option>
                    </select>

                    <label for="response-detail">Response Detail Level:</label>
                    <select id="response-detail" name="response_detail">
                        <option value="detailed" selected>Detailed Answers</option>
                        <option value="brief">Brief Summary</option>
                        <option value="moderate">Moderate (Key Points)</option>
                    </select>


                    <button type="button" class="new-chat-button">Analyze</button>
                </form>
            </div>
        </div>

        <div class="analysis-container">
            <div class="icon-chat">
                <div class="underpages" style='font-size:14px;margin-bottom: 0;'>
                    <p>analyze your documents and start chat with it.</p>
                </div>

            </div>

            <div class="all-chat">

            </div>

            <div class="welcome">
                <h4 class="welcome-msg">Chat with your documents</h4>
            </div>

            <div class="box-chat">

                <div class="input-area">
                    <textarea name="" id="textarea-chat" rows="1" placeholder="Enter a prompt here"></textarea>

                    <div class="actions">
                        <button type="submit" id="send-chat">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="41" viewBox="0 0 42 41" fill="none">
                                    <g id="Vector">
                                        <path d="M1 20.5C1 9.4543 9.9543 0.5 21 0.5C32.0457 0.5 41 9.4543 41 20.5C41 31.5457 32.0457 40.5 21 40.5C9.9543 40.5 1 31.5457 1 20.5Z" fill="#8646F4" />
                                        <path d="M22.1937 20.9138H14.1521H22.1937ZM13.9242 21.9679L12.5956 25.9366C11.8679 28.1101 11.5041 29.1969 11.7652 29.8661C11.9919 30.4474 12.4789 30.888 13.0798 31.0558C13.7718 31.2489 14.8169 30.7785 16.9072 29.838L30.3077 23.8077C32.348 22.8895 33.3682 22.4305 33.6834 21.7928C33.9574 21.2388 33.9574 20.5886 33.6834 20.0346C33.3682 19.397 32.348 18.9379 30.3077 18.0197L16.8841 11.9791C14.8001 11.0413 13.7581 10.5724 13.0669 10.7648C12.4665 10.9318 11.9796 11.3713 11.7521 11.9514C11.4901 12.6194 11.85 13.7039 12.5699 15.8728L13.9268 19.9608C14.0504 20.3333 14.1122 20.5196 14.1366 20.71C14.1583 20.8791 14.158 21.0502 14.136 21.2192C14.1111 21.4096 14.0488 21.5957 13.9242 21.9679Z" fill="#8646F4" />
                                        <path d="M22.1937 20.9138H14.1521M21 40.5C9.95431 40.5 1 31.5457 1 20.5C1 9.45431 9.95431 0.5 21 0.5C32.0457 0.5 41 9.45431 41 20.5C41 31.5457 32.0457 40.5 21 40.5ZM13.9242 21.9679L12.5956 25.9366C11.8679 28.1101 11.5041 29.1969 11.7652 29.8661C11.9919 30.4474 12.4789 30.888 13.0798 31.0558C13.7718 31.2489 14.8169 30.7785 16.9072 29.838L30.3077 23.8077C32.348 22.8895 33.3682 22.4305 33.6834 21.7928C33.9574 21.2388 33.9574 20.5886 33.6834 20.0346C33.3682 19.397 32.348 18.9379 30.3077 18.0197L16.8841 11.9791C14.8001 11.0413 13.7581 10.5724 13.0669 10.7648C12.4665 10.9318 11.9796 11.3713 11.7521 11.9514C11.4901 12.6194 11.85 13.7039 12.5699 15.8728L13.9268 19.9608C14.0504 20.3333 14.1122 20.5196 14.1366 20.71C14.1583 20.8791 14.158 21.0502 14.136 21.2192C14.1111 21.4096 14.0488 21.5957 13.9242 21.9679Z" stroke="#F3EDFE" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </svg>
                            </span>
                        </button>
                    </div>

                </div>
            </div>
        </div>


    </div>
</div>

@endsection


@push('scripts')





@endpush