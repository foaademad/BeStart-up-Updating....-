@extends('layouts.dashboard_base')

@push('styles')

    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/ai-article.css') }}" />
    <style>
        @media (min-width: 991px) {
            .left-part-ofcode textarea {
                height: 120px;
            }
        }
    </style>
@endpush


@section('med_title', 'AI Be Startup GPT')

@section('content')

    <div class="box-content">
        @include('parts.med_screen')


        <div class="container-fluidof-ai-writing">
            <!-- Left Panel -->
            <div class="left-part-ofcode">
                <div class="form-container">
                    <form>
                        <div>
                            <label for="language"> Language</label>
                            <select id="language" name='language'>
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
                        </div>

                        <div>
                            <label for="creativity">Creativity</label>
                            <select id="creativity" name="creativity">
                                <option value="0">Repetitive</option>
                                <option value="0.25">Deterministic</option>
                                <option value="0.5" selected>Original</option>
                                <option value="0.75">Creative</option>
                                <option value="1">Imaginative</option>
                            </select>
                        </div>
                        <input type="hidden" id='template_code' value='{{ $template_code }}'>
                        <input type="hidden" id='description' value='{{ $description }}'>

                        @foreach($fields as $field)
                            <div>
                                <label for="{{ $field['code'] }}">{{ $field['name'] }}</label>

                                @if($field['input'] == 'textarea')
                                    <textarea
                                        id="{{ $field['code'] }}"
                                        name="{{ $field['code'] }}"
                                        placeholder="{{ $field['placeholder'] }}"
                                        required="{{ $field['required'] == 1 ? 'required' : '' }}"
                                        maxlength="{{ $field['length'] }}"></textarea>
                                @elseif($field['input'] == 'input')
                                    <input
                                        type="text"
                                        class='text'
                                        id="{{ $field['code'] }}"
                                        name="{{ $field['code'] }}"
                                        placeholder="{{ $field['placeholder'] }}"
                                        required="{{ $field['required'] == 1 ? 'required' : '' }}"
                                        maxlength="{{ $field['length'] }}">
                                @endif
                            </div>
                        @endforeach

                        <button type="button" class="new-chat-button">Generate</button>
                    </form>
                </div>
            </div>

            <!-- Right Panel -->
            <div class="container-ai-writing">

                <div id="editor"></div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
    <!-- Include the Quill library -->
    <script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>
    <script>
        const toolbarOptions = [
            [{ 'font': [] }, { 'size': [] }],
            [ 'bold', 'italic', 'underline', 'strike' ],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'script': 'super' }, { 'script': 'sub' }],
            [{ 'header': '1' }, { 'header': '2' }, 'blockquote', 'code-block' ],
            [{ 'list': 'ordered' }, { 'list': 'bullet'}, { 'indent': '-1' }, { 'indent': '+1' }],
            [ 'direction', { 'align': [] }],
            [ 'link', 'image', 'video', 'formula' ],
            [ 'clean' ]
        ];
        const quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: "snow",
        });
    </script>

    <script>
        document.querySelector('.new-chat-button').addEventListener('click', () => {
            const language = document.querySelector('#language').value;
            const template_code = document.querySelector('#template_code').value;
            const creativity = document.querySelector('#creativity').value;
            const description = document.querySelector('#description').value;

            const fields = [];
            document.querySelectorAll('form input, form textarea').forEach(input => {
                fields.push({
                    name: input.name,
                    value: input.value
                });
            });

            // Construct the query string with dynamic fields
            const queryString = new URLSearchParams({
                language: language,
                creativity: creativity,
                template_code: template_code,
                description: description,
                ...fields.reduce((acc, field) => {
                    acc[field.name] = field.value;
                    return acc;
                }, {})
            }).toString();


            const source = new EventSource(`/user/template_message?${queryString}`);

            const result = document.querySelector('.ql-editor');

            const paragraph = document.createElement('p');

            source.addEventListener("update", (event) => {
                if (event.data === "<END_STREAMING_SSE>") {
                    source.close();
                    return;
                }

                try {
                    const data = JSON.parse(event.data);  // Parse the incoming JSON
                    const { type, content } = data;


                    if (type === 'text') {
                        console.log(data.content);

                        paragraph.textContent += data.content;
                        result.appendChild(paragraph);
                    }

                } catch (error) {
                    console.error("Error processing SSE data:", error);
                }
            });

            source.addEventListener('error', (event) => {
                console.error('Error in SSE:', event);
                source.close();
            });
        });

    </script>



@endpush
