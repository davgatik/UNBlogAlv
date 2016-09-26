<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $titulo ?></title>
	<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/sign.css">
	<link rel="shortcut icon"   type="image/x-icon" href="<?php echo base_url() ?>assets/images/027449-glossy-black-icon-culture-space-alien1-sc37.ico">
</head>
<body>
<div class='container'>
<?php 
$attributes = array('class' => 'form-sign', 'id' => 'form-sign');
echo form_open(base_url().'index.php/users/create_user', $attributes);

$name = array (
	'name'=> 'name',
	'id'=> 'name',
	'placeholder' => '*Enter your name(s)',
	'value' => set_value('name'));
$lastname = array (
	'name'=> 'lastname',
	'id'=> 'lastname',
	'placeholder' => '*Enter your last name',
	'value' => set_value('lastname'));
$email = array (
	'name'=> 'email',
	'id'=> 'email',
	'placeholder' => '*Enter your e-mail',
	'value' => set_value('email'),
	'type' => 'text');

$photo = array (
	'name' => 'photo',
	'id'=> 'photo',
	'placeholder' => '*Upload your Photo',
	'type' => 'file');
$user = array (
	'name'=> 'user',
	'id'=> 'user',
	'value' => set_value('user'),
	'placeholder' => '* Enter your username');
$password = array (
	'name' => 'pass',
	'id'=> 'pass',
	'placeholder' => '*Enter your password',
	'type'=>'password');

$confrim_password = array (
	'name' => 'cpass',
	'id'=> 'cpass',
	'placeholder' => '*Re-enter your password',
	'type'=>'password');
?>
<center><h1><img src="<?php echo base_url() ?>assets/images/027449-glossy-black-icon-culture-space-alien1-sc37.png" width="70">UNBlogAlv</h1></center>
<?php
echo form_label('Name:','name');
echo form_input($name);
echo form_error('name','<p id="name-error">');
echo form_label('Last Name:','lastname');
echo form_input($lastname);
echo form_error('lastname','<p id="lastname-error">');
echo form_label('E-Mail:','email');
echo form_input($email);
echo form_error('email','<p id="email-error">');
echo form_label('Photo:', 'photo');
echo form_input($photo);
echo form_label('Username:','user');
echo form_input($user);
echo form_error('user','<p id="user-error">');
echo form_label('Password:','pass');
echo form_input($password);
echo form_error('pass','<p id="pass-error">');
echo form_label('Confirm Password:','cpass');
echo form_input($confrim_password);
echo form_error('cpass','<p id="cpass-error">');
echo form_submit('sub_login','Sign Up');
echo anchor('Users/index', 'Sign in', 'class="signto_login"');
echo form_close() ?>

</div>


<script src="<?php echo base_url() ?>assets/js/validation/lib/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/js/validation/dist/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/js/script.js"></script>
</body>
</html>