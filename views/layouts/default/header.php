<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Static Framework - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo RESOURCES; ?>/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo RESOURCES; ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo APP_URL; ?>" class="brand-logo">iStatic</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Docs</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo APP_URL; ?>/contact">Contact</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Docs</a></li>
        <li><a href="<?php echo APP_URL; ?>/contact">Contact</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>