<?php 
    $attributes = array('class' => 'form', 'id' => '', 'role' => 'form');
    echo form_open($this->session->userdata('controller').'/reportSummary' , $attributes); 
?>


<label>Kuanzia tarehe</label><br/>
<!--<input type="text" name="" value="" id='' class='datefrom form-control'/>-->
<input type="text" class="datefrom" name="fromdate" />
<br/>

<label>Mpaka tarehe</label><br/>
<!--<input type="text" name="" value="" id='' class='dateto form-control'/>-->
<input type="text" class="dateto" name="todate" />
<br/>


<button type="submit" id="admin_button" class="btn btn-primary">Search</button>
<?php echo form_close(); ?>
