<?php
   class Carte {
      private Array $liste;
      public function __construct(Array $liste) {
         $this->liste = $liste;
      }

      public function html() {
        echo ' 
             <h1>Carte des pizzas</h1>
                <div class="carte">';
          foreach($this->liste as $pizza) {
             echo '
                 <div class="pizzacarte">
                 <div class="imgpizzacarte"><img src="./img/pizza_'.$pizza->getId().'.jpg" /></div>					
                 <h2>'.$pizza->getNom().'</h2>
                 <p>'.$pizza->getDescription().'</p>
                 <div class="prix">
                     <div class="tarifs">
                         <div>La Part = '.number_format($pizza->getPrixPart()/100,2).'€</div><div><input type="number" placeholder="Quantité" min="1" max="8" id="qp1p"/><button class="btn" title="ajoutez au panier"><i class="fas fa-shopping-basket"></i></button></div>
                         <div>Moyenne = '.number_format($pizza->getPrixPetite()/100,2).'€</div><div><input type="number" placeholder="Quantité" min="1" max="8" id="qp1m"/><button class="btn" title="ajoutez au panier"><i class="fas fa-shopping-basket"></i></button></div>
                         <div>Grande = '.number_format($pizza->getPrixGrande()/100,2).'€</div><div><input type="number" placeholder="Quantité" min="1" max="8" id="qp1g"/><button class="btn" title="ajoutez au panier"><i class="fas fa-shopping-basket"></i></button></div>
                     </div>
                 </div>
             </div>
             ';
          }
          echo '
          </div>
          ';
    }
   }