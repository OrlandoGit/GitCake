<div class="row ">
	<div class="span6 produit">
			<legend>Listes des produits</legend>
				    <div class="input-append">
				    	<input class="span2 recherche" placeholder="Recherche" type="text">
	    				<button class="btn btn-primary " type="button">ajouter</button>
	    			</div>
	    			<!-- E jquerry fonction de recherche  -->
	    			<!-- ajax pour mise upload -->
			<ul class="filter">
				<li class="none" style="display:none;"></li>
				<?php
						
						foreach ($produits as $produit) {
							$produit = extract(current($produit));
							
							echo '<li><a href="/site/factureproduits/add/'.$id.'"><span>'.$name.'</span></i></a></li>';
						}
				?>
			</ul>
	</div>
	<div class="span6 produits">
		<!-- a cacher  -->
		<legend>Facture</legend>
		<ul >
			<li class="none" style="display:none;"></li>
		</ul>
		


	</div>

</div>
<div class="voir ">
			<a href="/site/factures/show/">voir la facture</a>
	<!-- form -->
		</div>
<?php echo $this->Html->script('app'); ?>