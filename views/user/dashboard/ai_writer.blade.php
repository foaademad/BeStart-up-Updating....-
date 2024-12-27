@extends('layouts.dashboard_base')

@push('styles')

    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/ai-article.css') }}" />
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
                            <label for="creativity"> Creativity </label>
                            <select id="creativity" name="creativity" >
                                <option value="0">Repetitive</option>
                                <option value="0.25"> Deterministic</option>
                                <option value="0.5" selected=""> Original</option>
                                <option value="0.75"> Creative</option>
                                <option value="1"> Imaginative</option>
                            </select>
                        </div>

                       <div>
                        <label for="instructions"> Target Text</label>
                        <textarea id="instructions" placeholder="Paste your text that you wish to rewrite or improve..." name='target'></textarea>
                       </div>
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
            const creativity = document.querySelector('#creativity').value;
            const instructions = document.querySelector('#instructions').value;

            // Combine data into a query string for EventSource
            const queryString = new URLSearchParams({
                language: language,
                creativity: creativity,
                instructions: instructions
            }).toString();

            // Initialize EventSource with the query string
            const source = new EventSource(`/user/article_write?${queryString}`);

            const result = document.querySelector('.ql-editor'); // The container to display the streamed response
            result.textContent = ''; // Clear any previous content
            result.innerHTML = ''; // Clear any previous content

            // const allData = []; // Store all parsed data temporarily
            // const paragraph = document.createElement('p');
            //
            // source.addEventListener('update', (event) => {
            //     if (event.data === '<END_STREAMING_SSE>') {
            //         // Skip the first 3 and the last 1
            //         const filteredData = allData.slice(4, -2); // Remove the first three and the last one
            //         filteredData.forEach(data => {
            //             console.log(data.content);
            //
            //             paragraph.textContent += data.content;
            //             result.appendChild(paragraph); // Append to the result container
            //         });
            //
            //         source.close(); // Close the connection when the stream ends
            //         return;
            //     }
            //
            //     // Parse the streamed data as JSON and store it
            //     const parsedData = JSON.parse(event.data);
            //     allData.push(parsedData);
            // });
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
                        result.appendChild(paragraph); // Append to the result container
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
