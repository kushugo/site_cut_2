<?php
require_once 'function.php';
$prices = [
    'First price' => 9,
    'Second price' => 25,
    'Prenium price' => 40
];

$title = "Tarifs";
$chooses [] = $Cprices;
$total = 0;

foreach (['price', 'choose'] as $name) {
    if(isset($_GET[$name])) {
        $liste = $nom . 's';
        $choix = $_GET[$name];
        foreach($choix as $value) {
            if(isset($$liste[$value])) {
                $chooses[] = $value;
                $total += $$liste[$value];
            
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  </head>

  <body>
			<!-- NAV_BAR   -->
        <nav class="navbar site-header navbar-expand-md navbar-dark bg-dark mb-4">
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
                    <form action="login.php">
                        <button class="btn btn-outline-success" type="submit" style="margin: 4px;">Connexion</button>
                    </form>
                    <form action="register.php">
                        <button class="btn btn-outline-success" type="submit">Inscription</button>
                    </form>
				</div>
			</div>
		</nav>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Les offres</h1>
      <p class="lead">Choisissez votre offre :</p>
    </div>

    <div class="container">
      <div class="card-group mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Gratuit</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">0 € <small class="text-muted">/ Mois</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Vous avez accès à :</li>
              <li>5 URL de stokables/mois</li>
              <li>Dashboard</li>
              <li>Activer / désactiver des liens cut</li>
              <li>.</li>
              <li>.</li>
              <li>.</li>
            </ul>
            <form action="register.php">
                <button class="btn btn-lg btn-block btn-primary" type="submit">Inscription</button>
            </form>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Formule Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">29 € <small class="text-muted">/ Mois</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li>Vous avez accès à :</li>
                <li>1.000 URL de stokables/1 mois</li>
                <li>Dashboard</li>
                <li>Analyse avancée</li>
                <li>Qr code</li>
                <li>Activer / désactiver des liens cut</li>
                <li>.</li>
            </ul>
            <form action="test.php">
                <button class="btn btn-lg btn-block btn-primary" type="submit">Inscription</button>
            </form>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Formule Entreprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">199€ <small class="text-muted">/ Mois</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li>Vous avez accès à :</li>
                <li>10.000 URL de stokables/1 mois</li>
                <li>Dashboard</li>
                <li>Analyse avancée</li>
                <li>Qr code</li>
                <li>Standar 24h/24 / 7j/7</li>
                <li>Activer / désactiver des liens cut</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
          </div>
        </div>
      </div>

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
