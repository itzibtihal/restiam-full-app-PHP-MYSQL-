
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESTIAM - LogIn</title>
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <!--the sign in form -->
        
        <form action="login_check.php" method="POST" class="sign-in-form">

          <h2 class="title">Sign in</h2>
          <h4>
            <?php 
         

             error_reporting(0);    
             session_start();
             session_destroy();
             echo $_SESSION['logMessage'];
            
            
           ?>
           </h4>
         
           
          <div class="input-field">

            <i class="fas fa-user" style="color: #ff822e"></i>
            <input type="text" placeholder="Username" name="username-log"/>
            <span class="msg-validation-signin">write a vailde Username</span>
          </div>


          <div class="input-field">
            <i class="fas fa-lock" style="color: #ff822e"></i>
            <input type="password" placeholder="Password" name="password-log"/>
            <span class="msg-validation-signin">write a vailde Password</span>

          </div>



          <input type="submit" value="Login" class="btn solid" name="submit-login"/>



          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"style="color: #ff822e"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter "style="color: #ff822e"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google" style="color: #ff822e"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in" style="color: #ff822e"></i>
            </a>
          </div>
        </form>
        <!--the Sign up form -->
        <form action="../../Controllers/login/login_check.php" method="POST" class="sign-up-form">

          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user" style="color: #ff822e"></i>
            <input type="text" placeholder="Username" />
            <span class="msg-validation-signin">write a vailde Username</span>
          </div>

          <div class="input-field">
            <i class="fas fa-envelope" style="color: #ff822e"></i>
            <input type="email" placeholder="Email" />
            <span class="msg-validation-signin">write a vailde Email</span>

          </div>

          <div class="input-field">
            <i class="fas fa-lock" style="color: #ff822e"></i>
            <input type="password" placeholder="Password" />
            <span class="msg-validation-signin">write a vailde Username</span>
          </div>

          <input type="submit" class="btn" value="Sign up" />

          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f" style="color: #ff822e"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter" style="color: #ff822e"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google" style="color: #ff822e"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in" style="color: #ff822e"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="assets/images/signup.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="assets/images/signup.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="assets/login.js"></script>

</body>

</html>