<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/mainstyle.css">
    <title>Kiscica projectmunka!</title>
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
      ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="wr">
<div class="desc">
	<div class="p-3 mb-2 bg-light text-dark">
		Ez webhely egy már meglévő webhelyet fog bővíteni. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		Excepteur sint occaecat cupidatat non proident.
		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
		(A "Cicák" (bal fent) felíratra kattintva bármikor vissza jöhetsz ide!)
		<h5>Készítette: A Kiscica csapat</h5>
	</div>
</div>

<div class="cat">
	<img src="mainkepek/cat1.jpg" class="img-fluid img-thumbnail" alt="mainkepek/cat1.jpg">
</div>
</div>


<div class="mainlogin">
<form name="login" method="POST" action="#">
        <p>Felhasználónév:</p>
        <input type="text" name="user" id="user"><br>
        <p>Jelszó:</p> <input type="password" name="password" id="passwd"><br><br>
        <input type="submit" value="Bejelentkezés">
        <br>
        <a href="register.php" id="reg">Nincs még fiókom. :c</a>
    </form>
</div>
<div class="hatar">
</div>

<div class="lorem">
<h2>Lorem Ipsum?</h2>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>



<?php
    if(isset($_POST["user"]) && isset($_POST["password"]) && $_POST["password"] != null && $_POST["user"] != null){
        $log = logUser($conn, $_POST["user"], md5($_POST["password"]));
        if($log != null){
            echo "Sikeres bejelentkezés!<br>";
            echo $log[0], " ", $log[1];
            $_SESSION["user"] = $log[1];
            $_SESSION["id"] = $log[0];
            header("Location: kakukk.php");
        }
        else{
            echo "Sikertelen bejelentkezés!<br>";
        }
    } 
 ?>


  </body>
</html>
