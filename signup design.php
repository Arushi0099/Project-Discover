<?php
include 'dbconnection.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet"
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <style>


input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    border: 2px solid Blue;
    border-radius: 4px;
}
input[type=password], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    border: 2px solid Blue;
    border-radius: 4px;
}

input[type=number], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    border: 2px solid Blue;
    border-radius: 4px;
}
button[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    border: 2px solid Blue;
    border-radius: 4px;
}

button[type=submit]:hover {
    background-color: #45a049;
}
.header {
    background-color: aqua;
    color: blue;
    padding: 10px;
    text-align: center;
}
.footer {
    background-color: aqua;
    color: blue;
    padding: 10px;
    text-align: center;
}

div {

    border-radius: 2px;
    background-color: lightBlue;
    padding: 10px;
}

</style>
<body>
  <div class="header">
  <h1>**Welcome to My Sign Up Page**</h1>
</div>
  <div>
  <form action="signup backend.php" method="post";>
    <center><i class="fa fa-user" style="font-size:80px;"></i></center>
<center><label for="uname">USERNAME</label>
<input type="text" id="uname" name="uname"  placeholder="Your Name Here" value="<?php if(isset($_POST['uname'])){ echo $_POST['uname'];}?>"><br></center>
<center><label for="pwd">PASSWORD</label>
<input type="password" id="pwd" name="pwd" placeholder="password" value="<?php if(isset($_POST['pwd'])){ echo $_POST['pwd'];}?>"><br></center>
<center><label for="cnfrm_pwd">CONFIRM PASSWORD</label>
<input type="password" id="cnfrm_pwd" name="cnfrm_pwd" placeholder="re-enter password" value="<?php if(isset($_POST['cnfrm_pwd'])){ echo $_POST['cnfrm_pwd'];}?>"><br></center>
<center><label for="email">E-MAIL</label>
<input type="text" id="email" name="email" placeholder="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];}?>"><br></center>
<center><label for="contact">CONTACT</label>
<input type="number" id="contact" name="contact" placeholder="10 digit number" minlength="10" maxlength="10" value="<?php if(isset($_POST['contact'])){ echo $_POST['contact'];}?>"><br></center>
<center><button name="btn"> Submit </button></center>

  <?php
if(isset($_GET['error']))
{
  echo "<br>";
  echo $_GET['error'];
}
   ?>

  <center> <strong> Already have an account!! <big><a href="loginDesign.php">LOGIN</a></big></strong></center>
    </form>
    <div class="footer">
      <p>Contact@9041847726 For Any Help Or Queries..</p>
    </div>
  </div>

  </body>
</html>
