<?php 
$data =  ($data['0']);
extract($data);
echo '<div class="row-fluid">
        <div class="span8 well">
          <legend><h2>Pompe funébre Turpyn</h2></legend>
          <p class="pull-right"> Mme Pascale Gérard </p>
          <p> 14 rue du pont tunnel, 7730 Estaimpuis<p>
          <p> email : pfturpyn@hotmail.com</p>
        </div>
        <div class="span4 well">
          <h4>Facture : '.$Facture['id'].'</h4>
          <p>Estaimpuis le : '.$Facture['created'].'</p>
          <p> Nom : '     .$Client['nom'].' '.$Client['prenom'].'</p>
          <p> Adresse : ' .$Client['adresse'].  '</p>
          <p> Ville : '   .$Client['ville'].    '</p>
       </div>

      </div>';
echo '<hr>';
echo '<table class="table table-striped"><TH>Nom</TH><TH>Prix</TH><TH>TVA</TH>';
foreach($Produit as $produit){
	echo ' <TR><TD>'.$produit['name'].'</TD>';
	echo ' <TD>'.$produit['price'].'</TD>';
	echo ' <TD>'.$produit['tva'].'</TD></TR>';
}
echo '</table>';
echo '<hr>';
// bilan des chiffres.
// présentation sous forme d'un beau tableau 
$prix = 0; 
$resultatTVA6 =0;
$resultatTVA21=0;
$resultatSansTVA=0;
foreach($Produit as $produit){
	if ($produit['tva']== '0'){
		$resultatSansTVA = $resultatSansTVA+$produit['price'];
	}
	if ($produit['tva']== '6'){
		$resultatTVA6 = $resultatTVA6+$produit['price'];
	}
	if ($produit['tva']== '21'){
		$resultatTVA21 = $resultatTVA21+$produit['price'];
	}
	$prix = $prix + $produit['price']*(1+$produit['tva']/100);
}
echo '<table class="table table-striped"><TH></TH><TH>Total hors taxe</TH><TH>TVA</TH><TH>Resultat</TH>';
	echo ' <TR><TH>Sans Tva</TH>';
	echo ' <TD>'.$resultatSansTVA.'</TD>';
	echo ' <TD>'.'0'.'</TD>';
	echo ' <TD>'.$resultatSansTVA.'</TD></TR>';
	echo ' <TR><TH>6%</TH>';
	echo ' <TD>'.$resultatTVA6.'    </TD>';
	echo ' <TD>'.$resultatTVA6*(6/100).'    </TD>';
	echo ' <TD>'.$resultatTVA6*(1+6/100).'</TD></TR>';
	echo ' <TR><TH>21%                  </TH>';
	echo ' <TD>'.$resultatTVA21.'    </TD>';
	echo ' <TD>'.$resultatTVA21*(21/100).'    </TD>';
	echo ' <TD>'.$resultatTVA21*(1+21/100).'</TD></TR>';
	echo ' <TR><TH>Total</TH>';
	echo ' <TD>'.($resultatTVA21+$resultatTVA6+$resultatSansTVA).'</TD>';
	echo ' <TD>'.($resultatTVA21*(21/100)+$resultatTVA6*(6/100)).'</TD>';
	echo ' <TD><h5>'.$prix.'</h5></TD></TR>';

// refaire en html ???