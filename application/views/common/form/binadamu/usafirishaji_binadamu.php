
<div class="form-group">
  <label>Ukubwa wa kosa</label> <br/>
    <input type="radio" name="status" id="status" value="1" checked>Kosa dogo
    <input type="radio" name="status" id="status" value="2">Kosa kubwa   
</div>

<div class="form-group">
    <label>Vyombo vilivyotumika</label>
       <?php 
       $js = 'id="nyingine" class="form-control"';
       echo form_dropdown('aina',$njia_usafirishaji_binadamu,'large', $js); 
       ?>
</div>

<div class="form-group">
    <label>Njia ya usafirishaji</label>
    <?php 
      echo form_input($source_settings);
    ?>
</div>

<div class="form-group">
    <label>Mbinu zilizotumika</label>
    <?php 
      echo form_input($aina_settings);
    ?>
</div>

<div class="form-group">
    <label>Mahali</label>
    <?php 
      echo form_input($mahali_settings);
    ?>
</div>

<div class="form-group">
    <label>Tarehe ya Tukio</label>
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
    <label>IR Namba</label>
    <?php 
      echo form_input($ir_settings);
    ?>
</div>
<?php } ?>

<br>
<div class="form-group">
    <input type="submit" name="chequebook" value='Hifadhi' class='btn btn-info'/>
</div>