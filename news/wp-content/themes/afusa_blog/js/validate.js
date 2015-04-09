$(document).ready(function () {

    $('#contactForm, .modal-body#contactForm').submit(function () {
        if ($(':input[text]').val() === '') {
			$(':input[text]').after('<div class="error"></div>');
            return false;
        } else {
            return true;
        }
    });
	
	$(':input[text]').focus(function() {
		$('div.error').remove();
	});

});



