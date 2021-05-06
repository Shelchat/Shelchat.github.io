<?php
session_start();

if(isset($_POST['submit_pass']) && $_POST['pass'])
{
 $pass=$_POST['pass'];
 if($pass=="123")
 {
  $_SESSION['password']=$pass;
 }
 else
 {
  $error="Incorrect Pssword";
 }
}

if(isset($_POST['page_logout']))
{
 unset($_SESSION['password']);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/styles.css" type="text/css">
    <title>Shelomith Inspires - Get Fit For Destiny - Covid 19 Fitness and Health Tips</title>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top ">
    <a class="navbar-brand" href="#"><img src= "./images/jpgs/shelomith-inspires-logo.jpg" class="header_logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="#"><button>Login to Session </button><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active m--custom">
          <a class="m--custom" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item m--custom">
          <a class="m--custom" href="#">Upcoming Live Streams</a>
        </li>
        <li class="nav-item m--custom">
          <a class="m--custom" href="#">Inspirational Messages</a>
        </li>

          <li class="nav-item m--custom">
            <a class="m--custom" href="#">About</a>
          </li>
          <li class="nav-item m--custom">
            <a class="m--custom" href="#">Contact</a>
          </li>
      </ul>
  
    </div>
  </nav>
<div id="wrapper">

<?php
if($_SESSION['password']=="123")
{
 ?>
 <h1>Create Password Protected Webpage Using PHP, HTML And CSS</h1>
 <form method="post" action="" id="logout_form">
  <input type="submit" name="page_logout" value="LOGOUT">
 </form>
 <?php
}
else
{
 ?>
 <form method="post" action="" id="login_form">
  <h1>LOGIN TO PROCEED</h1>
  <input type="password" name="pass" placeholder="*******">
  <input type="submit" name="submit_pass" value="DO SUBMIT">
  <p>"Password : 123"</p>
  <p><font style="color:red;"><?php echo $error;?></font></p>
 </form>
 <?php	
}
?>

</div>
</body>
</html>