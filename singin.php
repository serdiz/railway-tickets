
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>


    <link rel="stylesheet" href="Style.css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


</head>
<body>

  <form class = "box" action="auth.php" method="post">
    <div class= "bg-img">
     <div class="container">

 <header>Sign in</header>
         <form>
            <div class="input-field">
               <input type="text" required name= "Email">
               <label>Email</label>
            </div>
            <div class="input-field">
               <input class="pswrd" type="password" required name="Pass">
               <span class="show">SHOW</span>
               <label>Password</label>
            </div>
            <div class="button">
               <div class="inner"></div>
    <button><a href="Sign in"</a></button>
    </div>
         </form>
         <div class="auth">
            Or sign in with
         </div>
         <div class="links">
            <div class="facebook">
               <i class="fab fa-facebook-square"><span>Facebook</span></i>
            </div>
            <div class="google">
               <i class="fab fa-google-plus-square"><span>Google</span></i>
            </div>
         </div>
         <div class="signup">
            New customer? <a href="register.php">Register now</a>
   
      </div>
  </div>
  <form>
</body>
</html>
