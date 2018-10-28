<?php
include 'dbconnection.php';
session_start();
if(isset($_POST['btn']))
{
$d=mysqli_real_escape_string($connect,check($_POST['email']));//to prevent from sql injections
$b=mysqli_real_escape_string($connect,check($_POST['pwd']));
if (empty($d)||empty($b))
{
header("location:loginDesign.php?error=FIELD EMPTY");
}
else {

$sql="SELECT * FROM sign where EMAIL='$d';";
$result=mysqli_query($connect,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck <1)
{
  header("location:loginDesign.php?error=USER NOT REGISTERED");
}
else {
  $row=mysqli_fetch_array($result);
  if(!password_verify($b,$row['PASSWORD']))
  {
  header("location:loginDesign.php?error=INCORRECT PASSWORD");
  }
  else {
    $_SESSION['username']=$row['NAME'];
    $_SESSION['email']=$row['EMAIL'];
        setcookie('user1','abcd',time() + 800);
    header("location:pro1page.html");
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
