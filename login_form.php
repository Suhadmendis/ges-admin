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

    <script src="js/user.js"></script>


  </head>
  <body>
    <div class="color-overlay"></div>
    <div class="login-wrapper">
      <div class="login-first">
        <div class="section-img">
          <img src="./img/ges-edu-logo.jpg" alt="" />
        </div>
      </div>
      <div class="login-second">
        <h1>Welcome</h1>
        <p>Please login to student dashboard</p>

        <form action="">
          <div class="stu-form-group">
            <input type="text" placeholder="User Name" id="txtUserName" class="stu-feild" />
          </div>
          <div class="stu-form-group">
            <input type="password" placeholder="Password" id="txtPassword" class="stu-feild" />
          </div>

          <div class="stu-submit-btn">
            <!-- <button onclick="IsValiedData();" class="stu-login">Login</button> -->
         
            <div id="login-btn" onclick="IsValiedData();" class="stu-login">Login</div>
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
            IsValiedData();
        }
    }


</script>