<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo $title ?></title>
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
      <a class="navbar-brand" href="">UNBlogAlv</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php echo $active_post ?>"><a href="<?php echo base_url() ?>index.php/Posts/"><span class='glyphicon glyphicon-home'></span>&nbsp;Home</a></li>
        <li class="<?php echo $active_contact ?>"><a href="<?php echo base_url() ?>index.php/Contacts/"><span class='glyphicon glyphicon-phone-alt'></span>&nbsp;Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-knight'></span>&nbsp;&nbsp;Categories<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <?php foreach ($categories as $category):?>
            <li><a href="#"><?php echo $category['nombre'] ?></a></li>
          <?php endforeach; ?>
          </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <li><p class="navbar-text"><a href="<?php echo base_url() ?>index.php/users/index_sign" target='_blank'><span class='glyphicon glyphicon-pencil'></span>&nbsp;Sign Up</a></p></li>
        <!--User-->
        <?php  if ($this->session->userdata('is_logued_in') == TRUE): ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-user'></span>&nbsp;&nbsp;<b><?php echo  ucfirst($this->session->userdata('usuario')); ?></b><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Acount</a></li>
            <li><a href="#">My Posts</a></li>
            <li><a href="#">Upload Post</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url() ?>index.php/login">Re-Login</a></li>
            <li><a href="<?php echo base_url() ?>index.php/login/logout_ci">Log Out</a></li>
          </ul>
        </li>
        <?php else: ?>
        <!--Login end login-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-user'>&nbsp;</span><b>Sign In</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                     <div class="row">
                            <div class="col-md-12">
                                Login via
                                <div class="social-buttons">
                                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter <?php echo $this->session->userdata('user') ?></a>
                                </div>
                                or
                                 <form class="form" role="form" method="post" action="<?php echo base_url() ?>index.php/login/new_user" id='form-login' accept-charset="UTF-8">
                                        <div class="form-group">
                                             <label class="sr-only" for="user">User:</label>
                                             <input type="text" class="form-control" name='user' id="user" placeholder="*Enter your user" required>
                                        </div>
                                        <div class="form-group">
                                             <label class="sr-only" for="pass">Password</label>
                                             <input type="password" class="form-control" id="pass" placeholder="*Enter your password" name='pass' required>
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
      <?php endif; ?>
        <!--end login-->
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</nav>
    </header>