<?php
try {
  $db = new mysqli("localhost", "root", "", "shop");
} catch (Exception $exc) {
  echo $exc->getTraceAsstring();
}
if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Subject']) && isset($_POST['Message'])){

  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Subject = $_POST['Subject'];
  $Message = $_POST['Message'];
 $is_insert =  $db->query("INSERT INTO `shopp1` (`Name`, `Email`, `Subject`, `Message`) VALUES ('$Name', '$Email', '$Subject', '$Message')");
 
 if($is_insert == TRUE){
  echo"<h2>thanks youre request submited.</h2>";
  exit();
 }
}
?>