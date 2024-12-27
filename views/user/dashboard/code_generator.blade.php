@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/code_generator.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/atom-one-dark.min.css">
@endpush
@section('med_title', 'Code Generator')

@section('content')

    <div class="box-content">
        @include('parts.med_screen')

        <div class="chat-box">
            <div class="left-part-ofcode">
                <div class="form-container">
                    <form id="codeForm">
                        <label for="language">Programming Language</label>
                        <select id="language" name="language">
                            <option value="go">Go</option>
                            <option value="html">HTML</option>
                            <option value="javascript">JavaScript</option>
                            <option value="perl">Perl</option>
                            <option value="php">PHP</option>
                            <option value="python">Python</option>
                            <option value="ruby">Ruby</option>
                            <option value="shell">Shell</option>
                            <option value="swift">Swift</option>
                            <option value="flutter">Flutter</option>
                            <option value="typescript">TypeScript</option>
                            <option value="java">java</option>
                            <option value="c">C</option>
                            <option value="c#">C#</option>
                            <option value="c++">C++</option>
                        </select>

                        <label for="instructions">Provide Instructions</label>
                        <textarea id="instructions" name="instructions" placeholder="Code instructions"></textarea>

                        <button id='generate' type="button" class="new-chat-button">Generate</button>
                    </form>
                </div>
            </div>

            <div class="analysis-container" >
                <div class="icon-chat">
                    <div class="underpages" style='font-size:14px;margin-bottom: 0;'>
                        <p>Create a various code by using only text commands.</p>
                    </div>

                </div>

                <div class="all-chat">

                    <!-- msg Chat AI -->
                    <pre><code id='result'></code></pre>


                </div>
                <div class="welcome">
                    <h4 class="welcome-msg">Generate your code easily</h4>
                </div>

            </div>


        </div>
    </div>

@endsection


@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>

    <script>
        document.querySelector('.new-chat-button').addEventListener('click', () => {
            const language = document.querySelector('#language').value;
            const instructions = document.querySelector('#instructions').value;

            // Combine data into a query string for EventSource
            const queryString = new URLSearchParams({
                language: language,
                instructions: instructions
            }).toString();

            // Initialize EventSource with the query string
            const source = new EventSource(`/user/code_generate?${queryString}`);

            const result = document.getElementById('result'); // The <code> element inside <pre>
            result.textContent = ''; // Clear previous content

            const allData = []; // Store all parsed data temporarily

            source.addEventListener('update', (event) => {
                if (event.data === '<END_STREAMING_SSE>') {
                    // Skip the first 3 and the last 1
                    const filteredData = allData.slice(4, -2); // Remove the first three and the last one
                    filteredData.forEach(data => {
                        result.textContent += data.content; // Append the content to the single <code> block
                    });

                    // Highlight the entire block after all content is appended
                    hljs.highlightElement(result);

                    source.close(); // Close the connection when the stream ends
                    return;
                }

                // Parse the streamed data as JSON and store it
                const parsedData = JSON.parse(event.data);
                allData.push(parsedData);
            });

            source.addEventListener('error', (event) => {
                console.error('Error in SSE:', event);
                source.close();
            });
        });
    </script>


@endpush
