<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probléma Jelentés</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/mainstyle.css"/>
</head>
<body>
<?php
    require_once 'connect.php';
    require_once 'crud/Create.php';
    require_once 'crud/Read.php';
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
<div class="login">
<form name="report" method="POST" action="#">
        Felhasználónév: <br><input type="text" name="name"><br>
        Email: <br><input type="email" name="email"><br>
        Milyen problémával találkozott? <br>
        <select name="problem">
            <option value="need tutorial">Nem tudok kakukktojást keresni!</option>
            <option value="tuljatekos cica">A cicám nem hagy játszani!</option>
            <option value="Ugyes cica">A cicám jobban keresi a kakukktojást mint én!</option>
            <option value="No kakukktojas">Nem látok kakukktojást!</option>
            <option value="vicces vagyok">Én csak csirke tojást látok!</option>
            <option value="Troll">Egy hal van kádamban!</option>
            <option value="Teszt">Csak ki akartam porbálni működik-e.</option>
            <option value="Egyéb">Egyéb</option>
        </select>
        <br>
        Kérem írja le hogy találkozott a problémával. (max 6000 karakter): 
        <br>
        <textarea name="bovebb" cols="45" rows="6" style="resize: none;" maxlength="6000"></textarea><br>
        <input type="submit" value="Küldés">
</form>
<?php
        if(isset($_POST["name"]) && isset($_POST["email"]) && $_POST["email"] != null && $_POST["name"] != null && isset($_POST["email"]) && $_POST["email"] !=null && !empty($_POST["problem"])){
            reportIssue($conn,$_POST["name"],$_POST["email"],$_POST["problem"],$_POST["bovebb"]);
            echo "A probléma jelentés elküldve!";
        }
    ?>
</div>
</body>
</html>
