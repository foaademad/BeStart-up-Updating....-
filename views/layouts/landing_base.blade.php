<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BeStartup')</title>

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    @stack('styles')
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="header">
                <i
                    id="open-nav"
                    class="fas fa-bars text-white d-lg-none"
                    style="font-size: 24px; cursor: pointer"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar"></i>
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/svg/Logo.svg') }}" alt="Logo">
                </a>


                <ul class="collapse-screen">
                    <li class="nav-item"><a class="nav-link" href="{{ route('faq') }}">FAQs</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('privacy') }}">Privacy & Terms</a></li>
                    <a href='{{ route('login') }}'>
                        <button class="primaryButton">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect y="0.28125" width="25" height="25" fill="url(#pattern0_3321_3954)" />
                                <defs>
                                    <pattern id="pattern0_3321_3954" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_3321_3954" transform="scale(0.02)" />
                                    </pattern>
                                    <image id="image0_3321_3954" width="50" height="50" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACaElEQVR4nOWazU4bMRSFJ0JQVIp4kD4AROIBQioWpDta8Sw8AEFiCeygS1ghwYr0QcoCilSJFBGE+F19yOpFTNz5y/iaicORRiMlzvWc8bHv9XGi6D0CqAE/5apFoQKo84q5KFQA6zEi7ShgWZ3GiPwOUl70yypcedEvqzDlxf+yClNeJMsqHHnxbyTmgKMMIkfSZvhGBvgMrAK/MggkyWwDmK+MFK9vvg2c4Y4ziZU7UkAT+GvukQIRU3L4Qien70NpdxgsEWAGeJJ25j5T1bxwmi/Ad+t335yJVDHZgX0rxp4qkbdYfoGPwJ0V68587oWMdGoeNA2zJWN+TYnX0mfgsUQBfqQQ2dVn0N+xyQs21krGGgeuUohcAxP6DLLlVVZWJglmYUGfgYeNFbCdQ2RLn0G6vNoOsrrIIXJh2ukzSJZXYVkBY5JfTJ75QzFcAjvAIvDBh7w6ctUK5ImWWYWAHm7oSZyW1zxjPfyivMkb/OAeOABWVGozi8AXqWJfCsC3wpP029Qi0qVadLWINEdiREZmjiQBmIyRcl21bmMP/ylycN9zl9ucOBNAw2TsAeZTV9o3nGsvKwGq+FeVZHY8ue/yprOwqdXXi6zi1tC5ll9lqtscIg2Nfry77zn7kZ7qfsS3+y61UxJ2tORUFxJmp2bjWr6ru8oMWEohsqRh/5xQHOcuXq8kT5MfbBdlqkqXsVOyb9vX2i9FYgiILFtxlksTqfIYAZgGHiTeo1rtZB0vpE32QscFA/Sp58YP4GOpH37Gzkf8WECaPlalYFT+IJAgr1L26FCAkj7WsMrrWK4wZRUFhmeLVs2/3JK68AAAAABJRU5ErkJggg==" />
                                </defs>
                            </svg>
                            <p class="text-white">Get Start</p>
                        </button>
                    </a>
                    <div class="dropdown">
                        <select id="language-selector">
                            <option value="ar">Ar</option>
                            <option value="en">En</option>
                            <option value="es">IT</option>
                        </select>
                    </div>
                </ul>

                <a class="icon-user" href="{{ route('login') }}">
                    <img src="{{ asset('assets/svg/user.svg') }}" alt="user icon">
                </a>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="direction: ltr;">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav ">

                            <li class="nav-item"><a class="nav-link" href="{{ route('faq') }}">FAQs</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('privacy') }}">Privacy & Terms</a></li>
                            <li class="nav-item"></li><a class="nav-link" href="#">ِAr</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">En</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">It</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-links">
                <a href="{{ route('faq') }}">FAQs</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('contact') }}">Contact Us</a>
                <a href="{{ route('privacy') }}">Privacy & Terms</a>
            </div>
            <hr style="opacity: .5;">
            <div class="footer-copyright">
                &copy; 2024 Be Startup.
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/navbar.js') }}"></script>
    @stack('scripts')
    <script>
        // اختيار عنصر select من الـ DOM
        const languageSelector = document.getElementById('language-selector');
        // عند تغيير اللغة
        languageSelector.addEventListener('change', (e) => {
            const selectedLanguage = e.target.value;

            // إذا تم اختيار "ar" نضيف كلاس rtl ونحفظ الاختيار في localStorage
            if (selectedLanguage === 'ar') {
                document.body.classList.add('rtl');
                localStorage.setItem('language', 'ar');
            } else {
                // إزالة كلاس rtl إذا تم اختيار لغة أخرى
                document.body.classList.remove('rtl');
                localStorage.setItem('language', 'ltr');
            }
        });

        // عند تحميل الصفحة، استرجاع اللغة من localStorage
        document.addEventListener('DOMContentLoaded', () => {
            const savedLanguage = localStorage.getItem('language');

            if (savedLanguage === 'ar') {
                document.body.classList.add('rtl');
                languageSelector.value = 'ar'; // تحديد الاختيار في القائمة
            } else {
                document.body.classList.remove('rtl');
                languageSelector.value = 'en';
            }
        });
    </script>
</body>

</html>