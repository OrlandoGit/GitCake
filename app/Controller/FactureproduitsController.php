<?php
	class FactureproduitsController extends AppController{
	
		public function add($produit_id){
			$this->Factureproduit->save(array(
				'produit_id'=> $produit_id,
				'facture_id'=> $this->request->data['facture_id'])
			);
			$this->layout = 'ajax';
			$e = array();
			echo json_encode($e);

		}

		public function delete($produit_id){
			$this->Factureproduit->deleteAll(array(
				'produit_id'=> $produit_id,
				'facture_id'=> $this->request->data['facture_id'])
			);
			$this->layout = 'ajax';
			

		}
}