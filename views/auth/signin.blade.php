<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}" />
</head>
<body>
<section class="login auth-form sec-bg">
    <div class="card-sign-form">
        <div class="frame">
            <a href='{{ route('home') }}'>
                <img class="logo" src="{{ asset('assets/svg/Logo.svg') }}" alt='logo'/>
            </a>


            <div class="text">
                <h4 class="heading">Welcome back</h4>
                <p>Please login to continue to your account.</p>
            </div>

            <form id="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="frame-2">
                     <span id="error" class="error-message">
                        <img src='{{ asset('assets/imgs/Vector.png') }}' alt='warning' style='margin-right:8px;'>
                        Incorrect email or password.
                    </span>
                    @error('error')
                    <span id="error" class="error-message2">
                        <img src='{{ asset('assets/imgs/Vector.png') }}' alt='warning' style='margin-right:8px;'>
                        {{ $message }}
                    </span>
                    @enderror

                    <button type="button" class="btn-google">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.16 12.8402C20.16 12.2375 20.1059 11.6579 20.0055 11.1016H12V14.3895H16.5746C16.3775 15.452 15.7786 16.3523 14.8784 16.955V19.0877H17.6255C19.2327 17.6079 20.16 15.4288 20.16 12.8402Z" fill="#4285F4"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.1506C14.295 21.1506 16.2191 20.3895 17.6254 19.0913L14.8784 16.9586C14.1173 17.4686 13.1436 17.7699 12 17.7699C9.78611 17.7699 7.91224 16.2747 7.24383 14.2656H4.40405V16.4679C5.80269 19.2459 8.67724 21.1506 12 21.1506Z" fill="#34A853"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.24387 14.2604C7.07387 13.7504 6.97728 13.2056 6.97728 12.6454C6.97728 12.0852 7.07387 11.5404 7.24387 11.0304V8.82812H4.40409C3.82841 9.97563 3.5 11.2738 3.5 12.6454C3.5 14.017 3.82841 15.3152 4.40409 16.4627L7.24387 14.2604Z" fill="#FBBC05"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7.52912C13.2479 7.52912 14.3684 7.95799 15.2493 8.80026L17.6873 6.3623C16.2152 4.99071 14.2911 4.14844 12 4.14844C8.67724 4.14844 5.80269 6.05321 4.40405 8.83117L7.24383 11.0334C7.91224 9.02435 9.78611 7.52912 12 7.52912Z" fill="#EA4335"></path>
                        </svg>

                        <p class="text-wrapper-2">Sign in with Google</p>
                    </button>
                    <div class="or">
                        <img class="vector" src="{{ asset('assets/svg/Vector 1.svg') }}" alt='vector'/>

                        <div class="text-wrapper-3">or</div>

                        <img class="vector" src="{{ asset('assets/svg/Vector 1.svg') }}" alt='vector'/>

                    </div>
                    <div class="form-control">
                        <div class="input-filled-new">
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="text-wrapper-4"
                                placeholder="E-mail address"
                                required
                                value="{{ old('email') }}"
                            />
                        </div>
                    </div>

                    <div class="form-control">
                        <div class="password">
                            <div class="input-filled-new">
                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    class="text-wrapper-4"
                                    placeholder="Password"
                                    min='8'
                                    required
                                />
                                <span class="toggle-icon">
                                  <svg class="text-input-icons" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Layer 2">
                                        <g id="eye">
                                        <path id="Vector" d="M21.8699 11.6449C21.2299 10.5349 17.7099 4.96489 11.7299 5.14489C6.19995 5.28489 2.99995 10.1449 2.12995 11.6449C2.04218 11.7969 1.99597 11.9694 1.99597 12.1449C1.99597 12.3204 2.04218 12.4929 2.12995 12.6449C2.75995 13.7349 6.12995 19.1449 12.0199 19.1449H12.2699C17.7999 19.0049 21.0099 14.1449 21.8699 12.6449C21.9577 12.4929 22.0039 12.3204 22.0039 12.1449C22.0039 11.9694 21.9577 11.7969 21.8699 11.6449ZM12.2199 17.1449C7.90995 17.2449 5.09995 13.5549 4.21995 12.1449C5.21995 10.5349 7.82995 7.24489 11.8299 7.14489C16.1199 7.03489 18.9399 10.7349 19.8299 12.1449C18.7999 13.7549 16.2199 17.0449 12.2199 17.1449Z" fill="#E3E3E3"></path>
                                        <path id="Vector_2" d="M12 8.64844C11.3078 8.64844 10.6311 8.85371 10.0555 9.23829C9.47993 9.62288 9.03133 10.1695 8.76642 10.809C8.50152 11.4486 8.4322 12.1523 8.56725 12.8313C8.7023 13.5102 9.03564 14.1338 9.52513 14.6233C10.0146 15.1128 10.6383 15.4461 11.3172 15.5812C11.9961 15.7162 12.6999 15.6469 13.3394 15.382C13.9789 15.1171 14.5256 14.6685 14.9101 14.0929C15.2947 13.5174 15.5 12.8407 15.5 12.1484C15.5 11.2202 15.1313 10.3299 14.4749 9.67356C13.8185 9.01719 12.9283 8.64844 12 8.64844ZM12 13.6484C11.7033 13.6484 11.4133 13.5605 11.1666 13.3956C10.92 13.2308 10.7277 12.9966 10.6142 12.7225C10.5007 12.4484 10.4709 12.1468 10.5288 11.8558C10.5867 11.5648 10.7296 11.2976 10.9393 11.0878C11.1491 10.878 11.4164 10.7351 11.7074 10.6773C11.9983 10.6194 12.2999 10.6491 12.574 10.7626C12.8481 10.8761 13.0824 11.0684 13.2472 11.3151C13.412 11.5618 13.5 11.8518 13.5 12.1484C13.5 12.5463 13.342 12.9278 13.0607 13.2091C12.7794 13.4904 12.3978 13.6484 12 13.6484Z" fill="#E3E3E3"></path>
                                        </g>
                                        </g>
                                </svg>
                    </span>
                            </div>
                            <a href="{{ route('password.request') }}" class="text-wrapper-5">Forget password</a>
                        </div>
                    </div>
                </div>
                <button id="submit-btn" type="submit" class="submit" disabled='disabled'>Sign In</button>
            </form>

            <div class="bottom">
                <p class="extra-info">
                    <span class="span">Need an account ?</span>
                </p>
                <a href="{{ route('register') }}" class="hyperlink">Sign up</a>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('assets/js/signin.js') }}" defer></script>
<script>
    const emailInput = document.getElementById("email");
    const submitButton = document.getElementById("submit-btn");
    const passwordInput2 = document.querySelector('#password');

    const validateForm = () => {
        const email = emailInput.value.trim();
        const password = passwordInput2.value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        submitButton.disabled = !(email && password.length >= 8 && emailRegex.test(email));
    };
    emailInput.addEventListener("input", () => {
        validateForm();
    });

    passwordInput2.addEventListener("input", () => {
        validateForm();
    });

</script>
</body>
</html>
