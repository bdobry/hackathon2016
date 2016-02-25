$(document).ready(function() {
	$('.downvote').click(function () {
  		$(this).toggleClass('on');
  		$('.upvote').removeClass('on');
		});

	$('.upvote').click(function () {
  		$(this).toggleClass('on');
  		$('.downvote').removeClass('on');
		});
});

$(document).ready(function() {
    $('#emailForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                validators: {
                    emailAddress: {
                        message: 'The value is not a valid email address'
                    }
                }
            }
        }
    });
});