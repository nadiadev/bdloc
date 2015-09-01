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
		$('#showDetails').fadeIn(500);
		event.stopPropagation();
	});

});

$('#showDetails').on('click',function(event){
	event.stopPropagation();
});

$('html').on('click', function(event){
	$('#showDetails').fadeOut(0);
	event.stopPropagation();
});
