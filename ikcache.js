(function($){
    $.fn.ikcache = function(){
		id = $(this).attr("id");
		$.ajax({
			url : 'ikcache.php',
			type : 'POST',
			data : {
				'data': $(this).val()
			}
		})
    }
	setInterval(function(){$("#"+id).ikcache()},10000);
}(jQuery))
