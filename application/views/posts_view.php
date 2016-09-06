<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Posts</title>
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
        <li class="active"><a href="<?php echo base_url() ?>index.php/Posts/"><span class='glyphicon glyphicon-home'></span>&nbsp;Home</a></li>
        <li><a href="<?php echo base_url() ?>index.php/Contacts/"><span class='glyphicon glyphicon-phone-alt'></span>&nbsp;Contact</a></li>
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
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-knight'></span>&nbsp;&nbsp;<?php echo  $this->session->userdata('usuario'); ?><span class="caret"></span></a>
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
                                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter <?php echo $this->session->userdata('user') ?></a>
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
<!--Aqui Va el jumbotron-->
<section class='jumbotron jumbotron-fm'>
    <div class='container'> <!--container para que el texto no abarque todo-->
    <h1 class='titulo-blog'>UNBlogAlv</h1>
    <p>Welcome to the UNBlogAlv</p>
        
    </div>
</section>

    <section class="main container">
        <div class="row">
            <section class='posts col-md-9'>
                <div class='miga-de-pan'>
                    <ol class='breadcrumb'>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Categories</a></li>
                        <li class='active'>Web Design</li>
                    </ol>
                </div>
                <article class='post clearfix'> <!--corrige errores de diseño-->
                    <a href="#" class='thumb pull-left'>
                        <img class ='img-thumbnail' src="<?php echo base_url()?>assets/images/img1.jpg" alt=''>
                    </a>
                    <h2 class='post-title'>
                        <a href="#">Utiliza Herramientas eficientes para tu diseño web</a>
                    </h2>
                    <p><span class='post-fecha'>17 de Julio de 2016</span>  por <span class='post-autor'><a href="#">David Gatica</a></span></p>
                    <p class='post-contenido text-justify'>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim est non vel eaque magnam, error consequatur praesentium labore architecto nam ea harum aspernatur fugit nesciunt, culpa odit tempora placeat laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt placeat, porro provident quaerat animi quis repellendus quasi amet voluptates maiores magni quo esse doloribus, consequuntur consectetur eius assumenda, odit explicabo?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime assumenda quae eaque aut nihil maiores nobis autem ipsam, exercitationem ullam. Ab natus explicabo non culpa eveniet placeat odit veritatis consequatur!
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class='btn btn-primary'>Leer Mas</a>
                        <a href="#" class='btn btn-success'>Comentarios <span class='badge'>20</span></a>
                    </div>
                </article>
                <article class='post clearfix'> <!--corrige errores de diseño-->
                    <a href="#" class='thumb pull-left'>
                        <img class ='img-thumbnail' src="<?php echo base_url()?>assets/images/img2.jpg" alt=''>
                    </a>
                    <h2 class='post-title'>
                        <a href="#">Utiliza Herramientas eficientes para tu diseño web</a>
                    </h2>
                    <p><span class='post-fecha'>17 de Julio de 2016</span>  por <span class='post-autor'><a href="#">David Gatica</a></span></p>
                    <p class='post-contenido text-justify'>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim est non vel eaque magnam, error consequatur praesentium labore architecto nam ea harum aspernatur fugit nesciunt, culpa odit tempora placeat laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt placeat, porro provident quaerat animi quis repellendus quasi amet voluptates maiores magni quo esse doloribus, consequuntur consectetur eius assumenda, odit explicabo?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime assumenda quae eaque aut nihil maiores nobis autem ipsam, exercitationem ullam. Ab natus explicabo non culpa eveniet placeat odit veritatis consequatur!
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class='btn btn-primary'>Leer Mas</a>
                        <a href="#" class='btn btn-success'>Comentarios <span class='badge'>20</span></a>
                    </div>
                </article>
                <article class='post clearfix'> <!--corrige errores de diseño-->
                    <a href="#" class='thumb pull-left'>
                        <img class ='img-thumbnail' src="<?php echo base_url()?>assets/images/img3.jpg" alt=''>
                    </a>
                    <h2 class='post-title'>
                        <a href="#">Utiliza Herramientas eficientes para tu diseño web</a>
                    </h2>
                    <p><span class='post-fecha'>17 de Julio de 2016</span>  por <span class='post-autor'><a href="#">David Gatica</a></span></p>
                    <p class='post-contenido text-justify'>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim est non vel eaque magnam, error consequatur praesentium labore architecto nam ea harum aspernatur fugit nesciunt, culpa odit tempora placeat laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt placeat, porro provident quaerat animi quis repellendus quasi amet voluptates maiores magni quo esse doloribus, consequuntur consectetur eius assumenda, odit explicabo?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime assumenda quae eaque aut nihil maiores nobis autem ipsam, exercitationem ullam. Ab natus explicabo non culpa eveniet placeat odit veritatis consequatur!
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class='btn btn-primary'>Leer Mas</a>
                        <a href="#" class='btn btn-success'>Comentarios <span class='badge'>20</span></a>
                    </div>
                </article>
                <nav>
                    <div class="center-blog">
                        <ul class='pagination'>
                            <li class='disabeld'><a href="#">&laquo; <span class='sr-only'>Anterior</span></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo; <span class='sr-only'>Siguiente</span></a></li>
                        </ul>
                    </div>
                </nav>

            </section>
        <aside class='col-md-3 hidden-xs hidden-sm'>
            <h4>Categorias</h4>
            <div class="list-group">
                <a href="#" class='list-group-item active'>Categoria</a>
                <a href="#" class="list-group-item">CSS</a>
                <a href="#" class="list-group-item">Cursos</a>
                <a href="#" class="list-group-item">Desarrollo Web</a>
                <a href="#" class="list-group-item">Elementos Web</a>
                <a href="#" class="list-group-item">Jquery</a>
                <a href="#" class="list-group-item">Recursos y Herramientas</a>
            </div>
            <h4>Articulos Recientes</h4>
            <a href="#" class='list-group-item'>
                <h4 class='list-group-item-heading'>Inicia Proyectos HTML5 mas rapido con Boostrap</h4>
                <p class='list-group-item-text'></p>
            </a>
            <a href="#" class='list-group-item'>
                <h4 class='list-group-item-heading'>JQuery Una herramiente eficiente de javascript</h4>
                <p class='list-group-item-text'></p>
            </a>
            <a href="#" class='list-group-item'>
                <h4 class='list-group-item-heading'>Bootstrap excelente framework para diseño web</h4>
                <p class='list-group-item-text'></p>
            </a>
            <a href="#" class='list-group-item'>
                <h4 class='list-group-item-heading'>Codeigniter framework basado en MVC</h4>
                <p class='list-group-item-text'></p>
            </a>
    </aside>
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
    <script type="text/javascript" src='js/jquery.js'></script>
    <script type="text/javascript" src='js/bootstrap.min.js'></script>
    <!--
    Header
