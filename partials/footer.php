<footer>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6">
                <ul class="list-inline">
                    <li><a href="#">A propos</a></li>
                    <li class="footer-menu-divider"></li>
                    <li class="<?= ( $page === 'quisommesnous') ? "active" : "" ?>"><a href="index.php?page=quisommesnous">Qui sommes nous</a></li>
                    <li class="footer-menu-divider"></li>
                    <li class="<?= ( $page === 'contact') ? "active" : "" ?>"><a href="index.php?page=contact">Contact</a></li>
                    <li class="footer-menu-divider"></li>
                    <li><a href="#">Mentions legales</a></li>
                </ul>
            </div>

            <div class="col-md-6 col-sm-6">
                <ul class="list-inline">

                  <li><a href="https://www.facebook.com/lapinscretins.fr/" target="_blank"><img src="img/iconeFacebook.png" alt="icone Facebook"></a></li>

                  <li><a href="https://twitter.com/lapinscretins?lang=fr/" target="_blank"><img src="img/iconeTwitter.png" alt="icone Twitter"></a></li>

                  <li><a href="https://www.youtube.com/user/lapincretinsinvasion" target="_blank"><img src="img/iconeYoutube.png" alt="icone Youtube"></a></li>

                </ul>
            </div>

           <img src="img/createurs2.png" alt="createur du site" style="width: 30%; height:150px;">
               
            <div class="row text-center">
            <p>Copyright © 2017 All rights reserved</p>
            </div>
        </div>
    </div>
</footer>