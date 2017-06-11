<?php
session_start();

if(isset($_SESSION['fav1']))
{
header('Location: hello.php');

}
/* http://www.wallpaperup.com/uploads/wallpapers/2012/10/21/20181/cad2441dd3252cf53f12154412286ba0.jpg */
?>


<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
  body{
   background: url(images1/1st.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	
  padding:50px;
}
.navbar-brand
{
	color: #FFFAFA;
 
  text-decoration: underline;
}
.form-group input{
    outline: 0;
    background: white;
    color:black;
}
h3
{
  color:yellow;
   text-decoration: underline;
}
.btn
{
  background: Green;
}
</style>
</head>
<body>
    <div class="row">
      <div class="col-md-6">
        <h3 id="2">Sign-up</h3>
        <form action="Signup.php" method="post" autocomplete="off">
            <div class="form-group">
                <label for="email" class="navbar-brand">Your Email </label>
                <input class="form-control"   required  type="text" name="email" id="email">
				
              </div>
            <div class="form-group">
                <label for="first_name" class="navbar-brand">Your Firstname </label>
                <input class="form-control" type="text" name="first_name" id="first_name" required>
            </div>
            <div class="form-group">
                <label for="password" class="navbar-brand">Your Password </label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>
           <button type="submit" name="submit" class="btn btn-primary">

              Submit
            </button>
              
        </form>
      </div>


      


      <div class="col-md-6">
        <h3 id="1">Sign-in</h3>
        <form action="Signin.php" method="post" autocomplete="off">
            <div class="form-group">
                <label for="email" class="navbar-brand">Your Email </label>
                <input class="form-control" type="text" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password" class="navbar-brand">Your Password </label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">
              Submit
            </button>
            
        </form>
      </div>
    </div>
  </body>
  </html>
