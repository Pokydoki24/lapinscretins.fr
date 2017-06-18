<?php
  $where_statement = "";
  if(isset($_GET["console_id"])){
    $where_statement = " AND `jeux_console`.`id_console` = :id_console";
  }

  $query = $dbh->prepare("SELECT `jeux`.*, `jeux_console`.`photo` FROM `jeux`, `jeux_console` WHERE `jeux`.`id` = `jeux_console`.`id_jeux`".$where_statement." GROUP BY `jeux`.`id`");
  if(isset($_GET["console_id"])){
    $query->bindParam(":id_console", $_GET["console_id"]);
  }
  $query->execute();

?>

<section id="jeuxPHP">
  <div class="container">
      <a href="index.php?page=jeux&console_id=3"><img class="imgStyle" src="img/PC-Gamer-Spec-01.png" alt="Jeux PC" title="Jeux PC"></a>
     <a href="index.php?page=jeux&console_id=7"><img class="imgStyle" src="img/xbox-360.jpg" alt="Jeux XBOX" title="Jeux XBOX"></a>
      <a href="index.php?page=jeux&console_id=1"><img class="imgStyle" src="img/Wii.jpg" alt="Jeux WII/Wii U" title="Jeux WII/WII U"></a>
      <a href="index.php?page=jeux&console_id=2"><img class="imgStyle" src="img/Nintendo3DS.png" alt="Jeux Nintendo DS/3DS" title="Jeux 3DS/DS"></a>
      <a href="index.php?page=jeux&console_id=5"><img class="imgStyle" src="img/ps2.jpg" alt="Jeux Playstation" title="Jeux Playstation"></a>
  </div>
</section>

<section>
  <div id="jeuxContainer" class="container">
    <div class="row">
      <?php while($jeu = $query->fetch()){
      ?>
        <div class="col-md-4">
          <img class="jeuxPHP" src="img/<?php echo($jeu['photo']); ?>" alt="image">
          <h5><?php echo($jeu["nom"]); ?></h5>
          <p><?php echo($jeu["genre"]); ?></p>
      <?php
        $date = DateTime::createFromFormat("Y-m-d", $jeu["date_sortie"]);
      ?>
          <p><?php echo($date->format("d/m/Y")); ?></p>
          <p><?php echo($jeu["description"]); ?></p>
        </div>
      <?php } ?>
    </div>
  </div>
</section>