Clase navbar-inverse: cambias los colores del navbar
Clase navbar-static-top: se queda fija en la parte de arriba
Clase Navbar header:
Navbar toggle : botton que aparece en diseño responsivo
Clase sr-only se utiliza pra dispositivos de solo lectura
Clase navbar-brand: titulo de la pagina web
Clase navbar nav: agregar menu
Clase active: dejar seleccionado un menu
Clase dropdown: agregar submenu.
Clase dropdown-toggle: seleccionar el enlace <a> a abrir la lista
Clase dropdown-menu: lista despegable
Clase divider: agregar divisores al menu
Clase navbar-form: clase para agregar formulario
Clase navbar-right: desplazar menu hacia la derecha
clase img-thunnail agrega borde a la imagen
    
    Main


breadcrumb: clase para agregar migas de pan
clase thumb agrega thub 
pull-left empuja hacia la izquierda


Footer




    -->


	
<h2> <?php echo $title ?></h2>

<a href="<?php echo base_url() ?>index.php/Users">Sign In</a> <a href="<?php echo base_url() ?>index.php/Users/index_sign">Sign Up</a>

<?php foreach ($posts as $post): ?>

<h3><?php echo $post['titulo'] ?></h3>

<div class="main">
<?php echo $post['descripcion'] ?>

</div>

<p><a href="<?php echo site_url('Posts/view_post/'.$post['id_publicacion']); ?>">View Article</a></p>

<?php endforeach; ?>



<script type="text/javascript" src='<?php echo base_url()?>assets/js/jquery.js'></script> 
<script type="text/javascript" src='<?php echo base_url()?>assets/js/bootstrap.min.js'></script>
</body>
</html>