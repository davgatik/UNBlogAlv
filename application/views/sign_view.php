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
$attributes = array('class' => 'form_login', 'id' => 'form_login');
echo form_open('Login/create_user', $attributes);

$name = array (
	'name'=> 'name',
	'id'=> 'name',
	'placeholder' => '*Enter your name(s)',
	'required'=>'true');
$lastname = array (
	'name'=> 'lastname',
	'id'=> 'lastname',
	'placeholder' => '*Enter your last name',
	'required'=>'true');
$email = array (
	'name'=> 'email',
	'id'=> 'email',
	'placeholder' => '*Enter your e-mail',
	'required'=>'true',
	'type' => 'email');

$photo = array (
	'name' => 'photo',
	'id'=> 'photo',
	'placeholder' => '*Upload your Photo',
	'type' => 'file');
$user = array (
	'name'=> 'user',
	'id'=> 'user',
	'placeholder' => '* Enter your username',
	'required'=>'true');
$password = array (
	'name' => 'pass',
	'id'=> 'pass',
	'placeholder' => '*Enter your password',
	'required'=>'true',
	'type'=>'password');

$confrim_password = array (
	'name' => 'cpass',
	'id'=> 'cpass',
	'placeholder' => '*Re-enter your password',
	'required'=>'true',
	'type'=>'password');
?>
<center><h1><img src="<?php echo base_url() ?>assets/images/027449-glossy-black-icon-culture-space-alien1-sc37.png" width="70">UNBlogAlv</h1></center>
<?php
echo form_label('Name:','name');
echo form_input($name);
echo form_label('Last Name:','lastname');
echo form_input($lastname);
echo form_label('E-Mail:','email');
echo form_input($email);
echo form_label('Photo:', 'photo');
echo form_input($photo);
echo form_label('Username:','user');
echo form_input($user);
echo form_label('Password:','pass');
echo form_input($password);
echo form_label('Confirm Password:','cpass');
echo form_input($confrim_password);
echo form_submit('sub_login','Sign Up');
echo anchor('Users/index', 'Sign in', 'class="signto_login"');
echo form_close() ?>

</div>


<script src="<?php echo base_url() ?>assets/js/validation/lib/jquery.js"></script>
	<script src="<?php echo base_url() ?>assets/js/validation/dist/jquery.validate.js"></script>
	<script src="<?php echo base_url() ?>assets/js/sign.js"></script>
</body>
</html>