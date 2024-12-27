@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/image_generator.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/atom-one-dark.min.css">
    <script
        src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
        type="module"
    ></script>
@endpush
@section('med_title', 'Image Generator')

@section('content')

    <div class="box-content">
        @include('parts.med_screen')

        <div class="chat-box">
            <div class="left-part-ofcode">
                <div class="form-container">
                    <form>
                        <label for="number">Number of Images</label>
                        <select id="number">
                            <option value="1" selected="">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4"> 4</option>
                        </select>

                        <label for="style">Image Style</label>
                        <select id="style" name="style">
                            <option value="1" selected="">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4"> 4</option>
                        </select>

                        <label for="Resolution">Image Resolution</label>
                        <select id="Resolution" name="resolution">
                            <option value="256x256" selected="">256 x 256px</option>
                            <option value="512x512">512 x 512px</option>
                            <option value="1024x1024">1024 x 1024px</option>
                        </select>

                        <label for="Lighting">Lighting Style</label>
                        <select id="Lighting" name="lighting">
                                <option value="none" selected="">None</option>
                                <option value="warm">Warm</option>
                                <option value="cold">Cold</option>
                                <option value="golden hour">Golden Hour</option>
                                <option value="blue hour">Blue Hour</option>
                                <option value="ambient">Ambient</option>
                                <option value="studio">Studio</option>
                                <option value="neon">Neon</option>
                                <option value="dramatic">Dramatic</option>
                                <option value="cinematic">Cinematic</option>
                                <option value="natural">Natural</option>
                                <option value="foggy">Foggy</option>
                                <option value="backlight">Backlight</option>
                                <option value="hard">Hard</option>
                                <option value="soft">Soft</option>
                                <option value="iridescent">Iridescent</option>
                                <option value="fluorescent">Fluorescent</option>
                                <option value="decorative">Decorative</option>
                                <option value="accent">Accent</option>
                                <option value="task">Task</option>
                                <option value="halogen">Halogen</option>
                                <option value="light emitting diode">Light Emitting Diode (LED)</option>
                        </select>


                        <label for="Medium">Image Medium</label>
                        <select id="Medium" name="medium">
                                <option value="none" selected="">None</option>
                                <option value="acrylic">Acrylic</option>
                                <option value="canvas">Canvas</option>
                                <option value="chalk">Chalk</option>
                                <option value="charcoal">Charcoal</option>
                                <option value="classic oil">Classic Oil</option>
                                <option value="crayon">Crayon</option>
                                <option value="glass">Glass</option>
                                <option value="ink">Ink</option>
                                <option value="paster">Pastel</option>
                                <option value="pencil">Pencil</option>
                                <option value="spray paint">Spray Paint</option>
                                <option value="watercolor">Watercolor</option>
                                <option value="wood panel">Wood Panel</option>
                        </select>


                        <label for="Mood">Mood</label>
                        <select id="Mood" name="mood">
                                <option value="none" selected="">None</option>
                                <option value="angry">Angry</option>
                                <option value="aggressive">Aggressive</option>
                                <option value="boring">Boring</option>
                                <option value="bright">Bright</option>
                                <option value="calm">Calm</option>
                                <option value="cheerful">Cheerful</option>
                                <option value="chilling">Chilling</option>
                                <option value="colorful">Colorful</option>
                                <option value="happy">Happy</option>
                                <option value="dark">Dark</option>
                                <option value="neutral">Neutral</option>
                                <option value="sad">Sad</option>
                                <option value="crying">Crying</option>
                                <option value="disappointed">Disappointed</option>
                                <option value="flirt">Flirt</option>
                        </select>

                    </form>
                </div>
            </div>
            <div class='images_container'>
                <div class="generate-container">

                    <input
                        type="text"
                        class="generate-input"
                        name="description"
                        placeholder="Describe what you want to see with phrases..."
                    />
                    <button class="generate-button disabled" ><img src='{{ asset('assets/svg/Sparkling.svg') }}' style='width:20px;' alt=''> Generate</button>
                </div>

                <div class='pre_image' style="width: 70%; height: 440px; overflow: hidden;display:flex;align-items:center;margin:auto">
                    <img src="{{ asset('assets/imgs/generate.webp') }}" style="width: 100%; height: auto;" alt="">
                </div>
{{--                <div class='pre_image' style='background:#6e66c5; border-radius:20px; padding:20px;width:100%;height:85%;'>--}}
{{--                    --}}
{{--                </div>--}}

                <div class="card-grid" >

                </div>
            </div>
        </div>

