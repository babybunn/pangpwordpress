var $ = jQuery.noConflict();

$(document).ready(function(){
	$('input[type="file"]').bind('change', function () {
		var filename = $(this).val();
		if (/^\s*$/.test(filename)) {
			$(".file-upload").removeClass('active');
			$("#noFile").text("No file chosen..."); 
		}
		else {
			$(".file-upload").addClass('active');
			$("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
		}
	});
});