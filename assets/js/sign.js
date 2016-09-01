


/*$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});*/
   
var host = window.location.host;
var base_url = window.location.origin;
var pathArray = window.location.pathname.split( '/' );

 path = base_url + "/"+pathArray[1] + "/assets/images/error.png";
 path = base_url + "/"+pathArray[1];

//alert(path);



	$().ready(function() {
		// validate the comment form when it is submitted


		$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#form_login").validate({
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
        
				/*tel: "required",
				escuela: "required",
				precio: "required",
				categoria: "required",
				subcategoria: "required",
				estado: "required",
				municipio: "required",
				titulo: {
					required: true,
					minlength: 5
				},
				descrip: {
					required: true,
					minlength: 10
				},
				nombre: "required",
				apellido: "required",
				lastname: "required",
				username: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				mail: {
					required: true,
					email: true
				},
				topic: {
					required: "#newsletter:checked",
					minlength: 2
				},
				condiciones: "required"*/
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





				/*tel: "Por favor, ingrese su numero de teléfono",
				escuela: "Por favor, seleccione una escuela",
				precio: "Por favor, ingrese una cantidad",
				categoria: "Por favor, seleccione una categoria",
				subcategoria: "Por favor, seleccione una subcategoria",
				estado: "Por favor, Seleccione un estado",
				municipio: "Por favor, Seleccione un municipio",
				titulo: {
					required: "Por favor, ingrese un titulo",
					minlength: "El titulo debe tener al menos 5 caracteres"
				},
				descrip: {
					required: "Por favor, ingrese alguna descripción",
					minlength: "La descripción debe tener al menos 10 caracteres"
				},
				nombre: "Por favor, Ingrese su nombre",
				apellido: "Por favor, Ingrese su apellido",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				mail: "Por favor, ingrese una dirección de correo valida",
				condiciones: "Por favor, Acepte los terminos y condiciones",
				topic: "Please select at least 2 topics"*/
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

