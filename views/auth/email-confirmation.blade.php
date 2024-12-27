<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
      <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}" />
  </head>
  <body>
    <section class="auth-form  no-header" >
      <div class="card-sign-form" style='height:518px;'>
        <div class="frame">
          <div class="text">
            <h4 class="heading">Confirm your email</h4>
            <p>
              To continue signing up, click link that we emailed to.
            </p>
          </div>
            <a href="#" style="width: 100%" onclick="event.preventDefault();
                document.getElementById('verification-form').submit();">
                <button class="submit">Resend E-mail</button>
            </a>

            <form id="verification-form" action="{{ route('verification.send') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>
      </div>
    </section>
  </body>
</html>
