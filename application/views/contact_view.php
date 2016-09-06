<section class="main main-contact container">
<div class='row'>
<section class="contacts">
<form action="create_contact" method='POST' id='form-contact' class='form-contact'>
    <h1 class='h1-contact'><center>Contact Us!</center></h1>
	<div class="form-group">
	    <label for='email'>E-mail:</label>
		<input type="email" name="email" id='email' required placeholder="*Enter your email address...">
	</div>
	<div class="form-group">
		<label for='subject'>Subject:</label>
		<input type="text" name="subject" id='subject' required  placeholder="Enter your subject...">
	</div>
	<div class="form-group">
		<label for='message'>Message:</label>
		<textarea name='message' id='message' placeholder="Please, enter your message here..." required></textarea>
	</div>
	<input type="submit" class='btn btn-primary btn-contact' value='Submit'>
</form>
</section>

</div>
</section>