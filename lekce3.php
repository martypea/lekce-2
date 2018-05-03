<!doctype html>
<?php setcookie("jmeno",$_POST['jmeno'],time() + (86400 * 30), "/");?>
<html lang="en">

<head>
  <?php require "templates.php"; ?>
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
<?php navigation('Lekce3'); ?>


  <main role="main" class="container">

    <div class="starter-template">
      <h1>
<!--1. příklad-->
        <?php
  /*      $name = 'Martin';
     
          if ($name == 'Martin'){
            echo "Nazdar $name";
          }
          else{
            echo "Dobrý den $name";
          }
        echo '<br>';
   */     
        if (array_key_exists('accessed',$_SESSION)){
          if (array_key_exists('name',$_POST) && $_POST['name']!=""){
            echo "Čau ".$_POST['name'];
          } else { echo "Musíš zadat jméno!";
          }   
        } else {
          echo "Tebe neznám";
          $_SESSION['accessed']=null;
        }      
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
<!-- domaci ukol 1-->
    <div class="container">
      <p><h2>
      Úkol 1 - Fibonacciho posloupnost
      </h2></p>
      <table class="table">
     <?php 
      $an = 0;
      $an1 = 1;
      $an2 = $an + $an1;
      $maxFibonacci = 200;
     ?>
      <tr><td><?=$an;?></td></tr>
      <tr><td><?=$an1;?></td></tr>
     <?php
      while (($an + $an1) <= $maxFibonacci){
        $an2 = $an + $an1;
        $an = $an1;
        $an1 = $an2;
      ?>
        <tr><td><?=$an2;?></td></tr>
      <?php } ?>
      </table>
    </div>
 <!-- /.domaci ukol 1--> 
 <!-- .domaci ukol 2-->
  <div class = "container">
    <p><h2>
      Úkol 2 - Pole studentů
      </h2></p>
    <?php
    $students = ["jan",
                 "peTr",
                 "milOš",
                 "hana",
                 "jANa"];
    ?>
    <table class="table">
        <thead>
          <tr><th scope="col">Pořadí</th><th scope="col">Jméno</th> </tr>
        </thead>
        <tbody>
          <?php
          foreach ($students as $poradi => $name){
          ?>  
          <tr><td><?= ($poradi + 1).".";?></td><td><?= ucfirst(strtolower($name));?></td></tr>
          <?php } ?>
        </tbody>
    </table>
  </div>  
<!-- /.domaci ukol 2-->
<!-- .domaci ukol 3-->
  <div class = "container">
    <p><h2>
      Úkol 3 - Známky
      </h2></p>
    <?php
    $grades = ["Jan"=>['matematika'=>2,'fyzika'=>2],
               "Petr"=>['matematika'=>1,'fyzika'=>3],
               "Miloš"=>['management'=>2,'angličtina'=>4, 'němčina'=>1],
               "Hana"=>['čeština'=>4,'dějepis'=>1],
               "Jana"=>['matematika'=>2,'fyzika'=>2]];
    ?>
    <table class="table">
       <?php
       foreach ($grades as $name => $gradesArray){
       ?>
          <thead>
            <tr><th scope="col"><h3><?=$name;?></h3></th><th scope="col"></th></tr>
          </thead>
          <tbody>
          <?php foreach ($gradesArray as $subject => $grade){
            ?>
          <tr><td scope="col"><?=$subject ;?></td><td scope="col"><?=$grade;?></td></tr>
          <?php } ?>
        </tbody>
      <?php }?>
    </table>
  </div>  
<!-- /.domaci ukol 3-->
  
<!-- .domaci ukol 4-->
  <div class = "container">
    <p><h2>
      Úkol 4 - Násobilka
      </h2></p>
    <?php
    $h = [1,2,3,4,5,6,7,8,9,10,11];
    $v = [1,2,3,4,5,6,7,8,9];
    ?>
    <table class="table">
          <thead>
            <tr>
              <th scope="col"></th>
              <?php
              foreach ($h as $hValue){
              ?>
              <th scope="col"><?=$hValue;?></th>
              <?php } ?>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($v as $vValue){
            ?>
            <tr>
              <th scope="col"><?= $vValue ?></th>
            <?php foreach ($h as $hValue){
            ?>
              <td scope="col"><?= ($hValue * $vValue);?></td>
            <?php }?>  
            </tr>
            <?php }?>
          </tbody>
    </table>
  </div>  
<!-- /.domaci ukol 4-->
<!-- .domaci ukol 5-->
    <div class = "container">
      <p><h2>
        Úkol 5 - No. of reloads
      </h2></p>
      <?php
       if (array_key_exists('numberOfReloads',$_SESSION)){
          $_SESSION['numberOfReloads'] ++;
        } else {
          $_SESSION['numberOfReloads']=1;
        }
        echo 'Počet zobrazení stránky: ';
        echo $_SESSION['numberOfReloads'];
      ?>
    </div>
<!-- /.domaci ukol 5-->
<!-- .domaci ukol 6-->
    <div class = "container">
      <p><h2>
        Úkol 6
      </h2></p>
      <?php
       if (!array_key_exists('visited',$_SESSION)){
          echo "Jsi zde poprvé!";
          $_SESSION['visited']=1;
        } elseif ($_SESSION['visited']%2==0){
         echo "Vítej zpět" ;
         $_SESSION['visited']++; 
        } elseif ($_SESSION['visited']%2==1){
          echo 'Wellcome back!';
          $_SESSION['visited']++;
       }
      ?>
    </div>
<!-- /.domaci ukol 6-->
<!-- domaci ukol COOKIE-->
<div class = "container">
      <p><h2>
        Úkol 7 -COOKIE
      </h2></p>
<div class='container'>
  <form action="/lekce-2/index.php" method="POST">
  <div class="form-group">
    <label for="exampleInputText1">Name</label>
    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="name" placeholder="Enter name" name="jmeno">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <?php
    
  if(isset($_COOKIE["jmeno"] )){
    echo "Ahoj ";
    echo $_COOKIE["jmeno"].", ";
    
  } else {
    echo "Něco je špatně";
  }
  ?>
</div>
<!-- /domaci ukol COOKIE-->
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