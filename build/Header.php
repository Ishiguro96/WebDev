<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<header>

  <?php include('Logo.php'); ?>

  <div id="container-12">
    <nav class="navbar navbar-expand-xl navbar-dark justify-content-center" id="navbar" data-toggle="sticky-onscroll">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-align-justify"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="Index.php#logo"><i class="fas fa-home fa-2x"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="counter.php?type=cs#logo">Counter-Strike</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lol_main.php?type=lol#logo">League of Legends</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dota.php?type=dota#logo">Dota 2</a>
        </li>
        </ul>

        <?php include('Login_form.php'); ?>

      </div>
    </nav>
  </div>
</header>
