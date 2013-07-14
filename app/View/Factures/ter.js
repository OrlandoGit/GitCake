$(function(){

	// cacher la div contenant les produits. 
	$('.hide').hide();


	// quand on soumet le formulaire, on enregistre et on récupérer les informations du nouveau client 
	// on affiche les données factures 
	$('#ClientAddForm').submit(function(){
		var $form 		= $(this);
		var $nom 		= $form.find("#ClientNom").val();
		var $prenom     = $form.find("#ClientPrenom").val();
		var $adresse    = $form.find("#ClientAdresse").val();     
		var $tel   		= $form.find("#ClientTelephone").val();    
		var $ville      = $form.find("#ClientVille").val();    
		var $mail		= $form.find("#ClientMail").val(); 

		var $client {
			 nom: 		$nom,
			 prenom: 	$prenom, 
			 adresse: 	$adresse,        
			 tel   	:	$tel,	    
			 ville  :	$ville ,  
			 mail	:	$mail
		}							
		$form.parent().fadeOut(1000);
		$('.hide').fadeIn(2500);
		var $pannier ={};
		function ajouter($pannier){

		}

		function enlever($pannier){
		
		}

		 	
		$('.produit').on('click','a',function(){
		 		$content = $(this).parent();					
		 		$content.insertAfter($('.produits .none'));
		 		$pannier.slice({$produit_id});
		 		return false;
		});
		$('.produits').on('click','a',function(){
				$content = $(this).parent();
				$content.insertAfter($('.produit .none'));
				$produit.enlever($pannier);
				return false;
			});
		$('.voir').on('click','a',function(){
			alert($facture_id);
			$liens  = $(this).attr('href')+$facture_id;
			$(location).attr('href',$liens);
			return false;
		});
								 
		return false;
	});

});