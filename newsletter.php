<?php 
	// Initialize the session
	session_start();
?>
<?php
$error = null;
$success = null;
$email = null; 
if (!empty($_POST['email'])) {
  $email = $_POST['email'];
  if (filter_var($email, FILTER_VALIDATE_EMAIL)){
      $file = __DIR__ . DIRECTORY_SEPARATOR . 'email' . DIRECTORY_SEPARATOR . date('Y-m-d');
      file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
      $success = "Votre email a bien été enregistré";
      $email = null;
  } else {
      $error = "Email invalide";
  }
}
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Bootstrap core CSS -->
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
                    <form action="http://localhost:8888/site_cut/login.php">
              <button class="btn btn-outline-success" type="submit" style="margin: 4px;">Connexion</button>
            </form>
            <form action="http://localhost:8888/site_cut/register.php">
              <button class="btn btn-outline-success" type="submit">Inscription</button>
            </form>
				</div>
			</div>
		</nav>
	<main>
  <div>
  <div class="row" style="padding-left: calc(var(--bs-gutter-x));" >
    <div class="col-md-8">
      <h1>Inscrivez-vous à la newsletter.</h1>

      <p>
        Avantages de la newsletter
      </p>

      <?php if ($error): ?>
        <div class="alert alert-danger">
          <?= $error ?>
        </div>
      <?php endif; ?>

      <?php if ($success): ?>
        <div class="alert alert-success">
          <?= $success ?>
        </div>
      <?php endif; ?>


      <form action="newsletter.php" method="post" class='form-inline'>
        <div class="form-group">
          <input type="email" name="email" placeholder="Entrer votre email" required class="form-control" value="<?= htmlentities($email) ?>">
        </div>
        <button type="submit" class="btn btn-primary">S'incrire</button>
      </form>
    </div>
  </div>
</div>
    </main>


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
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
	</body>
</html>



