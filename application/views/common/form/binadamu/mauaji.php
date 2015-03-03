
<div class="form-group">
  <label>Ukubwa wa kosa</label> <br/>
    <input type="radio" name="status" id="status" value="1" checked>Kosa dogo
    <input type="radio" name="status" id="status" value="2">Kosa kubwa   
</div>

<div class="form-group">
    <label>Mbinu zilizotumika</label>
    <?php 
      echo form_input($mbinu_settings);
    ?>
</div>

<div class="form-group">
    <label>Silaha zilizotumika</label>
       <?php 
       $js = 'id="nyingine" class="form-control"';
       echo form_dropdown('silaha',$silaha,'large', $js); 
       ?>
</div>

<div class="form-group" id='other_space'></div>

<div class="form-group">
    <label>Idadi ya Walio uliwa</label>
       <select name="idadi" class="form-control">
           <option value=''>--Chagua--</option>
             <?php 
             $i = 0;
             for($i=0; $i<10000; $i++){ 
             echo'<option value="'.$i.'">'.$i.'</option>'; 
              } 
             ?>
      </select>
</div>
<div class="form-group">
    <label>Kawaida</label>
       <select name="mauajikawaida" class="form-control">
           <option value=''>--Chagua--</option>
             <?php 
             $i = 0;
             for($i=0; $i<10000; $i++){ 
             echo'<option value="'.$i.'">'.$i.'</option>'; 
              } 
             ?>
      </select>
</div>
<div class="form-group">
    <label>Walemavu wa ngozi</label>
       <select name="mauajialbino" class="form-control">
           <option value=''>--Chagua--</option>
             <?php 
             $i = 0;
             for($i=0; $i<10000; $i++){ 
             echo'<option value="'.$i.'">'.$i.'</option>'; 
              } 
             ?>
      </select>
</div>
<div class="form-group">
    <label>Vikongwe</label>
       <select name="mauajivikongwe" class="form-control">
           <option value=''>--Chagua--</option>
             <?php 
             $i = 0;
             for($i=0; $i<10000; $i++){ 
             echo'<option value="'.$i.'">'.$i.'</option>'; 
              } 
             ?>
      </select>
</div>

<div class="form-group">
    <label>Mahali</label>
    <?php 
      echo form_input($mahali_settings);
    ?>
</div>

<div class="form-group">
    <label>Sababu za Mauaji</label>
    <?php 
      echo form_input($sababu_settings);
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

<script>
//function toggleField(field) {
//var myTarget = document.getElementById(field);
//if(myTarget.style.display == 'none'){
//  myTarget.style.display = 'block';
//    } else {
//  myTarget.style.display = 'none';
//  myTarget.value = '';
//}
//}
</script>