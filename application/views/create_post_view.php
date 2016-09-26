<section class="main main-contact container">
<div class='row'>
<section class="contacts">
<form action="<?php base_url() ?>do_upload" method='POST' id='form-contact' class='form-contact'  enctype="multipart/form-data">
    <h1 class='h1-contact'><center>Upload your Post!</center></h1>
	<div class="form-group">
	    <label for='titulo'>Title:</label>
		<input type="text" name="titulo" id='titulo'  placeholder="*Enter a post's title...">
	</div>
	<div class="form-group">
	    <label for='categoria'>Category:</label>
		<select name='categoria'>
		<?php foreach ($categories as $category ): ?>
			<option value='<?php echo $category['nombre'] ?>'><?php echo $category['nombre'] ?></option>
		<?php endforeach; ?>
		</select>
	</div>
	<!--<div class="form-group">
		<label for='subject'>Date:</label>
		<input type="text" name="fecha" id='subject'   placeholder="Enter your subject...">
	</div>-->
	<div class="form-group">
	    <label for='fecha'>Date:</label>
        <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
            <input  size="16" type="text" value="" name='fecha' placeholder="*Enter a post's date..." readonly>
            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>
		<input type="hidden" id="dtp_input2" value="" />
   </div>
   			<!--<div class="form-group">
                <label for="dtp_input2" class="col-md-2 control-label">Date Picking</label>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input2" value="" /><br/>
            </div>-->
	<div class="form-group">
		<label for='picture'>Picture:</label>
		<input type="file" name="picture" id='picture'  placeholder="Enter your Picture...">
	</div>
	<div class="form-group">
		<label for='descripcion'>Description:</label>
		<textarea name='descripcion' id='descripcion' placeholder="Please, enter your message here..." ></textarea>
	</div>
	<input type="submit" class='btn btn-primary btn-contact' value='Submit'>
</form>
</section>

</div>
	
</section>


