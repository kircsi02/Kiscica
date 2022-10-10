<?php

function regUser($conn, $name, $pw,$email){
  $sql = "INSERT INTO user (username, password, email, auth)
  VALUES ('$name', '$pw','$email','user')";

try {
    $conn->exec($sql);
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  echo '<meta http-equiv="refresh" content="0; URL=login.php>';
}

function reportIssue($conn,$name,$email,$problema_tipus,$bovebb){
  $sql="INSERT INTO problema(username,email,problema_tipus,bovebb)
  VALUES ('$name', '$email','$problema_tipus','$bovebb')";
try{
  $conn->exec($sql);
} catch(PDOException $e){
  echo $sql ."<br>" . $e->getMessage();
}
}

function createFeladvany($conn,$kep1,$kep2,$kep3,$kep4,$kep5,$megoldas){
  $sql="INSERT INTO feladvanyok(kep1,kep1,kep1,kep1,kep1,megoldas)
  VALUES ('$kep1','$kep2','$kep3','$kep4','$kep5','$megoldas')";
  try {
    $conn->exec($sql);
  } catch (PDOException $e) {
    echo $sql ."<br>" . $e->getMessage();
  }
}

?>
