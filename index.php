<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>Starter Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="starter-template.css" rel="stylesheet">

  <!--ukol name-->
  <?php 
    session_start();
  
    $projectName = "lekce-3";
    $pageName = "Home";
  
    $number = 5;
    $first = 1;
 
    $soucet = 0;
    $soucin = 1;
    $a = $first;
    while ($a <= $number){
      $soucet += $a;
      $soucin *= $a;
      $a++;
    } 
    ?>

  <?php 
    $pole = [
            "čeština"=>3, 
            "matematika"=>2, 
            "dějepis"=>4, 
            "zeměpis" =>1, 
            "filosofie"=>2,
            ]; 
    ?>
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#"><?php echo $projectName." - ".$pageName; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/lekce-2/index_old.php">Stará lekce</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <main role="main" class="container">

    <div class="starter-template">
      <h1>
<!--1. příklad-->
        <?php
          $name = 'Martin';
       
          if ($name == 'Martin'){
            echo "Nazdar $name";
          }
          else{
            echo "Dobrý den $name";
          }
        echo '<br>';
        
        if (array_key_exists('accessed',$_SESSION)){
          if (array_key_exists('name',$_POST)){
            echo "Čau ".$_POST['name'];
          } else { echo "Musíš zadat jméno!";
          }
            
          
        } else {
          echo "Tebe neznám";
          $_SESSION['accessed']=null;
        }
        
        echo '<br>';
        
        if (array_key_exists('numberOfReloads',$_SESSION)){
          $_SESSION['numberOfReloads'] ++;
        } else {
          $_SESSION['numberOfReloads']=1;
        }
        echo 'Počet zobrazení stránky:';
        echo $_SESSION['numberOfReloads'];
        
        ?>
      </h1>
      <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>
<!--2. příklad-->
    <div class="container">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Číslo</th>
            <th scope="col">Součet</th>
            <th scope="col">Součin</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <?= $number;?>
            </td>
            <td>
              <?= $soucet;?>
            </td>
            <td>
              <?= $soucin;?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

<!--příklad pole-->
    <div class="container">
      <h5>
        Známky:
      </h5>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Předmět</th>
            <th scope="col">Známka</th> 
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($pole as $predmet => $znamka){
          ?>
            <tr>
            <td><?=$predmet?></td>
            <td><?=$znamka?></td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>

<div class="container">
     
    <form action="/lekce-2/index.php" method="POST">
      <input type="text" name="name">
      <input type="submit" value="odeslat">
    </form>
</div>
    
  </main>
  <!-- /.container -->

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')
  </script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>