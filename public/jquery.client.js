$(document).ready(function(){
 
	var i = $('input').size() + 1;
 
	$('#add').click(function() {
		$('<div><input type="file" class="field" id="userfile_'+ i +'" name="userfile_'+ i +'" /></div>').fadeIn('slow').appendTo('.files');
		i++;
	});
 
});