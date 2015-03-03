<?php 
    $attributes = array('class' => 'form', 'id' => '', 'role' => 'form');
    echo form_open($this->session->userdata('controller').'/reportMakosaMali' , $attributes); 
?>

<!--<label>Age Group</label><br/>
<select name='row_value[]' class="form-control multiselect" multiple="multiple">
    <option value='' disabled="disable"></option>

</select><br/><br/>-->

<label>Makosa dhidi ya binadamu</label><br/>
<?php
echo form_dropdown('crimecat_id[]',$crimecat_name, set_value('crimecat_id') ,'id="crimecat_id" class="form-control multiselect" multiple="multiple"');
?>
<br/><br/>
  
<label>Kuanzia tarehe</label><br/>
<input type="text" class="datefrom" name="fromdate" />
<br/>

<label>Mpaka tarehe</label><br/>
<input type="text" class="dateto" name="todate" />
<br/>
<br/>

<button type="submit" id="admin_button" class="btn btn-primary">Tafuta</button>
<?php echo form_close(); ?>


<script type="text/javascript">
  $(document).ready(function() {
    $('.multiselect').multiselect();
  });
</script> 