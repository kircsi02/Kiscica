<link rel="stylesheet" type="text/css" href="styles/kiscicam.css">
<?php
function logUser($conn, $name, $pw){
  $sql = "SELECT id, username FROM user WHERE username = '$name' AND password = '$pw'";
try {
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $log = array();
  foreach($stmt->fetchAll() as $k=>$v) {
    $log[0] = $v['id'];
    $log[1] = $v['username'];
  }
  return $log;
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
}

function isAdmin($conn, $name){
  $sql = "SELECT auth FROM user WHERE username = '$name'";
try{
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $auth = "";
  foreach($stmt->fetchAll() as $k=>$v) {
    $auth = $v['auth'];
  }
  if ($auth == "admin") {
    return TRUE;
  }else{
    return FALSE;
  }

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}


}

function problemaRead($conn,$id){
  $sql = "SELECT id, username, email, problema_tipus, bovebb FROM problema WHERE id = $id";
  try{
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $problem = array();
    foreach($stmt->fetchAll() as $k=>$v) {
      $problem[0] = $v['id'];
      $problem[1] = $v['username'];
      $problem[2] = $v['email'];
      $problem[3] = $v['problema_tipus'];
      $problem[4] = $v['bovebb'];
    }
    return $problem;
  
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
function readFeladvany($conn,$id){
  $sql = "SELECT kep1, kep2, kep3, kep4, kep5, megoldas FROM feladvanyok WHERE id = $id";
  try{
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $feladvany = array();
    foreach($stmt->fetchAll() as $k=>$v) {
      $feladvany[0] = $v['kep1'];
      $feladvany[1] = $v['kep2'];
      $feladvany[2] = $v['kep3'];
      $feladvany[3] = $v['kep4'];
      $feladvany[4] = $v['kep5'];
      $feladvany[5] = $v['megoldas'];
    }
    return $feladvany;
    
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}

function readCount($conn){
  $sql = "SELECT Count(*) FROM feladvanyok";
  try{
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $feladvany = 0;
    foreach($stmt->fetchAll() as $k=>$v) {
      $feladvany = $v;
    }
    return $feladvany;
    
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
?>
