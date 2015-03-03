


<br>
<br>
 <div id='changedposition'>
 <div id="close"><a href=""><i class="glyphicon glyphicon-remove"></i></a></div>
<?php echo form_open('');?>
<label class="label label-danger" id="transferwardcout"><i class="glyphicon glyphicon-arrow-right"></i>Kufunga Lalamiko</label>
<hr />
<input type="hidden"  value="<?php echo $this->session->userdata('controller'); ?>" id="controller"/>
<input type="hidden"  value="<?php echo $offence_no; ?>" id="offence_no"/>
<div class="form-group">
  <label>Aina ya Ufungaji *</label>
<select name="courtid" class="form-control" id="courtid">
    <option value="">--Chagua Aina ya Ufungaji--</option>
    <option value="12">NFA</option>
    <option value="13">NOD</option>
    <option value="13">U</option>
</select>  
</div>
<div class="form-group">
    <textarea class="form-control" rows="3" id="description"></textarea>
</div>
<div class="form-group">
    <input type="submit" name="submit" class="btn btn-sm btn-danger" id="closingcourt" value="Funga">
</div>
<?php echo form_close(); ?>
 </div>
