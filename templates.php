<?php
function newHeader($title){
  echo "<title>".$title."</title>";
}

function navigation($active){
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Programators</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if ($active=='Lekce2'){echo 'active';}?>">
            <a class="nav-link" href="/lekce-2/index.php">Lekce2</a>
          </li>
          <li class="nav-item dropdown <?php if ($active=='Lekce3'){echo 'active';}?>">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lekce3</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="/lekce-2/lekce3.php">Hodina</a>
            </div>
          </li>
          <li class="nav-item dropdown <?php if ($active=='Lekce4'){echo 'active';}?>">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lekce4</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item active" href="/lekce-2/lekce4.php">Hodina</a>
              <a class="dropdown-item" href="/lekce-2//lekce4-domaci-ukoly.php">Domácí úkoly</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
<?php
}
?>