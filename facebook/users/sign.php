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
        <form action = "sign.php" method="post" name="user-sign-up">
          <div class="sign-up-form">
            <div class="sign-up-name">
              <input type="text" name="first-name" placeholder="First name">
              <input type="text" name="last-name" placeholder="Last name">
            </div>
            <div class="sign-wrap-mobile">
              <input type="text" name="mobile" placeholder="Mobile number or email address">
            </div>
            
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>