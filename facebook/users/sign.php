<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facebook</title>
</head>

<body>
  <div class="header"></div>
  <div class="main">
    <div class="left-side">
      <img src="../assets/image/facebook Signin image.png" alt="">
    </div>
    <div class="right-side">
      <div class="error">
        <h1>Create an account</h1>
        <p>It's quick and easy.</p>
        <form action="sign.php" method="post" name="user-sign-up">
          <div class="sign-up-form">
            <div class="sign-up-name">
              <input type="text" name="first-name" placeholder="First name" class="text-field">
              <input type="text" name="last-name" placeholder="Last name" class="text-field">
            </div>
            <div class="sign-wrap-mobile">
              <input type="text" name="mobile" placeholder="Mobile number or email address" id="up-email"
                class="text-input">
            </div>
            <div class="sign-up-password">
              <input type="password" name="up-password" placeholder="New password" class="text-input" id="up-password">
            </div>
            <div class="sign-up-birthday">
              <div class="bday">Birth day</div>
              <div class="form-birthday">
                <select name="birth-day" id="days" class="select-body"></select>
                <select name="birth-month" id="months" class="select-body"></select>
                <select name="birth-year" id="years" class="select-body"></select>
              </div>
            </div>
            <div class="gender-wrap">
              <input type="radio" name="gen" id="female" value="female" class="m0">
              <label for="fem" class="gender">Female</label>
              <input type="radio" name="gen" id="male" value="male" class="m0">
              <label for="mal" class="gender">Male</label>
            </div>
            <div class="term">
              By clicking Sign Up, you agree to our <a href="#">Terms</a>, <a href="#">Data Policy</a> and <a
                href="#">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.
            </div>
            <input type="submit" value="Sign up" class="sign-up">
        </form>
      </div>
    </div>
  </div>

</body>

</html>