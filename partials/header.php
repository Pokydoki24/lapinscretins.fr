<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.php">

      <img id="logo" src="img/cretin.jpg" alt="logo lapin cretin"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?= ( $page === 'accueil') ? "active" : "" ?>" ><a href="index.php">Accueil</a></li>
        <li class="<?= ( $page === 'bd') ? "active" : "" ?>"><a href="index.php?page=bd">BD</a></li>
        <li class="<?= ( $page === 'dvd') ? "active" : "" ?>"><a href="index.php?page=dvd">DVD</a></li>
        <li class="<?= ( $page === 'jeux') ? "active" : "" ?>"><a href="index.php?page=jeux">Jeux</a></li>
        <li class="<?= ( $page === 'shop') ? "active" : "" ?>"><a href="index.php?page=shop">Shop</a></li>
        <li class="<?= ( $page === 'inscription') ? "active" : "" ?>" id="btnInscription"><a href="index.php?page=inscription">Inscription</a></li>
        <?php if(!isset($_SESSION['utilisateur'])){ ?>
        <li class="<?= ( $page === 'connexion') ? "active" : "" ?>" id="btnConnexion"><a href="index.php?page=connexion">Connexion</a></li>
        <?php }else{ ?>
        <li class="<?= ( $page === 'connexion') ? "active" : "" ?>" id="btnDeconnexion"><a href="index.php?page=connexion">Deconnexion</a></li>
        <?php } ?>
      
      </ul>
      <!-- <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Recherche....">
        </div>
        <button type="submit" class="btn btn-default">Rechercher</button>
      </form> -->
    </div>
  </div>
</nav>