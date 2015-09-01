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
		event.stopPropagation();
	});

});*/
/***************************************************/

$(document).ready(function(){
	$("#showDetails").click(function){
	$("p").show();
	});
	$("#showDetails").click(function(){
	$("p").hide();
	});
});

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
	});
	
});