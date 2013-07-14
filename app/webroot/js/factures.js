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
		var client = {
			nom: 		$nom,
			prenom: 	$prenom, 
		 	adresse: 	$adresse,        
			tel   	:	$tel,	    
			ville  :	$ville ,  
			mail	:	$mail
		};
		$.post("/site/factures/add",
			client,
			function(data){
				$facture_id = data.facture_id;
			 	$form.parent().fadeOut(1000);
			 	$('.hide').fadeIn(2500);
			 	$('.produit').on('click','a',function(){
		 			$liens = $(this).attr('href');
		 			// $facture_id = data.facture_id;
					$content = $(this).parent();
		 			$content.insertAfter($('.produits .none'));
		 			$.post($liens,
		 				{facture_id : $facture_id},
		 				function(){},
		 				"json"
		 			);
		 			return false;
			 	});
			 	$('.produits').on('click','a',function(){
	 				$liens = $(this).attr('href');
	 				$liens = $liens.replace("add","delete");
	 				$content = $(this).parent();
					$content.insertAfter($('.produit .none'));
					$.post(
						$liens,
						{facture_id:$facture_id}
					);
					return false;
				});
				$('.voir').on('click','a',function(){
					$liens  = $(this).attr('href')+$facture_id;
					$(location).attr('href',$liens);
					return false;
				});
				$('.recherche').focus().keyup(function(event){
					var $input = $(this);
					var $val = $input.val();
					var regexp = '\\b(.*)';
					for (var i in $val){
						regexp +='('+$val[i]+')(.*)';
					}
					regexp +='\\b';
					var enter = (event.keyCode == 13 );
					if (enter){
						// si l'utilisateur a appuyer sur enter 
						$(this).val('');
						$li = $('.filter li:visible a');
						$liens = $li.attr('href');
						$content = $li.parent();
			 			$content.insertAfter($('.produits .none'));
			 			$.post($liens,
			 				{facture_id : $facture_id},
			 				function(){},
			 				"json"
			 			);
						$('.filter li').not('.none').show();
						// envoyer le produit
						
						
			 			// $facture_id = data.facture_id;
						
		 				return false;


					}else {
						
						$('.filter li').not($('.none')).show();
						$('.filter').find('span').each(function(){
							var $span = $(this);
							
							var $resultat = $span.text().match(new RegExp(regexp, 'i'));
							
							if (!$resultat){
								$span.parent().parent().hide();
							}
							

						});
					}
					
				});
			} //  fermeture de la fonction de callback ligne 25
			,"json"
		);
	return false;
	});

});

// faire autrement avec la session ! Puis faire un gros appel. Ca va être plus simple et allege les requetes.
// structurer le truc ! 