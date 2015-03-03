
<div class="form-group">
  <label>Ukubwa wa kosa</label> <br/>
    <input type="radio" name="status" id="status" value="1" checked>Ajali ya Kawaida
    <input type="radio" name="status" id="status" value="2">Ajali kubwa  
</div>

<div class="form-group">
    <label>Sababu za Ajali</label>
       <?php 
       $js = 'id="nyingine" class="form-control"';
       echo form_dropdown('sababu',$sababu_ajali,'large', $js); 
       ?>
</div>

<div class="form-group">
    <label>Mahali ajali ilipotokea</label>
    <?php 
      echo form_input($mahali_settings);
    ?>
</div>

<div class="form-group">
    <label>Tarehe ya Ajali</label>
    <?php 
      echo form_input($date_settings);
    ?>
</div>

<div class='form-group'>
    <input type="checkbox" name="mengine"  value=""onclick="javascript:toggleField('mengine');"> Maelezo mengine
    <textarea name="mengineyo" class='form-control' rows="5" id="mengine"style="display:none;"></textarea>
</div>

<div class="form-group">
    <label>RB Namba</label>
    <?php 
      echo form_input($rb_settings);
    ?>
</div>

<?php if(($this->session->userdata('station_classid'))==1){?>
<div class="form-group">
    <label>AR Namba</label>
    <?php 
      echo form_input($ar_settings);
    ?>
</div>
<?php } ?>

<br>
<div class="form-group">
    <input type="submit" name="chequebook" value='Hifadhi' class='btn btn-info'/>
</div>

