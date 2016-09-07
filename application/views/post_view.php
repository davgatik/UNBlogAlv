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


<?php 
echo '<h2>'.$post['titulo'].'</h2>';
echo $post['descripcion'];
 ?>


 <?php 
if (isset($comments) && $comments != "")
{
 foreach ($comments as $comment):


  ?>
<ul>
	<li><?php echo $comment['comentario'].$comment['nombre'] ?></li>
</ul>


<?php endforeach; }?>
