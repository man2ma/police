
<?php

    $form = array(
        'name'        => 'transferinguser',
        'id'          => 'transferinguser',
    );

?>
<?php

    $submit = array(
        'name'        => 'UpdateNewLocation',
        'id'          => 'UpdateNewLocation',
        'class'       => 'btn btn-success',
        'value'       => 'Update'
    );

?>




<br></br>
<?php
foreach($userinfo->result() as $row){
             $datainfo=array(
                'id'=>$row->id,
                'region_policename'=>$row->region_policename,
                'district_policename'=>$row->district_policename,
                'ward_policename'=>$row->ward_policename,
                'station_name'=>$row->station_name,
           );     
    
}
?>
</br>
 <div id='changedposition'>
<div id='close'><a href=""><i class="glyphicon glyphicon-remove"></i></a></div>
<p style="margin-top: -80px;"><b>Assigning New Location</b></p>
<div id='alertmessage' style='display: none; color:green;'>You have successfully transferred the user to new Station</div>
<hr />
<div id="changedposition">
    <?php echo form_open('',$form); ?>
     <input type='hidden' name='id' id='userid' value='<?php echo $row->id ;?>'>
       <div class="form-group">
       <label>Police region * </label>
       <?php 
       $js = 'id="region_policenewlocation" class="form-control"';
       echo form_dropdown('position',$region_police,'large', $js); 
       ?>
        </div>
    
    
      <div class="form-group">
        <div id="space4"></div>
           </div>
     <div class="form-group">
        <div id="space5"></div>
           </div>
     <div class="form-group">
        <div id="space6"></div>
           </div>
     <div class="form-group">
         <div id="space7" style="display: none;">
             <?php echo form_submit($submit);?>
         </div>
           </div>
         <?php echo form_close();?>
</div>
    

</div>
