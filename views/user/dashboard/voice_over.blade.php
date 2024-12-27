@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/voice_over.css') }}" />
@endpush
@section('med_title', 'Voice Over')

@section('content')

    <div class="box-content">
    @include('parts.med_screen')
        <!-- body of the page  -->
        <div class="container-vioce-over">
            <div class="controls">
                <div class="dropdown">
                    <label for="language">Language</label>
                    <select id="language">
                        <option value="">Select</option>
                        <option value="">English</option>
                        <option value="">Arabic</option>
                        <option value="">Italy</option>
                    </select>
                </div>
                <div class="dropdown">
                    <label for="voice-type">Voice Type</label>
                    <select id="voice-type">
                        <option value="">Select</option>
                        <option value="Man">Man</option>
                        <option value="woman">woman</option>
                        <option value="Young">Young</option>
                        <option value="Girl">Girl</option>
                        <option value="child">child</option>
                    </select>
                </div>
                <div class="dropdown">
                    <label for="voice-effects">Voice Effects</label>
                    <select id="voice-effects">
                        <option value="">Select</option>
                        <option value="Music">Music</option>
                        <option value="without-Music">without Music</option>

                    </select>
                </div>
                <div class="dropdown">
                    <label for="volume">Volume</label>
                    <select id="volume">
                        <option value="">Select</option>
                        <option value="Soft">Soft</option>
                        <option value="Medium">Medium</option>
                        <option value="Loud">Loud</option>
                        <option value="x-Loud">X-Loud</option>
                    </select>
                </div>
                <div class="dropdown">
                    <label for="speed">Speed</label>
                    <select id="speed">
                        <option value="">Select</option>
                        <option value="x-Slow">x-Slow</option>
                        <option value="Slow">Slow</option>
                        <option value="Medium">Medium</option>
                        <option value="Fast">Fast</option>
                        <option value="x-Fast">X-Fast</option>
                    </select>
                </div>
                <div class="dropdown">
                    <label for="pauses">Pauses</label>
                    <select id="pauses">
                        <option value="">Select</option>
                        <option value="1-second">1 second</option>
                        <option value="2-seconds">2 seconds</option>
                        <option value="3-seconds">3 seconds</option>
                        <option value="4-seconds">4 seconds</option>
                        <option value="5-seconds">5 seconds</option>
                        <option value="6-seconds">6 seconds</option>
                        <option value="7-seconds">7 seconds</option>
                        <option value="8-seconds">8 seconds</option>
                        <option value="9-seconds">9 seconds</option><option value="10-seconds">10 seconds</option>
                        <option value="Sentence">Sentence</option>
                        <option value="Paragraph">Paragraph</option>
                    </select>
                </div>
                <div class="dropdown">
                    <label for="pitch">Pitch</label>
                    <select id="pitch">
                        <option value="">Select</option>
                        <option value="x-Slow">x-Slow</option>
                        <option value="Slow">Slow</option>
                        <option value="Medium">Medium</option>
                        <option value="Fast">Fast</option>
                        <option value="x-Fast">X-Fast</option>
                    </select>
                </div>
                <div class="dropdown">
                    <label for="emphasis">Emphasis</label>
                    <select id="emphasis">
                        <option value="">Select</option>
                        <option value="Speak-Softly">Speak Softly</option>
                        <option value="Sound-Breathing">Sound of Breathing</option>
                        <option value="Whispered">Whispered</option>
                        <option value="DRC-Effect">DRC Effect</option>
                        <option value="Controlling-Timbre">Controlling Timbre</option>
                    </select>
                </div>
            </div>

            <div class="text-area">

                <div class="bodyofaudio">

                    <div class="editText-voice">
                        <textarea name="target" id="inputofaudio" placeholder='The Bestartup voice generator offers realistic, natural-sounding speech in 32 languages, perfect for audiobooks, video narrations, advertisements, and more.'></textarea>
                    </div>
                </div>
                <div class="progress-container">
                    <div class="progress-bar"></div>
                </div>
                <div class="actions">
                    <div class="audio-player">
                        <div style='display:flex;align-items:center'>
                            <button class="play-pause-btn">
                                ▶
                            </button>


                            <div class="time-controls">
                                <span class="current-time">0:00</span>
                                /
                                <span class="total-time">0:00</span>
                            </div>
                        </div>

                        <div>
                            <button type="button" class="btn template-model" id="generate-btn">
                                <img src='{{ asset('assets/svg/Sparkling.svg') }}' style='width:20px;' alt='Sparkling'> Generate
                            </button>

                            <button type="button" class="btn template-model" id="download-btn">
                                <i class="fa-solid fa-download"></i> Download
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')

<script>
    document.getElementById('generate-btn').addEventListener('click', () => {
        const targetText = document.getElementById('inputofaudio').value;
        const language = document.getElementById('language').value;
        const voiceType = document.getElementById('voice-type').value;

        const pitch = document.getElementById('pitch').value;
        const speed = document.getElementById('speed').value;


        // HTML Elements
        const playPauseBtn = document.querySelector('.play-pause-btn');
        const progressContainer = document.querySelector('.progress-container');
        const progressBar = document.querySelector('.progress-bar');
        const currentTimeEl = document.querySelector('.current-time');
        const totalTimeEl = document.querySelector('.total-time');
        const downloadBtn = document.getElementById('download-btn');

        const data = {
            target: targetText,
            language: language,
            voice_type: voiceType,
            pitch: pitch,
            speed: speed,
        };

        fetch('{{ route("user.generate_audio") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include CSRF token for Laravel
            },
            body: JSON.stringify(data),
        })
            .then(response => response.json())
            .then(result => {
                if (result.audio) {
                    // Decode base64 audio
                    const audioSrc = `data:audio/mp3;base64,${result.audio}`;
                    const audio = new Audio(audioSrc);

                    // Update total duration when metadata is loaded
                    audio.addEventListener('loadedmetadata', () => {
                        const totalMinutes = Math.floor(audio.duration / 60);
                        const totalSeconds = Math.floor(audio.duration % 60).toString().padStart(2, '0');
                        totalTimeEl.textContent = `${totalMinutes}:${totalSeconds}`;
                    });

                    // Play/Pause functionality
                    playPauseBtn.addEventListener('click', () => {
                        if (audio.paused) {
                            audio.play();
                            playPauseBtn.textContent = '⏸';
                        } else {
                            audio.pause();
                            playPauseBtn.textContent = '▶';
                        }
                    });

                    // Update progress bar and current time
                    audio.addEventListener('timeupdate', () => {
                        const progressPercent = (audio.currentTime / audio.duration) * 100;
                        progressBar.style.width = `${progressPercent}%`;

                        const currentMinutes = Math.floor(audio.currentTime / 60);
                        const currentSeconds = Math.floor(audio.currentTime % 60).toString().padStart(2, '0');
                        currentTimeEl.textContent = `${currentMinutes}:${currentSeconds}`;
                    });

                    // Seek functionality
                    progressContainer.addEventListener('click', (e) => {
                        const clickX = e.offsetX;
                        const newTime = (clickX / progressContainer.offsetWidth) * audio.duration;
                        audio.currentTime = newTime;
                    });
                    // Download button functionality
                    downloadBtn.addEventListener('click', () => {
                        const link = document.createElement('a');
                        link.href = audioSrc;
                        link.download = 'audio-file.mp3';
                        link.click();
                    });


                    console.log('Audio generated and played successfully');
                } else if (result.error) {
                    console.error('Error:', result.error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });

</script>
@endpush
