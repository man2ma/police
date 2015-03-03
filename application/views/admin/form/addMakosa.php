<?php
   
    $kipengele_settings = array(
        'name'        => 'kipengele',
        'id'          => 'kosa',
        'type'        =>  'kipengele',
        'placeholder' => 'Kipengele cha kosa',
        'class' => 'form-control'  
    );

?>
<br>
<br>
<?php echo $this->session->flashdata('message'); ?>
<?php echo form_open('admin/addMakosaDo');?>
<legend>Ongeza Kipengele cha Kosa</legend>
<div class="form-group">
<input type="hidden" name="crimetype_id" value="<?php echo $crimetype_id; ?>"/>
<label>Aina ya Kosa</label>
       <?php 
       $js = 'id="kosa" class="form-control"';
       echo form_dropdown('kosa',$kosa,'large', $js); 
       ?>
</div>
<div class="form-group">
    <label>Kipengele cha Kosa</label>
    <?php 
      echo form_input($kipengele_settings);
    ?>
</div>
<div class="form-group">
   <input type="submit" name="chequebook" value='Ongeza Kipengele' class='btn btn-info'/>
</div>


<?php echo form_close(); ?>
