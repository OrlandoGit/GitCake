<div class="row">
	<div class="span5 well">
		
		<?php
			echo	$this->Form->Create('Produit');
			echo 	$this->Form->inputs(array('legend'=>'Création d\'un nouveau produit'));
			echo    $this->Form->submit('Valider', array('class' => 'btn btn-primary'));
   			echo	$this->Form->end();
					
		?>
	</div>
	<a href="/site/produits/" >aller a l'index </a>
</div>




