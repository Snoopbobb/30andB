<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bob Tabor | Junior Developer</title>
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>img/favicon.png">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,800italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/main.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?php echo BASE_URL; ?>js/my_javascript.js"></script>
  </head>
  <body>
    <header>
      <a href="<?php echo BASE_URL; ?>" id="logo">
        <h1>Bob Tabor</h1>
        <h2>Junior Web Developer and Designer | Scottsdale, AZ</h2>
      </a>
      <nav>
        <ul>
          <li><a href="<?php echo BASE_URL; ?>" class="<?php if ($section == "portfolio") { echo "selected"; } ?>">Portfolio</a></li>
          <li><a href="<?php echo BASE_URL; ?>about" class="<?php if ($section == "about") { echo "selected"; } ?>">About</a></li>
          <li><a href="<?php echo BASE_URL; ?>contact" class="<?php if ($section == "contact") { echo "selected"; } ?>">Contact</a></li>
        </ul>
      </nav>
    </header>
    <div id="wrapper">
