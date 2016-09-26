 <aside class='col-md-3 hidden-xs hidden-sm'>
            <h4>Categories</h4>
            <div class="list-group">
             <a href="#" class='list-group-item active'>Categories</a>
             <?php foreach ($categories as $category):?>
                <a href="#" class='list-group-item'><span class='<?php echo $category["icono"] ?>'>&nbsp;</span><?php echo $category['nombre'] ?></a>
                <?php endforeach; ?>
            </div>
            <h4>Articulos Recientes</h4>
            <?php foreach ($recent_posts as $recent_post): ?>
            <a href="#" class='list-group-item'>
                <h4 class='list-group-item-heading'><?php echo $recent_post['titulo']; ?></h4>
                <p class='list-group-item-text'><?php $date = date('l F d, Y',strtotime($recent_post['fecha']));echo $date;?></p>
            </a>
        <?php endforeach; ?>
    </aside>
        </div>
    </section>