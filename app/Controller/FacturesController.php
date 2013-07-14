<?php
	class FacturesController extends AppController {

		public function add(){
		 	if(empty($this->request->data)){
		 		$produits = $this->Facture->Produit->find('all');
		 		$this->set(compact('produits'));
		 		// lorsqu'on appelle la page en normal 
		 	}else {
		 		//lorsque la page est appelé en POST
		 		// a partir de .post

		 		// On save les informations du client 
		 		$this->Facture->Client->save($this->request->data);
		 		$client_id = $this->Facture->Client->id;
				$this->Facture->save(array('client_id' => $client_id));
				

				// A quoi  sert la suite
				$this->layout='ajax';
				$e = array();
				$e['Client'] 	 = $this->request->data;
				$e['client_id']  = $client_id;
				$e['facture_id'] = $this->Facture->id;
				echo json_encode($e);
			}
		 	
		 	
			
		}



		

	function show($facture_id) {
			$data = $this->Facture->find('all', array('conditions' =>array('Facture.id'=>$facture_id)));
			$this->set(compact('data'));
		}

		function test(){
				$produits = $this->Facture->Produit->find('all');
		 		$this->set(compact('produits'));
		}

	}