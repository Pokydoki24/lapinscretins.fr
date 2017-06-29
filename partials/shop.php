<?php
	if(!isset($_SESSION['utilisateur'])){

		header('location: index.php?page=connexion');
	}
	// echo $_SESSION['utilisateur']['id'];
?>

<style>
  .tabs { height:36px; }
  .tabs ul{ list-style-type: none; font-size:14px; text-transform: uppercase; font-weight: bold; }
  .tabs ul li{ float:left; display:inline; margin-right:1px; }
  .tabs ul li a,
  .tabs ul li a span { float:left; height:36px; background:url(images/tab.gif) no-repeat 0 -37px; padding:0 0 0 20px;}
  .tabs ul li a span { background-position:right -37px; padding:0 20px 0 0;}
  .tabs ul li a { position:relative; line-height:36px; color:#895d23; }


  .items { position:relative; width:960px; margin-right:-20px; padding-bottom:5px; }
  .items ul{ list-style-type: none;}
  .items ul li{ float:left; border:dashed 1px #cfcfcf; width:194px; margin:0 18px 12px 0; padding:13px; }
  .items ul li p span{ color:#890000}
  .items ul li p.price{ padding-top:15px; }
  .items ul li p.price strong{ color:#890000; font-size:14px;}

  .tab-content { display:none;}

  .tabbed { min-height:420px;}
</style>

<h2>Notre boutique</h2>
    <div id="content">
      <!-- Tabs -->
      <div class="tabs">
        <ul>
        <!-- Redifinir les liens-->
          <li><a href="index.php?page=jeux"><span>Jeux</span></a></li>
          <li><a href="index.php?page=bd"><span>Bande Dessinée</span></a></li>
          <li><a href="index.php?page=dvd"><span>DVD</span></a></li>
          
    
        </ul>
      </div>
      
    <div id="container">
    <div class="tabbed">
        
    <div class="tab-content" style="display:block;">
    <div class="items">
          <ul>
          <li>
          <div class="image"> 
          <a href="https://www.amazon.fr/Abysmile-smijdp005-Société-Cretins-Classiques/dp/B0060117XW/ref=sr_1_6?s=toys&ie=UTF8&qid=1498730999&sr=1-6&" target="_blank">
          <img src="img/bwattte.jpg" width="180px" height="120px" /></a> 
          </div>
          <p class="price">Prix: <strong>16,85 €</strong></p>
          </li>
          
          <li>
          <div class="image"> 
          <a href="https://www.amazon.fr/LAPINS-CRETINS-Furie-Jeu-plateau/dp/B013EL1K0U" target="_blank">
          <img src="img/furie.jpg" width="200px" height="120px"/></a> 
          </div>
          <p class="price">Prix:<strong>11,65€</strong></p>
          </li>
          
          <li>
          <div class="image"> 
          <a href="https://www.amazon.fr/Dujardin-01210-dambiance-Cretin-Choucroute/dp/B01B7DRBOG" target="_blank">
          <img src="img/choucroute.jpg" width="200px" height="120px" /></a> 
          </div>
          <p class="price">Prix:<strong>11,65€</strong></p>
          </li>
          <li>
          <div class="image"> 
          <a href="https://www.amazon.fr/Dujardin-01211-dambiance-Cretin-Baccalauréat/dp/B01B7DRDSU/ref=sr_1_7?s=toys&ie=UTF8&qid=1498730999&sr=1-7&" target="_blank">
        <img src="img/bwacalaureat.jpg" width="200px" height="120px"/>
          </a> 
          </div>
          
          <p class="price">Prix:<strong>15,99 €</strong></p>
                </li>
                <li>
          <div class="image"> 
          <a href="https://www.amazon.fr/Nathan-Puzzle-Lapins-Crétins-Sortent/dp/B06XD846QV/ref=sr_1_1?s=toys&ie=UTF8&qid=1498731176&sr=1-1&" target="_blank">
        <img src="img/500pieces.jpg" width="200px" height="120px" /></a> 
                  </div>
                  <p class="price">Prix:<strong>10,99 €</strong></p>
                </li>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/Asmodee-JSLC03-daction-Réflexe-Crétins/dp/B0056WICM0/ref=sr_1_sc_1?s=toys&ie=UTF8&qid=1498731197&sr=1-1-spell&" target="_blank">
                  <img src="img/junglespeed.jpeg" width="200px" height="120px" /></a> 
                  </div>
                  <p class="price">Prix:<strong>29,88 €</strong></p>
                </li>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/LAPINS-CRETINS-Jeu-Devine-suis/dp/B01KVD4EKW" target="_blank"><img src="img/quijesuis.jpg" width="200px" height="120px" /></a> 
                  </div>
                  <p class="price">Prix:<strong>14,99 €</strong></p>

                </li>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/Jeu-Plateau-Lapins-Cretins-Gros/dp/B00FA80ADO" target="_blank"><img src="img/grosdefi.jpg" width="200px" height="120px"/></a> 
                  </div>
     
                  <p class="price">Prix:<strong>13,29 €</strong></p>
                </li>
              </ul>
             
            </div>

          <div class="tab-content">
            <div class="items">
                <ul>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/Glenat-Poche-Lapins-cr%C3%A9tins-Omelette/dp/2344000216">
                  <img src="img/omelette-parti.jpg" width="200px" height="300px" /></a> </div>
                  <p class="price">Prix:<strong>4,99 €</strong></p>
                </li>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/Lapins-Cr%C3%A9tins-1-Bwaaaaaaaaaaah/dp/291877104X"><img src="img/bwwaaaa.jpg" width="200px" height="300px" /></a> 
                  </div>
                  <p class="price">Prix:<strong>9,99 €</strong></p>
                </li>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/Lapins-Crétins-3-Renversant/dp/2918771104/ref=sr_1_1?s=books&ie=UTF8&qid=1498731792&sr=1-1&"><img src="img/renversant.jpg" width="200px" height="300px" /></a> 
                  </div>
                  <p class="price">Prix:<strong>9,95 €</strong></p>
                </li>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/lapins-crétins-4-Gribouillages/dp/2918771120/ref=sr_1_1?s=books&ie=UTF8&qid=1498731808&sr=1-1&"><img src="img/gribouillages.jpg" width="200px" height="300px" /></a> 
                  </div>
                  <p class="price">Prix:<strong>9,95 €</strong></p>
                </li>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/Lapins-Crétins-vie-rose/dp/2918771147/ref=sr_1_1?s=books&ie=UTF8&qid=1498731823&sr=1-1&">
          <img src="img/rose.jpg" width="200px" height="300px"/></a> 
          </div>
                  <p class="price">Prix:<strong>6,99 €</strong></p>
                </li>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/Lapins-Cretins-OP-Vu-télé/dp/2918771570/ref=sr_1_fkmr0_2?s=books&ie=UTF8&qid=1498731841&sr=1-2-fkmr0&">
                  <img src="img/givres.jpg" width="200px" height="300px" /></a> 
                  </div>
                  <p class="price">Prix:<strong>5,99 €</strong></p>
                </li>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/lapins-crétins-Crétin-style/dp/2918771244/ref=sr_1_1?s=books&ie=UTF8&qid=1498731866&sr=1-1"><img src="img/cretin-style.jpg" width="200px" height="300px" /></a> 
                  </div>
                  <p class="price">Prix:<strong>4.99 €</strong></p>
                </li>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/Glenat-Poche-Lapins-crétins-crétin/dp/2344015744/ref=sr_1_1?s=books&ie=UTF8&qid=1498731890&sr=1-1&"><img src="img/ouest.jpg" width="200px" height="300px" /></a> 
                  </div>
                  <p class="price">Prix:<strong>5,99 €</strong></p>
                </li>
                </ul>
              
            </div>
          </div>
          <div class="tab-content">
            <div class="items">
              
              <ul>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/Lapins-cr%C3%A9tins-Invasion-Partie/dp/B00FF9OBQ0">
                  <img src="img/invasion.jpg" width="200px" height="300px" /></a> 
                  </div>
                  <p class="price">Prix: <strong>5,45 €</strong></p>
                </li>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/LAPINS-CRETINS-Saison-partie-Ouvrard/dp/B00XZEL1O2/ref=sr_1_1?s=dvd&ie=UTF8&qid=1498732272&sr=1-1&">
      <img src="img/invasion2.jpg" width="200px" height="300px"/></a> 
      </div>
                  <p class="price">Prix: <strong>9,30 €</strong></p>
                </li>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/LAPINS-CRETINS-saison-3-1/dp/B01H3WFAI4">
                  <img src="img/invasion3p1.jpg" width="200px" height="300px"/></a> 
                  </div>
                  <p class="price">Prix: <strong>7,50 €</strong></p>
                </li>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/LAPINS-CRETINS-saison-3-2/dp/B01N57JQOK">
                  <img src="img/invasion3p2.jpg" width="200px" height="300px"/></a> 
                  </div>
                   <p class="price">Prix: <strong>5,30 €</strong></p>
                </li>
                <li>
                  <div class="image"> 
                  <a href="https://www.amazon.fr/Lapins-cr%C3%A9tins-Invasion-Partie/dp/B00LM6JZBQ">
                  <img src="img/invasion4.jpg" width="200px" height="300px"/></a> </div>
          
                  <p class="price">Prix: <strong>8,99 €</strong></p>
                </li>

              </ul>
              </div>
          </div>
          <div class="tab-content">
            <div class="items">
            <div class="cl"></div>
            <ul>
              <li>
                <div class="image">
                <a href="https://www.amazon.fr/Boxer-Freegun-Lapins-cr%C3%A9tins-Assassins/dp/B072M4M7YY/ref=sr_1_1?s=apparel&ie=UTF8&qid=1498726227&sr=1-1&nodeID=340855031&psd=1&keywords=lapin+cretinr" target="_blank">
                <img src="img/boxer-assassins.jpeg" width="200px" height="200px"></a></div>
               <p class="price">Prix: <strong>9,90 €</strong></p>
              </li>
              
              <li>
                <div class="image"><a href="https://www.amazon.fr/Boxer-Freegun-Lapins-cr%C3%A9tins-Assassins/dp/B072M4M7YY/ref=sr_1_1?s=apparel&ie=UTF8&qid=1498726227&sr=1-1&nodeID=340855031&psd=1&keywords=lapin+cretin" target="_blank">
                <img src="img/thuglife.jpg" width="200px" height="200px"></a></div>
               <p class="price">Prix: <strong>19,90 €</strong></p>
              </li>
           
                  <li>
                    <div class="image"><a href="https://www.amazon.fr/Chaussette-licence-taille-Lapins-cr%C3%A9tins/dp/B072BRNGVJ/ref=sr_1_18?s=apparel&ie=UTF8&qid=1498726227&sr=1-18&nodeID=340855031&psd=1&keywords=lapin+cretin" target="_blank">
                    <img src="img/chaussette.jpg" width="200px" height="200px"></a></div>
                    <p class="price">Prix: <strong>5,90 €</strong></p>
                  
              </li>
                  <li>
                    <div class="image"><a href="https://www.amazon.fr/Pyjama-court-Lapins-Cr%C3%A9tins-multicolor/dp/B00Y6FKO9M/ref=sr_1_15?s=apparel&ie=UTF8&qid=1498726227&sr=1-15&nodeID=340855031&psd=1&keywords=lapin+cretin" target="_blank">
                    <img src="img/Pyjama.jpg" width="200px" height="200px"></a></div>
                    <p class="price">Prix: <strong>5,90 €</strong></p>
                  
              </li>
                    <li>
                    <div class="image"><a href="https://www.amazon.fr/LAPINS-CRETINS-Sweat-Teddy-Lapin/dp/B01LY9RL9B/ref=sr_1_30?s=apparel&ie=UTF8&qid=1498726227&sr=1-30&nodeID=340855031&psd=1&keywords=lapin+cretin" target="_blank">
                      <img src="img/sweat-teddy.jpeg" width="200px" height="200px"></a></div>
                      <p class="price">Prix: <strong>52,90 €</strong></p>
                  </li>
                  <li>
                    <div class="image"><a href="https://www.amazon.fr/Casquette-Lapins-Cretins-Lucha-Libre/dp/B00AJL5J5Q/ref=sr_1_34?s=apparel&ie=UTF8&qid=1498726227&sr=1-34&nodeID=340855031&psd=1&keywords=lapin+cretin" target="_blank">
                      <img src="img/casquette.jpg" width="200px" height="200px"></a></div>
                      <p class="price">Prix: <strong>18,90 €</strong></p>
                  </li>
            </ul>


