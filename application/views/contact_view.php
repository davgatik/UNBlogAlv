<section class="main main-contact container">
<div class='row'>
<section class="contacts">
<?php 

$email = array(
	'name'=> 'email',
	'id'=> 'email',
	'placeholder' => '*Enter your e-mail address...',
	'value' => set_value('email'),
	'type' => 'text');
$subject = array(
	'name'=> 'subject',
	'id'=> 'subject',
	'value' => set_value('subject'),
	'placeholder' => '*Enter your subject...');
$message = array(
	'name'=> 'message',
	'id'=> 'message',
	'placeholder'=>'Please, enter your message here...',
	'value' => set_value('message'));

$submit = array(
	'class'=> 'btn btn-primary btn-contact',
	'value' => 'Submit');

$attributes = array('class' => 'form-contact', 'id' => 'form-contact');
echo form_open(base_url().'index.php/contacts/create_contact', $attributes);
?>
<h1 class='h1-contact'><center>Contact Us!</center></h1>
<div class="form-group">
<?php 
	echo form_label('E-mail:','email');
	echo form_input($email);
	echo form_error('email','<p id="email-error">');
?>
</div>
<div class="form-group">
<?php 
	echo form_label('Subject:','subject');
	echo form_input($subject);
	echo form_error('subject','<p id="subject-error">');
?>
</div>
<div class="form-group">
<?php 
    echo form_label('Message:','message');
	echo form_textarea($message);
	echo form_error('message','<p id="message-error">');
 ?>
</div>
<?php echo form_submit($submit); ?>
 <?php echo form_close();?>

<!--<form action="create_contact" method='POST' id='form-contact' class='form-contact'>
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
</form>-->
</section>

</div>
</section>