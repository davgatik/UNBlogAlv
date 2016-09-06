
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
                <?php foreach ($posts as $post): ?>
                <article class='post clearfix'> <!--corrige errores de diseño-->
                    <a href="#" class='thumb pull-left'>
                        <img class ='img-thumbnail' src="<?php echo base_url()?>assets/images/img1.jpg" alt=''>
                    </a>
                    <h2 class='post-title'>
                        <a href="#"><?php echo $post['titulo'] ?></a>
                    </h2>
                    <p><span class='post-fecha'>17 de Julio de 2016</span>  por <span class='post-autor'><a href="#">David Gatica</a></span></p>
                    <p class='post-contenido text-justify'>
                        <?php echo $post['descripcion'] ?>
                    </p>
                    <div class="contenedor-botones">
                        <a href="<?php echo site_url('index.php/Posts/view_post/'.$post['id_publicacion']); ?>" class='btn btn-primary'>Leer Mas</a>
                        <a href="#" class='btn btn-success'>Comentarios <span class='badge'>20</span></a>
                    </div>
                </article>
            <?php endforeach; ?>  
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