<!-- /.container -->
</main>

<footer>
<hr>
<div class="row">
  <div class="col-md-4">
    <?php
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
    ajouter_vue();
    $vues = nombre_vues()
    ?> Il y a <?= $vues ?> visite<?php if ($vues < 1): ?>s<?php endif; ?> sur le site
  </div>
  <div class="col-md-4">
  <form action="newsletter.php" method="post" class='form-inline'>
    <div class="form-group">
      <input type="email" name="email" placeholder="Entrer votre email" required class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">S'incrire</button>
  </form>
  <div class="col-md-4">
    <h5>Navigation</h5>
    <ul>
      <?= nav_menu(); ?>
    </ul>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>

