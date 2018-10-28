<?php
date_default_timezone_set("Asia/Calcutta");
echo date("d/m/y h:i:s"); //to check present date and time
echo "<br>";
if(date('H') < 9)
{
  echo "good morning";
}
elseif(date('H')<20)
{
  echo "good day";
}
else {
  echo "good night";
}
echo "<br>";
$a=date('D');   //today's day
switch($a)
{
  case 'Mon';
  echo "today is monday";
  break;
  case 'Tue';
  echo "today is tuesday";
  break;
  case 'Wed';
  echo "today is wednesday";
  break;
  case 'Thu';
  echo "today is thursday";
  break;
  case 'Fri';
  echo "today is friday";
  break;
  case 'Sat';
  echo "today is saturday";
  break;
  case 'Sun';
  echo "today is sunday";
  break;
  default:
  echo "hav a gud day";
}

 ?>
