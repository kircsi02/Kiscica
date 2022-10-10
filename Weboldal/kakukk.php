<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kakukktojás keresés</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/mainstyle.css">
</head>
<body>
    <?php
    require_once "connect.php";
    require_once "crud/Read.php";
    ?>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="login.php">Cicák!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menü
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
			  <li><a class="dropdown-item" href="problema.php">Probléma jelentés</a></li>
			  
            <?php
      if(!isset($_SESSION["id"])){
        echo '
			<a class="dropdown-item" href="login.php">Belépés</a>
			<a class="dropdown-item" href="register.php">Regisztráció</a>
			';
        }else{
          if(isAdmin($conn,$_SESSION["user"])){
            echo '
            <li class="dropdown-item">
            <h6>Cicás dolgok:</h6>
          <a class="dropdown-item" href="kakukk.php">Kakukktojás keresés</a>
          <a class="dropdown-item" href="admin.php">Admin felület</a>
            <li class="dropdown-item">
            <h6>Profil:</h6>
              <a class="dropdown-item" href="passwordChange.php">Jelszóváltás</a>
              <a class="dropdown-item" href="emailChange.php">Emailváltás</a>
              <a class="dropdown-item" href="logout.php">Kijelentkezés<i class="glyphicon glyphicon-log-out"></i></a>
          </li>
            <script>console.log("    admin   ")</script>';
          }else{
            
            echo '
        <li class="dropdown-item">
        <h6>Cicás dolgok:</h6>
		  <a class="dropdown-item" href="kakukk.php">Kakukktojás keresés</a>
        <li class="dropdown-item">
        <h6>Profil:</h6>
          <a class="dropdown-item" href="passwordChange.php">Jelszóváltás</a>
          <a class="dropdown-item" href="emailChange.php">Emailváltás</a>
          <a class="dropdown-item" href="logout.php">Kijelentkezés<i class="glyphicon glyphicon-log-out"></i></a>
      </li>
        ';
      }
          
			
      }
      ?>
    </ul>
  </div>
    </nav>

    <?php 
    $min = 1;
    $max = (int) readCount($conn)[0];
    $r = rand($min,$max);
    echo "<script>console.log('" ,$max ,"')</script>";
    $f = readFeladvany($conn,$r);
    ?>

<div class="kakukk">
  <div class="row ">
      <div class="col imgContainer text-center">
        <div class="imgParent">

          <img class="img-fluid" src=<?php echo $f[0]; ?> alt="">
        </div>
      </div>
      <div class="col imgContainer text-center">
        <div class="imgParent">
      <img class="img-fluid" src=<?php echo $f[1]; ?> alt="">
        </div>
      </div>
      <div class="col imgContainer text-center">
        <div class="imgParent">
      <img class="img-fluid" src=<?php echo $f[2]; ?> alt="">
        </div>
      </div>
      <div class="col imgContainer text-center">
        <div class="imgParent">
      <img class="img-fluid" src=<?php echo $f[3]; ?> alt="">
        </div>
      </div>
      <div class="col imgContainer text-center">
        <div class="imgParent">
      <img class="img-fluid" src=<?php echo $f[4]; ?> alt="">
        </div>
      </div>
	</div>
</div>
<form name="megold" method="POST" action="#">
        <select name="megold">
          <option value="0">válassz</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select><br>
        <input type="submit" value="Mehet">
    </form>
    
    <?php
    if(isset( $_POST["megold"])){
      if($_POST["megold"] == $f[5]){

        echo '<script>alert("Gratu!")</script>';
      }else{
        
        echo '<script>alert("nem jó!")</script>';
      }
    }
    if(!isset($_SESSION['id'])){
      
      header("Location: login.php");
    }
    
    ?>
</body>
</html>
