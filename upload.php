<?php
include 'dbconnection.php';
if(isset($_POST['button']))
{
  $file=$_FILES['file'];

  $fileName=$file['name'];
  $fileTmpName=$file['tmp_name'];
  $fileSize=$file['size'];
  $fileType=$file['type'];
  $fileExt=explode(".",$fileName);
  $fileExtAct=strtolower(end($fileExt));
   $fileDestination='uploads/'.$fileName;
echo $fileExtAct;

$fileAllowed=array('jpg','png','jpeg','gif');
if(!in_array($fileExtAct,$fileAllowed))
{
  header("location:Home1.php?error=file not allowed");
}
else {
  if ($fileSize > 500000) {
    header("location:Home1.php?error=file size is too big");
  }
  else {
    if (!move_uploaded_file($fileTmpName, $fileDestination)) {
      echo "file not uploaded";
    }
    else {
      $sql="insert into gallary(name) values('$fileName')";
      if(!mysqli_query($connect,$sql))
      {
        header("location:Home1.php?error=file not uploaded");
      }
      else {
          header("location:Home1.php?error=file successfully uploaded");
      }
    }
  }
}
}
?>
