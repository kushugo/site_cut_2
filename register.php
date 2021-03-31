<!DOCTYPE html>
<html>
    <head>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">
                                        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
<?php
require('config.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
            // Retrieve username & remove backslashes added by the form
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
            // Recover email & delete backslashes 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
            // Recover mdp & remove backslashes add form
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
            // SQL query + encrypted mdp
    $query = "INSERT into `users` (username, email, password)
              VALUES ('$username', '$email', '".hash('sha256', $password)."')";
            // Run bdd request
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
            <h3>Vous êtes inscrit avec succès.</h3>
            <p>Cliquez ici pour vous <a href='login.php'>déconnecter</a></p>
			</div>";      
    }
}else{
?>

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
                    <a class="nav-link" href="why_him.php">Why</a>
                </li>      
                <li class="nav-item">
                    <a class="nav-link" href="tarifs.php">Tarifs</a>
                </li>      
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacts</a>
                </li>      
                <li class="nav-item">
                    <a class="nav-link" href="newsletter.php">Newsletter</a>
                </li> 
            </ul>
    </div>
</nav>

<ul>
    <form class="box text-center" action="" method="post">
        <h1 class="box-title">S'inscrire</h1>
        <div class="row justify-content-center">
            <div class="col-3">
                <input type="text" class="form-control text-center" name="username" placeholder="Nom d'utilisateur" required />
                <input type="text" class="form-control text-center" name="email" placeholder="Email" required />
                <input type="password" class="form-control text-center" name="password" placeholder="Mot de passe" required />
                <input type="submit" name="submit" value="S'inscrire" class="btn btn-primary" />
            </div>
        <p class="box-register"> Déjà inscrit? <a href="login.php">Cliquer ici</a></p>
        </div>
    </form>
</ul>
    
<?php } ?>
</body>
</html>