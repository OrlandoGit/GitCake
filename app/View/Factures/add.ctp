<div class="row">
	<div class="span5">
		<?php
			echo	$this->Form->Create('Client');
			echo 	$this->Form->inputs(array('legend'=>'Client'));
			echo    $this->Form->submit('Valider', array('class' => 'btn btn-primary ajax'));
   			echo	$this->Form->end();
		?>
	</div>
	<div class="span7">
		<!-- nothing here -->
	</div>
</div>
<div class="row hide">
	<div class="span6 produit">
			<legend>Listes des produits</legend>
				    <div class="input-append">
				    	<input class="span2 recherche" placeholder="Recherche" type="text">
	    				<input class="btn btn-primary " type="submit">ajouter</button>
	    			</div>
			<ul class="filter"> 
				<!-- class="filter" => pour la fonction de recherche automatique -->
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
<div class="voir hide">
			<a href="/site/factures/show/">voir la facture</a>
	<!-- form -->
		</div>
	
<?php echo $this->Html->script('factures'); ?>