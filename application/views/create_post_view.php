<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Upload Post</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="shortcut icon"   type="image/x-icon" href="<?php echo base_url() ?>assets/images/027449-glossy-black-icon-culture-space-alien1-sc37.ico">
</head>

<body>
<header>
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">UNBlogAlv</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url() ?>index.php/Posts/"><span class='glyphicon glyphicon-home'></span>&nbsp;Home</a></li>
        <li class="active"><a href="#"><span class='glyphicon glyphicon-phone-alt'></span>&nbsp;Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-knight'></span>&nbsp;&nbsp;Categories<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text"><a href="<?php echo base_url() ?>index.php/Users/index_sign" target='_blank'><span class='glyphicon glyphicon-pencil'></span>&nbsp;Sign Up</a></p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-user'>&nbsp;</span><b>Sign In</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                     <div class="row">
                            <div class="col-md-12">
                                Login via
                                <div class="social-buttons">
                                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                </div>
                                or
                                 <form class="form" role="form" method="post" action="<?php echo base_url() ?>index.php/Users/" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                             <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputPassword2">Password</label>
                                             <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                        </div>
                                        <div class="form-group">
                                             <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                        <div class="checkbox">
                                             <label>
                                             <input type="checkbox"> keep me logged-in
                                             </label>
                                        </div>
                                 </form>
                            </div>
                            <div class="bottom text-center">
                                New here ? <a href="#"><b>Join Us</b></a>
                            </div>
                     </div>
                </li>
            </ul>

        </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </header>
<section class="main main-contact container">
<div class='row'>
<section class="contacts">
<form action="create_contact" method='POST' id='form-contact' class='form-contact'>
    <h1 class='h1-contact'><center>Upload your Post!</center></h1>
	<div class="form-group">
	    <label for='email'>Title:</label>
		<input type="email" name="titulo" id='email' required placeholder="*Enter your email address...">
	</div>
	<div class="form-group">
		<label for='subject'>Date:</label>
		<input type="text" name="fecha" id='subject' required  placeholder="Enter your subject...">
	</div>
	<div class="form-group">
		<label for='message'>Description:</label>
		<textarea name='descripcion' id='message' placeholder="Please, enter your message here..." required></textarea>
	</div>
	<input type="submit" class='btn btn-primary btn-contact' value='Submit'>
</form>
</section>

</div>
	
</section>

    <footer>
    <hr>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <p><a href="#">David Gatica - www.unblogalv.com &copy;</a></p>
                </div>
                <div class='col-xs-6'>
                    <ul class="list-inline text-right">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Cursos</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<script type="text/javascript" src='<?php echo base_url()?>assets/js/jquery.js'></script> 
<script type="text/javascript" src='<?php echo base_url()?>assets/js/bootstrap.min.js'></script>
<script src="<?php echo base_url() ?>assets/js/validation/lib/jquery.js"></script>
	<script src="<?php echo base_url() ?>assets/js/validation/dist/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/contact.js"></script>
</body>
</html>