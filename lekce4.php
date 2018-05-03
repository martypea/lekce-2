<!doctype html>
<html lang="en">

<head>
  <?php require "functions.php"; ?>
  <?php require "templates.php"; ?>
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
      <h1>Lekce 4</h1>
    </div>
    <!-- ukol1 -->
    <div class="container">
      <div class="row">
        <?php 
      $file = fopen ("barvy.txt", "r");
        $pole = [];
        while (!feof($file)){
          $pole[] = fgets($file);
        }
        //var_dump($pole);
        foreach($pole as $item){
        ?>
        <div class="col-4">
          <?= $item;?>
        </div>
        <?php } 
        fclose($file);
        ?>
      </div>
    </div>
    <!-- /ukol1 -->
    <!-- ukol2 -->

    <table class="table">
      <thead>
        <th scope="col-3">Name</th>
        <th scope="col-3">Gender</th>
        <th scope="col-3">Abilities</th>
      </thead>
      <tbody>
        <?php
        $handle = fopen ("people.txt","r");
        while (!feof($handle)){
          $person = explode(",",fgets($handle));
          ?>
          <tr>
            <td scope="col-3">
              <?= $person[0];?>
            </td>
            <td scope="col-3">
              <?= $person[1];?>
            </td>
            <td scope="col-3">
              <?= $person[2];?>
            </td>
          </tr>
          <?php }
        fclose($handle);
        ?>
      </tbody>
    </table>
    <!--/ukol2-->

    <!-- ukol3-->
    
      <div>
        <h3>
          Ukol 3
        </h3>
      </div>
      <div>
        <form action="" methot=GET>
          <div class="form-group" scope="col-3">
            <label for="exampleInputEmail1">Zadej 1. číslo</label>
            <input type="number" class="form-control" name="prvniCislo" 
                   <?php 
                   echo 'placeholder="'.$_GET['prvniCislo'].'"';
                   ?>
                   >
          </div>
          <div class="form-group" scope="col-3">
            <label for="exampleInputEmail1">Zadej 2. číslo</label>
            <input type="number" class="form-control" name="druheCislo" 
                   <?php 
                   echo 'placeholder="'.$_GET['druheCislo'].'"';
                   ?>
                   >
          </div>
          <button type="submit" >Submit</button>
        </form>
        <?php
        try{
        if (is_int($_GET['prvniCislo']) && is_int($_GET['druheCislo'])){
          if (array_key_exists('prvniCislo',$_GET) && array_key_exists('druheCislo',$_GET)){
            $bigger = getBigger($_GET['prvniCislo'],$_GET['druheCislo']);
            var_dump($_GET['prvniCislo']);
            echo "<div scope='col-3'>Větší číslo je ".$bigger."</div>";
          }
        } else {
          throw new Exception('Nezadal jsi čísla');
        }
        } catch (Exception $exception){
            echo $exception->getMessage();
        }
        ?>
    </div>
    <!--/ukol3-->

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