<br>
<br>

<?php echo form_open('cro/newOffenceDo');?>
<legend><i class="glyphicon glyphicon-pencil"></i> Tukio Jipya</legend>
<div class="form-group">
<label>Aina ya Kosa</label>
       <?php 
       $js = 'id="crime_type" class="form-control"';
       echo form_dropdown('crime_type',$crime_type,'large', $js); 
       ?>
</div>
<div class="form-group" id='crime_cat_space'></div>
<div class="form-group" id='crime_subcat_space'></div>
<div class="form-group" id='vehicle_typeid'></div>
<div class="form-group" id='vehicle_subcategoryid'></div>




<?php echo form_close(); ?>
