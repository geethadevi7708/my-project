<?php
$conn = mysqli_connect("localhost",'root','','finalprojectuser');
if($conn){
  echo "connected";
}else{
  echo "not connected";
}
?>
