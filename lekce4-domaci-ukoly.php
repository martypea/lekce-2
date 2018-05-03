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

    <?php newHeader('Lekce 4 - Domácí úkoly');?>

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
      ?>
    </div>
<!-- /.domaci ukol 2-->
<!-- domaci ukol tezky-->
    
    <div class = "container">
      <p><h2>
        Úkol těžký
      </h2></p>
    
  <form action="/lekce-2/lekce4-domaci-ukoly.php" method="POST">
  <div class="form-group">
    <label for="exampleInputText1">Name</label>
    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="name" placeholder="Enter name" name="nameLog">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
      <?php
    
    if (array_key_exists('nameLog',$_POST) && $_POST['nameLog']!=null){
      echo "Čau ".$_POST['nameLog'].", tvoje jméno i s časem bylo zalogováno!";
      $log = fopen ("log.txt","a");
      if (file_get_contents("log.txt")!=''){fwrite($log,PHP_EOL);}
      fwrite($log,$_POST['nameLog']);
      fwrite($log,",");
      fwrite($log,date('j.n.Y H:i:s'));
      fclose($log);
          } else { echo "Musíš zadat jméno!";
          }   
    ?>
    <br/>
    <br/>
    <h5>
      Seznam přístupů:
    </h5>
    <table class="table">
      <thead>
        <th scope="col-3">Jméno</th>
        <th scope="col-3">Čas</th>
      </thead>
      <tbody>
        <?php
        $log = fopen ("log.txt","r");
        while (!feof($log)){
          $item = explode(",",fgets($log));
          ?>
          <tr>
            <td scope="col-3">
              <?=$item[0];?>
            </td>
            <td scope="col-3">
              <?=$item[1];?>
            </td>
          </tr>
          <?php }
        fclose($log);
        ?>
      </tbody>
    </table>
   
    </div>
    
    <!-- /domaci ukol tezky-->
      
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