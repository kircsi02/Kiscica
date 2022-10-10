<?php

require_once "connect.php";
function changePassWord($conn,$id, $newpasswd,$newpasswd2){
if($newpasswd == $newpasswd2){
try {

  $sql = "UPDATE user SET password='$newpasswd' WHERE id='$id'";
  $stmt = $conn->prepare($sql);
$stmt->execute();
echo "Sikeres jelszóváltás";}
 catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
}
else echo "A két jelszó nem egyezik";
}

function changeEmail($conn,$id, $newemail,$newemail2){
  if($newemail == $newemail2){
  try {
    $sql = "UPDATE user SET email='$newemail' WHERE id='$id'";
    $stmt = $conn->prepare($sql);
  $stmt->execute();
  echo "Sikeres emailváltoztatás";}
   catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  }
  else echo "A két email nem egyezik";
  }
?>
