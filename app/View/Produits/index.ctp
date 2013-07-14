<div class="row">
		<div class="well">
			<legend> Liste des produits</legend>
			<table class="table table-bordered table-striped">
				<TH width="100px">Nom</TH><TH width="100px">prix</TH><TH width="100px">tva</TH><TH width="100px">Type</TH><TH width="100px">Edition</TH>
				<?php foreach ($produits as $produit) {
					$produit = current($produit);
					echo ' <TR><TD width="100px">'.$produit['name'].'</TD>';
					echo ' <TD width="100px">'.$produit['price'].'</TD>';
					echo ' <TD width="100px">'.$produit['tva'].'</TD>';
					echo ' <TD width="100px">'.$produit['type'].'</TD>';
					echo  '<TD width="100px">
								<a data-toggle="tooltip"  title="éditer le produit"  href="/site/Produits/edit/'.$produit['id'].'">
									<i class="icon-edit"></i>
								</a>
								<a cdata-toggle="tooltip"  title="supprimer le produit" class="ajax" href="/site/Produits/delete/'.$produit['id'].'">
									<i class="icon-remove"></i>
								</a>
					</TD></TR>';
				} ?>
			</table>
		</div>
</div>
 <?php echo  $this->Html->script('delete');