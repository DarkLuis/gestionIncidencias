$(function() {
	//alert('script agregado');
	$('#select-project').on('change', onSelectProjectChange);

});

function onSelectProjectChange() {
	var project_id = $(this).val();

	if (! project_id) {
		$('#select-level').html('<option value="">Seleccione Nivel</option>');
		return;
	}
	
	//ajax
	$.get('/api/proyecto/'+project_id+'/niveles', function (data) {
		var html_select = '<option value="">Seleccione Nivel</option>';
		for(var i=0; i<data.length; ++i)
			html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
		//console.log(html_select);
		$('#select-level').html(html_select);
	});
}