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
<!--<h2> <?php echo $title ?></h2>

<a href="<?php echo base_url() ?>index.php/Users">Sign In</a> <a href="<?php echo base_url() ?>index.php/Users/index_sign">Sign Up</a>-->

<!--<?php foreach ($posts as $post): ?>

<h3><?php echo $post['titulo'] ?></h3>

<div class="main">
<?php echo $post['descripcion'] ?>

</div>

<p><a href="<?php echo site_url('Posts/view_post/'.$post['id_publicacion']); ?>">View Article</a></p>

<?php endforeach; ?>-->
<script type="text/javascript" src='<?php echo base_url()?>assets/js/jquery.js'></script> 
<script type="text/javascript" src='<?php echo base_url()?>assets/js/bootstrap.min.js'></script>
<script src="<?php echo base_url() ?>assets/js/validation/dist/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript" src="../js/locales/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'es',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>
</body>
</html>