@endsection


@push('scripts')

    <script>
        const generateButton = document.querySelector('.generate-button');
        const pre_image = document.querySelector('.pre_image');
        generateButton.addEventListener('click', async (event) => {
            event.preventDefault();

            // Collect data from the form
            const number = document.getElementById('number').value;
            const resolution = document.getElementById('Resolution').value;
            const lighting = document.getElementById('Lighting').value;
            const medium = document.getElementById('Medium').value;
            const mood = document.getElementById('Mood').value;
            const description = document.querySelector('.generate-input').value;

            if (description === '') {
                alert('Description cannot be empty.');
                return;
            }

            // Prepare the data to send
            const data = {
                number,
                resolution,
                lighting,
                medium,
                mood,
                description,
            };


            // Update the cards with the loading animation
            const cardGrid = document.querySelector('.card-grid');
            cardGrid.innerHTML = ''; // Clear previous images
            pre_image.style.display = 'none';
            for (let i = 0; i < number; i++) {
                const card = document.createElement('div');
                card.className = 'image-container';
                card.innerHTML = `
            <dotlottie-player
                src="https://lottie.host/0bf43a08-d98b-4e3e-85cf-652a57119d79/meoZ1xx4fi.lottie"
                background="transparent"
                speed="1"
                style="width: 100%; height: auto"
                loop
                autoplay
            ></dotlottie-player>`;
                cardGrid.appendChild(card);
            }

            try {
                generateButton.classList.add('disabled');
                // Send the request to the server
                const response = await fetch('/user/generate_images', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: JSON.stringify(data),
                });

                if (!response.ok) throw new Error('Failed to generate images.');

                const result = await response.json();

                // Replace each dotlottie-player with the generated image
                const players = document.querySelectorAll('.card-grid .image-container');
                result.images.forEach((imageUrl, index) => {
                    if (players[index]) {
                        const img = new Image(); // Create a new Image object
                        img.src = imageUrl; // Set the image source
                        img.onload = () => { // Wait until the image is loaded
                            players[index].classList.add('generated');
                            players[index].innerHTML = `
                                <img src="${imageUrl}" alt="Generated Image">
                                <a href="#" onclick="downloadImage(event, '${imageUrl}')" class="fav-icon-star">
                                    <i class="fa-solid fa-download"></i>
                                </a>
                            `;
                        };
                    }
                });
                generateButton.classList.remove('disabled');
            } catch (error) {
                console.error(error);
                alert('An error occurred while generating images.');
            }
        });


        // Enable the button when the user types in the description
        document.querySelector('.generate-input').addEventListener('input', () => {
            const description = document.querySelector('.generate-input').value.trim();

            if (description !== '') {
                generateButton.classList.remove('disabled');
            } else {
                generateButton.classList.add('disabled');
            }
        });
    </script>
    <script>
        function downloadImage(event, imageUrl) {
            event.preventDefault(); // Prevent default link behavior

            // Create a temporary anchor element
            const anchor = document.createElement('a');
            anchor.href = imageUrl;
            anchor.download = 'image.jpg'; // Specify the file name
            document.body.appendChild(anchor); // Append to the body
            anchor.click(); // Trigger the download
            document.body.removeChild(anchor); // Clean up
        }
    </script>
@endpush
