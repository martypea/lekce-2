<!doctype html>
<html lang="en">
  <head>
    <?php require "templates.php"; ?>
    <?php session_start();?> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <?php newHeader('Lekce 4');?>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <?php navigation('Lekce4'); ?>
    <main role="main" class="container">

      <div class="starter-template">
        <h1>Lekce 4 - Domácí úkoly</h1>
          
      </div>
<!-- .domaci ukol 2-->
    <div class = "container">
      <p><h2>
        Úkol 2 - Počítadlo
      </h2></p>
      <?php
      $pocitadlo = fopen('pocitadlo.txt','r');
      $pocet = explode(",",fgets($pocitadlo));
      fclose($pocitadlo);
      echo "Počet zobrazení této stránky: ";
      echo (int)$pocet[0]++;
      echo "<br>";
      if (!array_key_exists("unique",$_SESSION)){
        $_SESSION["unique"]=1;
        (int)$pocet[1]++;
      }
      echo "Počet unikatnich navstev: ";
      echo $pocet[1];
      $pocitadlo = fopen('pocitadlo.txt','w');  
      fwrite($pocitadlo,$pocet[0]);
      fwrite($pocitadlo,",");
      fwrite($pocitadlo,$pocet[1]);
      fclose($pocitadlo);
      var_dump($_SESSION);
      
      ?>
    </div>
<!-- /.domaci ukol 2-->
      
    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>