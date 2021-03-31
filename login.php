<!DOCTYPE html>
<html>
<head>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">

	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');
session_start();
?>
<body> 

<!-- NAV_BAR   -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid"> 
        <a class="navbar-brand" href="index.php">Short Link</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-md-0">
                <li class="nav-item">
        <a class="nav-link" href="Why_him.php">Why</a>
    </li>      <li class="nav-item">
        <a class="nav-link" href="tarifs.php">Tarifs</a>
    </li>      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contacts</a>
    </li>      <li class="nav-item">
        <a class="nav-link" href="newsletter.php">Newsletter</a>
    </li>          
        </ul> 
            <form action="http://localhost:8888/site_cut/login.php">
            <button class="btn btn-outline-success" type="submit" style="margin: 4px;">Connexion</button>
            </form>
            <form action="http://localhost:8888/site_cut/register.php">
            <button class="btn btn-outline-success" type="submit">Inscription</button>
            </form>
        </div>
    </div>
</nav>

<?php
if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: index3.php");
	}else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
?>

<ul>
    <form class="box text-center" action="" method="post" name="login">
        <h1 class="box-title">Connexion</h1>
        <div class="row justify-content-center">
  <div class="col-3">
  <input type="text" class="w-auto form-control text-center" name="username" placeholder="Nom d'utilisateur">
        <input type="password" class="w-auto form-control text-center" name="password" placeholder="Mot de passe">
        <input type="submit" value="Connexion " name="submit" class="btn btn-primary">

  </div>

        <p class="box-register">Êtes-vous nouveau ? <a href="register.php">S'inscrire</a></p>
    <?php if (! empty($message)) { ?>
        <p class="errorMessage"><?php echo $message; ?></p>
    </form>
</ul>

<?php } ?>

<footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Groupe features</a></li>
              <li><a class="text-muted" href="#">Autres</a></li>
              <li><a class="text-muted" href="#">Dernières minutes</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Ressources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Ressources</a></li>
              <li><a class="text-muted" href="#">Bootstrap</a></li>
              <li><a class="text-muted" href="#">Autres ressources</a></li>
              <li><a class="text-muted" href="#">Ressources github</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Equipe</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="footer/groupe.php">Notre groupe</a></li>
              <li><a class="text-muted" href="#">Répartition tâches</a></li>
              <li><a class="text-muted" href="#">Merci</a></li>
            </ul>
          </div>
        </div>
      </footer>
</body>
</html>