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
            user: {
                minlength: 5,
                required: false,
                remote: "check-new-username.php"
            },
            email: {
                required: false,
                email: true
            },
                oldPass: {
			    required: false,
			    remote: "check-password.php"
			},
            newPass1: {
                minlength: 6,
                required: false
            },
            newPass2: {
            	equalTo: "newPass1"
            }
        },

		messages: {
		    user: {
		      remote: "Username is already taken"
		    },
            oldPass: {
                remote: "Your old password is incorrect"
            }
		  },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
            $(element).removeClass('success').addClass('error');
            $(element).closest('.form-control').addClass('error').removeClass('valid');
        },
        success: function (element) {
            element.text('Correct').addClass('valid')
                .closest('.control-group').removeClass('error').addClass('success');
        }
    });


});

$(document).ready(function () {

    $('#registerForm').validate({
        rules: {
            regUsername: {
                minlength: 6,
                required: true,
                remote: "check-new-username.php"
            },
                regPass: {
                minlength: 6,
                required: true
            },
            regEmail: {
                required: true,
                email: true
            }

        },

        messages: {
            regUsername: {
                remote: "Username is already taken"
            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
            $(element).removeClass('success').addClass('error');
            $(element).closest('.form-control').addClass('error').removeClass('valid');
        },
        success: function (element) {
            element.text('Correct').addClass('valid')
                .closest('.control-group').removeClass('error').addClass('success');
        }
    });


});