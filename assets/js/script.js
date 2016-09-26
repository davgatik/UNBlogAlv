var host = window.location.host;
var base_url = window.location.origin;
var pathArray = window.location.pathname.split( '/' );
path = base_url + "/"+pathArray[1];

/*---Login validations---*/
$().ready(function() {
		$("#form-login").validate({
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
		});
	});


/*---Sign up validations---*/
$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm").validate();
		// validate signup form on keyup and submit
		$("#form-sign").validate({
			rules: {
				name: "required",
				lastname: "required",
				email: {
					required: true,
					email: true
				},
				user: "required",
				pass: {
					required: true,
					minlength: 10
				},
				cpass: {
					required: true,
					minlength: 10,
					equalTo: "#pass"
				}
			},
			messages: {
				name: "<img src='"+path+"/assets/images/error.png'> Please, enter your name",
				lastname: "<img src='"+path+"/assets/images/error.png'> Please enter your last name",
				email: {
					required: "<img src='"+path+"/assets/images/error.png'> Please, enter your email address",
					email: "<img src='"+path+"/assets/images/error.png'> Please enter a valid email address"
				},
				user: "<img src='"+path+"/assets/images/error.png'> Please, enter a username",
				pass: {
					required: "<img src='"+path+"/assets/images/error.png'> Please, enter your password",
					minlength: "<img src='"+path+"/assets/images/error.png'> Your password must be at least 10 characters long"
				},
				cpass: {
					required: "<img src='"+path+"/assets/images/error.png'> Please, re-enter your password",
					minlength: "<img src='"+path+"/assets/images/error.png'> Your password must be at least 10 characters long",
					equalTo: "<img src='"+path+"/assets/images/error.png'> Please enter the same password as above"
				}
			}
		});

		// propose username by combining first- and lastname
		$("#username").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			if (firstname && lastname && !this.value) {
				this.value = firstname + "." + lastname;
			}
		});

		//code to hide topic selection, disable for demo
		var newsletter = $("#newsletter");
		// newsletter topics are optional, hide at first
		var inital = newsletter.is(":checked");
		var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
		var topicInputs = topics.find("input").attr("disabled", !inital);
		// show when newsletter is checked
		newsletter.click(function() {
			topics[this.checked ? "removeClass" : "addClass"]("gray");
			topicInputs.attr("disabled", !this.checked);
		});
	});


/*---Contact---*/

	$().ready(function() {
		// validate the comment form when it is submitted

		// validate signup form on keyup and submit
		$("#form-contact").validate({
			rules: {
				subject: {
					required: true,
					minlength: 5
				},
				message: {
					required: true,
					minlength: 50
				},
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				subject: {
					required:  "<img src='"+path+"/assets/images/error.png'> Please, enter a subject",
					minlength: "<img src='"+path+"/assets/images/error.png'> Your password must be at least 5 characters long"
				},
				message: {
					required: "<img src='"+path+"/assets/images/error.png'> Please enter a message",
					minlength: "<img src='"+path+"/assets/images/error.png'> Your password must be at least 50 characters long"
				},
				email: {
					required: "<img src='"+path+"/assets/images/error.png'> Please, enter a email address",
					email: "<img src='"+path+"/assets/images/error.png'> Please enter a valid email address"
				}
			}
		});

		// propose username by combining first- and lastname
		$("#username").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			if (firstname && lastname && !this.value) {
				this.value = firstname + "." + lastname;
			}
		});
		

		//code to hide topic selection, disable for demo
		var newsletter = $("#newsletter");
		// newsletter topics are optional, hide at first
		var inital = newsletter.is(":checked");
		var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
		var topicInputs = topics.find("input").attr("disabled", !inital);
		// show when newsletter is checked
		newsletter.click(function() {
			topics[this.checked ? "removeClass" : "addClass"]("gray");
			topicInputs.attr("disabled", !this.checked);
		});
	});
