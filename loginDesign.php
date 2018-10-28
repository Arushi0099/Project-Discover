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

button[type=submit], select {
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
  <h1>**Welcome to Login Page**</h1>
</div>
  <div>
  <form action="loginBackend.php" method="post";>
    <center><i class="fa fa-user" style="font-size:80px;"></i></center>
<center><label for="email">E-MAIL</label>
<input type="text" id="email" name="email" placeholder="email"><br></center>
<center><label for="pwd">PASSWORD</label>
<input type="password" id="pwd" name="pwd" placeholder="password"><br></center>
<center><button name="btn"> Submit </button></center>
<center>  <strong> Dont'n have an account!! <big><a href="signup design.php">SIGNUP</a></big></strong></center>

  <?php
if(isset($_GET['error']))
{
  echo "<br>";
  echo $_GET['error'];
}
   ?>

    </form>
    <div class="footer">
      <p>Contact@9041847726 For Any Help Or Queries..</p>
    </div>
  </div>

  </body>
</html>
