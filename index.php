<!doctype html>
<html lang="en">

<head>
  <?php
    $text = 'Nejlepší školení je od Programators';
    $boolean = false;
    $text1 = "Ahoj";
    $text2 = "pane";
    $cislo = 5;
    $cislo += 5;
    $pole1 = [2,".",[1,3.5,null],"barva"=>"cerna"];
    $pole2 = ["name"=>"Martin","surname"=>"Pavlas"];
    $pole3= ["zavodnici"=>["Eva","Adam","Jakub"],"poradi"=>[2,3,1]];
    $projectName = "lekce-2";
      $pageName = "Home";
    $counter = 586;
    $numbers = [0,1,1,2,3,5,8];
  //ukol2
  $a = 67;
  $b = 6;
  $area = $a * $b;
  
  //ukol3
  $stranaA = 6;
  $stranaB = 6;
  $uhelBeta = 60;
  $uhelAlfa = rad2deg (asin ( ($stranaA / $stranaB) * sin(deg2rad($uhelBeta))));
  $stranaC = ($stranaA * cos(deg2rad($uhelBeta))) + ($stranaB * cos(deg2rad($uhelAlfa)));
  $uhelGamma = 180 - ($uhelAlfa + $uhelBeta);
  $obvod = $stranaA + $stranaB + $stranaC;
  $obsah = 0.5 * ($stranaA * sin(deg2rad($uhelBeta))) * $stranaC; 
    ?>

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
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <!--ukol1-->
    <a class="navbar-brand" href="#">
      <?php echo $projectName." - ".$pageName; ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
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
  <!--container-->
  <main role="main" class="container">
    <div class="starter-template">
      <h1>
        <?php
          print_r($text);
          echo '<br>';
          var_dump($boolean);
          ?>
      </h1>
      <div>
        <?php echo $text1." ".$text2;?>!<br>
        <?php echo "Spravne cislo je ".$cislo;?><br>
        <?php var_dump($pole1);?><br>
        <?php echo $pole1[0];?><br>
        <h3>
          <?php echo $text1." ".$pole2["name"]." ".$pole2["surname"]." !";?><br>
        </h3>
      </div>
      <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>
    <div>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col"></th>
            <th scope="col">Závodník</th>
            <th scope="col">Pořadí</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <?php echo $pole3["zavodnici"][0]; ?>
            </td>
            <td>
              <?php echo $pole3["poradi"][0]; ?>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <?php echo $pole3["zavodnici"][1]; ?>
            </td>
            <td>
              <?php echo $pole3["poradi"][1]; ?>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>
              <?php echo $pole3["zavodnici"][2]; ?>
            </td>
            <td>
              <?php echo $pole3["poradi"][2]; ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--ukol2-->
    <div class="container">
      <div class="row">
        <div class="col-1">
          <h5>Counter:</h5>
        </div>
        <div class="col">
          <?php echo $counter; ?>
        </div>
      </div>
    </div>
    <!--ukol3-->
    <div class="container">
      <p>
        <h5>Numbers:</h5>
        <?php var_dump ($numbers); ?>
      </p>
    </div>
    <!--domaci ukol2-->
    <div class="container">
      <p>Obdelník o stranách <b>a:</b>
        <?php echo $a;?>, <b>b:</b>
        <?php echo $b;?> má obsah
        <?php echo $area;?>
      </p>
    </div>
    <!--domaci ukol3-->
    <div class="container">
      <p class="h3">Trojúhelník podle věty ssu</p>
      <p class="h5">Vstupní parametry</p>
      <table class="table">
        <thead class="thead-dark">
          <tr class="row">
            <th class="col-1" scope="col">strana a</th>
            <th class="col-1" scope="col">strana b</th>
            <th class="col-1" scope="col">uhel &beta;</th>
          </tr>
        </thead>
        <tbody>
          <tr class="row">
            <td class="col-1">
              <?php echo round($stranaA,2); ?>
            </td>
            <td class="col-1">
              <?php echo round($stranaB,2); ?>
            </td>
            <td class="col-1">
              <?php echo round($uhelBeta,2); ?>
            </td>
          </tr>
        </tbody>
      </table>
      <p class="h5">Vlastnosti trojúhelníku</p>
      <table class="table">
        <thead class="thead-light">
          <tr class="row">
            <th class="col-1" scope="col">strana a</th>
            <th class="col-1" scope="col">strana b</th>
            <th class="col-1" scope="col">strana c</th>
            <th class="col-1" scope="col">uhel &alpha;</th>
            <th class="col-1" scope="col">uhel &beta;</th>
            <th class="col-1" scope="col">uhel &gamma;</th>
            <th class="col-1" scope="col">obvod</th>
            <th class="col-1" scope="col">obsah</th>
          </tr>
        </thead>
        <tbody>
          <tr class="row">
            <td class="col-1">
              <?php echo round($stranaA,2); ?>
            </td>
            <td class="col-1">
              <?php echo round($stranaB,2); ?>
            </td>
            <td class="col-1">
              <?php echo round($stranaC,2); ?>
            </td>
            <td class="col-1">
              <?php echo round($uhelAlfa,2); ?>
            </td>
            <td class="col-1">
              <?php echo round($uhelBeta,2); ?>
            </td>
            <td class="col-1">
              <?php echo round($uhelGamma,2); ?>
            </td>
            <td class="col-1">
              <?php echo round($obvod,2); ?>
            </td>
            <td class="col-1">
              <?php echo round($obsah,2); ?>
            </td>
          </tr>
        </tbody>
      </table>
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