<?php

$show = false;

if ($_POST && isset($_POST['time']) && isset($_POST['damage']) && isset($_POST['armor'])) {
    //1.259-((waktu berlalu/2)*0.001)+((dmg dealt/armor lawan/3) *0.001)
    //

    $a = ((58 - $_POST['time']) / 2) * 0.001;
    $b = ($_POST['damage'] / $_POST['armor']);
    $c = ($b / 3) * 0.001;

    $x = (1.259 - $a) + $c;
    $show = true;
}

    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="/ba.php">
      <h1 class="h3 mb-3 font-weight-normal">Battle Assesment Calculator</h1>
      <?php if ($show) { ?>
  	<div class="card text-center bg-success text-white mb-4">
  		<div class="card-body h2">
  			Your BA : <?php echo number_format($x, 4); ?>
  		</div>
  	</div>
  <?php }?>
      <label for="inputSecs" class="sr-only">Clear Time</label>
      <input type="number" id="inputSecs" class="form-control mb-4" placeholder="Clear Time" name="time" required autofocus>
      <label for="inputDmg" class="sr-only">Total Damage</label>
      <input type="number" id="inputDmg" class="form-control mb-4" placeholder="Total Damage" name="damage" required>
      <label for="inputArmr" class="sr-only">Total Armor</label>
      <input type="number" id="inputArmr" class="form-control mb-4" placeholder="Total Damage" name="armor" required>
      <div class="p-3 text-center">
      <a href="ba.php" class="btn btn-lg btn-warning">Reset</a>
      <button class="btn btn-lg btn-primary" type="submit">Calculate</button>
  </div>
      <p class="mt-5 mb-3 text-muted">&copy; <?php echo date('Y'); ?></p>
    </form>
  </body>
</html>