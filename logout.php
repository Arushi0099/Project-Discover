<?php
if(isset($_POST['submit']))
{
  session_unset();
  session_destroy();
  header("location:loginDesign.php?error=Logout Successfully..");
}
 ?>
