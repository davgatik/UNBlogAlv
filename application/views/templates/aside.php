 <aside class='col-md-3 hidden-xs hidden-sm'>
            <h4>Categories</h4>
            <div class="list-group">
             <a href="#" class='list-group-item active'>Categories</a>
             <?php foreach ($categories as $category):?>
                <a href="#" class='list-group-item'><span class='<?php echo $category["icono"] ?>'>&nbsp;</span><?php echo $category['nombre'] ?></a>
                <?php endforeach; ?>
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