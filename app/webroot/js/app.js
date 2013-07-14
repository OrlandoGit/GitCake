$(function(){
	$('.recherche').focus().keyup(function(){
		var $input = $(this);
		var $val = $input.val();
		var regexp = '\\b(.*)';
		for (var i in $val){
			regexp +='('+$val[i]+')(.*)';
		}
		regexp +='\\b';
		$('.filter li').show();
		$('.filter').find('span').each(function(){
			var $span = $(this);
			var $resultat = $span.text().match(new RegExp(regexp, 'i'));
			if (!$resultat){
				$span.parent().parent().hide();
			}
			

		});



	})
});

// transformer sa sous forme d'un plug-in 
// Mettre un class particuliere dans un champs.
