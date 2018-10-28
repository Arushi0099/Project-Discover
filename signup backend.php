<?php
include 'dbconnection.php';
if(isset($_POST['btn']))
{
$a=mysqli_real_escape_string($connect,check($_POST['uname']));
$b=mysqli_real_escape_string($connect,check($_POST['pwd']));
$c=mysqli_real_escape_string($connect,check($_POST['cnfrm_pwd']));
$d=mysqli_real_escape_string($connect,check($_POST['email']));
$e=mysqli_real_escape_string($connect,check($_POST['contact']));
$encrypt=password_hash($b,PASSWORD_DEFAULT);

if (empty($a)||empty($b)||empty($d)||empty($e))
{
header("location:signup design.php?error=FIELD EMPTY");
}
else{
if($b != $c)
{
header("location:signup design.php?error=PASSWORDS ARE NOT MATCHING");
}
else{
if(!filter_var($d,FILTER_VALIDATE_EMAIL))
{
header("location:signup design.php?error=EMAIL NOT VALID");
}
else{

$sql1="SELECT * FROM sign WHERE EMAIL='$d';";
$result=mysqli_query($connect,$sql1);
$result1=mysqli_num_rows($result);
if($result1 > 0)
{
  header("location:signup design.php?error=EMAIL NOT REGISTERED");
}
else {
  if(!preg_match("/^[a-z0-9]/i",$a))
  {
    header("location:signup design.php?error=USERNAME NOT VALID");
  }
  else{
$sql="INSERT INTO sign (NAME,PASSWORD,EMAIL,CONTACT) VALUES('$a','$encrypt','$d','$e')";
 mysqli_query($connect,$sql);
 header("location:signup design.php?error=SIGNUP SUCCESS");
}
}
}
}
}
}

function check($data)
{
$data=trim($data);
$data=htmlspecialchars($data);
$data=stripcslashes($data);
return $data;
}
 ?>
