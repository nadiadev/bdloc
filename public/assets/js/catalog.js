$('.details').on('click',function(event){
	event.preventDefault();
	var path = $('.box').attr('data-modale-path');
	var bookId = $(this).parent().attr('data-id');
	$.ajax({
		url: path,
		data:{
			id: bookId,
		}, 
	}).done(function(response){
		$('#showDetails').html(response);
		event.stopPropagation();
	});

});
/*$('.details').on('click',function(event){
	event.preventDefault();
	var path = $('.box').attr('data-modale-path');
	var bookId = $(this).parent().attr('data-id');
	$.ajax({
		url: path,
		data:{
			id: bookId,
		}, 
	}).done(function(response){
		$('#showDetails').html(response);
	});
	
});*/