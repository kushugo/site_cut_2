<?php 
session_start();
$title = "Contact";
$nav = "contact";
require_once 'config.php';
require_once 'function.php';
date_default_timezone_set('Europe/Paris');
$heure = (int)($_GET['heure'] ?? date('G'));
$jour = (int)($_GET['jour'] ?? date('N') - 1);
$creneaux = CRENEAUX[$jour];
$ouvert = in_creneaux($heure, $creneaux);
// shortened term method for writing a condition
$color = $ouvert ? 'green' : 'red';
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
                    <form action="login.php">
              <button class="btn btn-outline-success" type="submit" style="margin: 4px;">Connexion</button>
            </form>
            <form action="register.php">
              <button class="btn btn-outline-success" type="submit">Inscription</button>
            </form>
				</div>
			</div>
		</nav>
	<main>
    <div class="row">
    <div class="row d-flex justify-content-center" style="padding-left: calc(var(--bs-gutter-x));" >
    <div class="col-md-8">
    <h2>Nous contacter</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, sint magnam nobis ad provident omnis quibusdam? Exercitationem maiores voluptates at incidunt excepturi, laborum quo hic modi, voluptate doloremque molestias vitae?</p>
    </div>
        <div class="col-md-3">
            <h2>Horaire d'ouverture</h2>

            <?php if ($ouvert): ?>
                <div class="alert alert-success">
                    Le service technique sera fermé le : 
                </div>
            <!-- otherwise display the store is closed -->
            <?php else: ?>
                <div class="alert alert-danger">
                    Le service technique sera ouvert le : 
                </div>
            <?php endif ?>

            <form action="" method="GET">
                <div class="form-group">
                    <?= select('jour', $jour, JOURS); ?>
                </div>
                <div class="form-group">
                        <input class="form-control" type="number" name="heure" value="<?= $heure ?>">
                </div>
                <button class="btn btn-primary" type="submit">Regarder si service est disponible</button>
            </form>

            <ul>
                <?php foreach(JOURS as $k => $jour): ?>
                    <li <?php if ($k +1 === (int)date('N')): ?> style="color:<?= $color; ?>" <?php endif ?>>
                        <strong><?= $jour ?></strong> :
                        <?= creneaux_html(CRENEAUX[$k]); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
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
