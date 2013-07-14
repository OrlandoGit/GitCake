$(function(){
	$('.ajax').click(function(){
		
		$(this).parents("TR");
		$.ajax({
			type:  "POST",
			url : $(this).attr('href')
		});
		$(this).parents("TR").slideUp();

		return false;
	});

});
