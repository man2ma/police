<br>
<br>
 <div id='changedposition'>
 <div id="close"><a href=""><i class="glyphicon glyphicon-remove"></i></a></div>
<?php echo form_open('');?>

<label class="label label-warning" id="transferwardcout"><i class="glyphicon glyphicon-arrow-right"></i>Peleka mahakamani</label>
<hr />
<input type="hidden" name="offenceid" id="offenceid" value="<?php echo $offenceid ; ?>" class="form-control" />
<input type="hidden" name="controller" id="controller" value="<?php echo $controller ; ?>" class="form-control" />
<div class="form-group">
 <label>Jina la Mahakama * </label>
 <input type="text" name="courtname" id="courtname" class="form-control" />

</div>
<div class="form-group">
  <label>Aina ya Mahakama *</label>
<select name="courtid" class="form-control" id="courtid">
    <option value="">--Chagua Mahakama--</option>
    <option value="8">Mahakama ya Mwanzo</option>
    <option value="9">Mahakama ya Wilaya</option>
    <option value="10">Mahakama ya Mkoa</option>
   <option value="11">Mahakama Kuu</option>
</select>  
</div>
<div class="form-group">
    <input type="submit" name="submit" class="btn btn-sm btn-success" id="peleka" value="Peleka">
</div>
<?php echo form_close(); ?>
 </div>

