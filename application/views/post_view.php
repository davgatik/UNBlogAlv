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
