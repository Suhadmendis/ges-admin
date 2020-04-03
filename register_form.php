<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Login</title>

    <link rel="stylesheet" href="./css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap"
      rel="stylesheet"
    />
    <script src="js/create_user.js"></script>
  </head>
  <body class="reg">
    <div class="color-overlay"></div>
    <div class="login-wrapper">
      <div class="login-first">
        <div class="section-img">
          <img src="./img/ges-edu-logo.jpg" alt="" />
        </div>
      </div>
      <div class="login-second">
        <h1>Please Register</h1>
        <p></p>
        <form action="">
          <div class="stu-form-group">
            <input type="text" placeholder="Username" id="txtUserName" class="stu-feild" />
          </div>
          <div class="stu-form-group">
            <input type="password" placeholder="Password" id="txtPassword" class="stu-feild" />
          </div>
          <div class="stu-form-group">
            <input type="password" placeholder="Confirm Password" id="txtPassword1" class="stu-feild" />
          </div>

          <div class="stu-submit-btn">
            <!-- <button type="submit" class="stu-login">Register</button> -->
            <div id="login-btn" onclick="save_inv();" class="stu-login">Register</div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>


<script>
    var elem = document.getElementById("txtPassword");
    elem.onkeyup = function (e) {
        if (e.keyCode == 13) {
            save_inv();
        }
    }


</script>