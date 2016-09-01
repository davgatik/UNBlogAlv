var host = window.location.host;
var base_url = window.location.origin;
var pathArray = window.location.pathname.split( '/' );

 path = base_url + "/"+pathArray[1];


$().ready(function() {
		$("#form_login").validate({
			rules: {
				user: 'required',
				pass: {
					required: true,
					minlength: 10

				}
			},
			messages: {
				user: "<img src='"+path+"/assets/images/error.png'> Please, enter a username",
				pass: {
					required: "<img src='"+path+"/assets/images/error.png'> Please, enter your password",
					minlength: "<img src='"+path+"/assets/images/error.png'> Your password must be at least 10 characters long"
					
				}
			}
			/*highlight: function(element, errorClass) {
				$('.validate_check_user').css('display','none');
			},
			success: function() {
				var user  = $(".validate_check_user").attr("name");
				if (!($(".user").attr("aria-invalid"))) {

					$('.validate_check_user').css('display','inline');

				}

				
				
			}*/
				
			
		});
	});
