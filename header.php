<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function.php';
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.80.0">


    <title>
      <?php if (isset($title)):?>
       <?= $title ?> 
      <?php else: ?>
        Short Cut
      <?php endif ?>
    </title>


    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>

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
            <?= nav_menu('nav-link') ?>
          
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