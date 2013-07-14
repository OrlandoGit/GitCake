<?php 
	
	class ProduitsController extends AppController {

		public function index(){
		// permet de lister les produits.
			$produits = $this->Produit->find('all');
			$this->set(compact('produits'));			
		}

		public function add(){
			if (!empty($this->request->data)){
				$produit = $this->request->data;
				$this->Produit->save($produit);
			}
			
			
		}
		// deux fonctions qui ne peuvent pas être appeller directement 
		// les actions sont directement intégrées dans la page index. 
		
		public function edit($id){
			// à faire
			 
		}

		public function delete($id){
			// en ajax ce sera mieux beaucoup mieux ! 
			// done 
			// pas de view
			$this->Produit->delete($id);
			
			
		}
	
}