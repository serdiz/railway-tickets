<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <link rel="stylesheet" href="Style1.css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body >
  <form class = "box" action="insert.php" method="post">
	<div class="container">
		<div class="auth">
            Faster sign in with
         </div>
         <div class="links">
            <div class="facebook">
               <i class="fab fa-facebook-square"><span>Facebook</span></i>
            </div>
            <div class="google">
               <i class="fab fa-google-plus-square"><span>Google</span></i>
            </div>
         </div>
         <header>Register</header>
         <form>
         	<div class="input-field">
               <input type="text" required name="Firstname"
               placeholder="Firstname">
   </div>
            <div class="input-field">
               <input type="text" required name="Lastname"
               placeholder="Secondname">
            </div>
            <div class="input-field">
               <input type="text" required name="Email"
               placeholder="Email">
            </div>
            <div class="input-field">
               <input class="pswrd" type="password" required name="Pass"
               placeholder="Password">
               <span class="show">SHOW</span>

            </div>
            <div class="button">
               <div class="inner"></div>
               <button>Register</button>
            </div>
         </form>
         <div class="signin">
            Have an account? <a href="singin.php">Login Here.</a>
         </div>
     </div>
   </form>
</body>
</html>
