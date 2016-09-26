<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $titulo ?></title>
	<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/login.css">
	<link rel="shortcut icon"   type="image/x-icon" href="<?php echo base_url() ?>assets/images/027449-glossy-black-icon-culture-space-alien1-sc37.ico">
</head>
<body>
<div class='container'>
<?php 
$attributes = array('class' => 'form-login', 'id' => 'form-login');
//echo form_open('Verifylogin', $attributes);
echo form_open(base_url().'index.php/login/new_user' , $attributes);
$user = array (
	'name'=> 'user',
	'id'=> 'user',
	'placeholder' => '*Enter your username',
	//'class' => '',
	'value' => set_value('user')
	);
$pass = array (
	'name' => 'pass',
	'id' => 'pass',
	'placeholder' => '*Enter your password',
	//'class' => '',
	'type'=>'password',
	'value' => set_value('pass')
	);
$attributes_validate = array('class' => 'p-validate');
?>

<center><h1><img src="<?php echo base_url() ?>assets/images/027449-glossy-black-icon-culture-space-alien1-sc37.png" width="70">UNBlogAlv</h1></center>
<?php
echo form_label("Username:",'user');
echo form_input($user);
echo form_error('user' , '<p id="user-error">');
echo form_label("Password:",'pass');
echo form_input($pass);
echo form_error('pass','<p id="pass-error">');
echo form_hidden('token',$token);
echo form_submit('sub_login','Sign in');
echo anchor('', 'Forgot your password?', 'class="forgot_pass"');
echo anchor('Users/index_sign', 'Sign Up', 'class="forgot_sign"');
if($this->session->flashdata('usuario_incorrecto'))
{
echo "<p>".$this->session->flashdata('usuario_incorrecto')."</p>";
}
					
echo form_close() ?>
</div>
    <script src="<?php echo base_url() ?>assets/js/validation/lib/jquery.js"></script>
	<script src="<?php echo base_url() ?>assets/js/validation/dist/jquery.validate.js"></script>
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
</body>
</html>