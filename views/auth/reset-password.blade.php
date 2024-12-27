<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/index.css" />
    <link rel="stylesheet" href="../../assets/css/auth.css" />
    <!-- <link rel="stylesheet" href="../../assets/css/reset-password.css" /> -->
  </head>
  <body>
    <section class="auth-form">
      <div class="card-sign-form" style='height:518px;max-width:460px;text-align:center'>
        <div class="frame">
          <div class="text">
            <h4 class="heading">Change Your Password</h4>
            <p >Enter a new password below.</p>
          </div>

          <form action="{{ route('password.update') }}" method="POST">
              @csrf
              <div class="frame-2">
              <input type="hidden" name="token" value="{{ $token }}">
              <input type="hidden" name="email" value="{{ request('email') }}">
                <div class="password">
                    <div class="input-filled-new">
                        <input type="password" name="password" id="password" class="text-wrapper-4" placeholder="New Password" required/>
                        <img class="text-input-icons" src="../../assets/svg/Layer 2.svg" />
                    </div>
                </div>
                <div class="password">
                    <div class="input-filled-new">
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
                        <img class="text-input-icons" src="../../assets/svg/Layer 2.svg" />
                    </div>
                </div>
            </div>
              <button class="submit">Reset Password</button>
          </form>


        </div>
      </div>
    </section>
  </body>
</html>


