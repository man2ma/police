<?php

    $station_settings = array(
        'name'        => 'station_name',
        'id'          => 'station_name',
        'type'        =>  'station_name',
        'placeholder' => 'Jina la Kituo',
        'class' => 'form-control'  
    );

?>
<br>
<br>
<?php echo $this->session->flashdata('message'); ?>
<?php echo form_open('admin/addPoliceStationDo');?>
<legend>Kituo kipya cha Polisi</legend>
<div class="form-group">
    <label>Kipengele cha Kosa</label>
    <?php 
      echo form_input($station_settings);
    ?>
</div>
<div class="form-group">
    <label>Aina la Kituo</label>
       <?php 
       $js = 'id="" class="form-control"';
       echo form_dropdown('station_type',$station_type,'large', $js); 
       ?>
</div>
<div class="form-group">
    <label>Daraja la Kituo</label>
       <?php 
       $js = 'id="" class="form-control"';
       echo form_dropdown('station_class',$station_class,'large', $js); 
       ?>
</div>

<div class="form-group">
<label>Mkoa wa Polisi</label>
       <?php 
       $js = 'id="region_police" class="form-control"';
       echo form_dropdown('region_police',$region_police,'large', $js); 
       ?>
</div>
<div class="form-group" id='space1'></div>
<div class="form-group" id='space2'></div>
<br/>
<div class="form-group">
   <input type="submit" name="chequebook" value='Ongeza Kituo' class='btn btn-info'/>
</div>


<?php echo form_close(); ?>
