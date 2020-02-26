<!doctype html>
<html lang="fr">
<head>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('favicon/apple-icon-57x57.png')); ?>">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(asset('favicon/apple-icon-60x60.png')); ?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('favicon/apple-icon-72x72.png')); ?>">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('favicon/apple-icon-76x76.png')); ?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('favicon/apple-icon-114x114.png')); ?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('favicon/apple-icon-120x120.png')); ?>">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('favicon/apple-icon-144x144.png')); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('favicon/apple-icon-152x152.png')); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('favicon/apple-icon-180x180.png')); ?>">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo e(asset('favicon/android-icon-192x192.png')); ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('favicon/favicon-32x32.png')); ?>">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('favicon/favicon-96x96.png')); ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('favicon/favicon-16x16.png')); ?>">

<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="icon" href="favicon.ico" />
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title><?php echo $__env->yieldContent('titre'); ?></title>

   <!-- Bootstrap core CSS -->
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

<div class="content-hide">
  
  <nav class="navbar">
    <div class="logo">
      <img class="logo-titre" src="<?php echo e(asset('images/logoBlanc.png')); ?>">
    </div>
      
      <div class="sitenavigation">
        <span class="menu-icon">
          <a href="#" class="menu example5"><span></span></a>
          <div id="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </span>

      <ul>
        <li class="nav-dropdown"><a href="#">Accueil</a>
          <div class="navbar-dropdown">
            <a href="#">Men's</a>
          </div>
        </li>

        <li class="nav-dropdown"><a href="#">Vêtements</a>
          <div class="navbar-dropdown">
            <a href="#">Men's</a>
          </div>
        </li>

        <li class="nav-dropdown"><a href="#">Chaussures</a>
          <div class="navbar-dropdown">
            <a href="#">Men's</a>
          </div>
        </li>

        <li class="nav-dropdown"><a href="#">Accessoires</a>
          <div class="navbar-dropdown">
            <a href="#">Women's</a>
          </div>
        </li>

        <li><a href="#">Collections</a>
          <div class="navbar-dropdown">
            <a href="#">Collec's</a>
          </div>
        </li>

        <li><a href="#">Promotions</a>
          <div class="navbar-dropdown">
            <a href="#">Collec's</a>
          </div>
        </li>

      </ul>
    </div>

    <div class="sign">
      <a href="/login.php">panier</a>
    </div>

  </nav>
</div>


    <!--- Container de la page complete --->
     <main role="main" class="">
      <div class="starter-template">
           <?php echo $__env->yieldContent('contenu'); ?>
      </div>
    </main>


   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/navbar.css')); ?>">

  <script type="text/javascript" src="<?php echo e(URL::to('js/navbar.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\laragon\www\Epsilon\resources\views/templates/mainTemplate.blade.php ENDPATH**/ ?>