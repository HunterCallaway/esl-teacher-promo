/**
 * jQuery Validate Function
 *
 * This function provides front-end validation for your form.
 * If all tests set up here pass, the form data is AJAX submitted
 * to the mailer.php file.
 *
 * Update this file as needed for your form.
 * All ids and name values must match up to your form here.
 *
 * @author Hunter Callaway <jcallaway3@cnm.edu>
 **/

$(document).ready(function() {
	$("#hunters-contact-form").validate(
		{
			debug: true,
			errorClass: "alert alert-danger",
			errorLabelContainer: "#output-area",
			errorElement: "div",
			// rules here define what is good or bad input
			rules: {
				contactName: {
					required: true,
				},
				contactEmail: {
					email: true,
					required: true
				},
				contactMessage: {
					required: true,
					maxlength: 2000,
					minlength: 10
				}
			},
			// error messages to display to the end user when rules above don't pass
			messages: {
				contactName: {
					required: "Your name must be included."
				},
				contactEmail: {
					email: "Please use a valid email address.",
					required: "Your email address must be included."
				},
				contactMessage: {
					required: "Please write a message.",
					maxlength: "Your message must be no longer than 2000 characters.",
					minlength: "Your message must be at least ten characters long."
				}
			},

			// AJAX submit the form data to back end if rules pass
			submitHandler: function(form) {
				$("#hunters-contact-form").ajaxSubmit({
					type: "POST",
					url: $("#hunters-contact-form").attr("action"),

					success: function(ajaxOutput) {
						//Clear the output area's formatting.
						$("#output-area").css("display", "");

						//Write the server's reply to the output area.
						$("#output-area").html(ajaxOutput);

						//Reset the form if it was successful.
						if($(".alert-success").length >= 1) {
							$("#hunters-contact-form")[0].reset();
						}
					}
				})
			}
		}
	)
});