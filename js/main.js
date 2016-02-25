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

$(document).ready(function () {

    $('#editProfileForm').validate({
        rules: {
            name: {
                minlength: 2,
                required: true
            },
            email: {
                required: true,
                email: true
            },
            message: {
                minlength: 2,
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        },
        success: function (element) {
            element.text('OK!').addClass('valid')
                .closest('.control-group').removeClass('error').addClass('success');
        }
    });

});