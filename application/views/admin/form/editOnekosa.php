<?php

foreach ($resultdata->result() as $value) {
    $crimecat_name = $value->crimecat_name;
    $crimecat_id = $value->crimecat_id;
    $crimetype_id = $value->crimetype_id;
}
    $kipengele_settings = array(
        'name'        => 'kipengele',
        'id'          => 'kosa',
        'type'        => 'kipengele',
        'value'       => $crimecat_name,
        'placeholder' => 'Kipengele cha kosa',
        'class' => 'form-control'  
    );

?>
<br>
<br>
<?php echo form_open('admin/editOneKosaDo');?>
<legend><i class="glyphicon glyphicon-edit"></i> Badili Kipengele cha Kosa</legend>

<div class="form-group">
    <input type="hidden" name="crimecat_id" value="<?php echo $crimecat_id; ?>"/>
    <input type="hidden" name="crimetype_id" value="<?php echo $crimetype_id; ?>"/>
    <label>Kipengele cha Kosa</label>
    <?php 
      echo form_input($kipengele_settings);
    ?>
</div>
<div class="form-group">
    <input type="submit" id="btn_edit-kipengele" value='Hifadhi' class='btn btn-info'/>
</div>


<?php echo form_close(); ?>
