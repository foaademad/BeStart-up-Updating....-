<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}" />
</head>
<body>


<section class="login auth-form sec-bg">
    <div class="card-sign-form" style='height:518px;max-width:460px;text-align:center'>
        <div class="frame">
            <div class="text">
                <h4 class="heading">Forgot Your Password?</h4>
                <p>
                    Enter your email address and we will send you instructions to
                    reset your password.
                </p>
            </div>
            <form id="login-form" action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="frame-2">
                    <span id="error" class="error-message"></span>
                    <div class="form-control">
                        <div class="input-filled-new">
                            <input
                                type="email"
                                id="email"
                                name='email'
                                class="text-wrapper-4"
                                placeholder="E-mail address"
                                required
                            />
                        </div>
                    </div>
                </div>
                <button id="submit-btn" type="submit" class="submit">Send Password Reset E-mail</button>

            </form>
            <div class="bottom">
                <a href="{{ route('login') }}" class="hyperlink">Back Sign In</a>
            </div>
        </div>
    </div>
</section>
</body>
</html>
