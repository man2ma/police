 <?php 
        foreach($userinfo->result() as $row){
            $userinfo=array(
                'id'=>$row->id,
                'user_typeid'=>$row->user_typeid,
                'user_typename'=>$row->user_typename,
                'force_no'=>$row->force_no,
                'fname'=>$row->fname,
                'midname'=>$row->midname,
                'lname'=>$row->lname,
                'mobile_no'=>$row->mobile_no,
            );
            $name=ucfirst(strtolower($row->fname)).' '.ucfirst(strtolower($row->midname)).' '.ucfirst(strtolower($row->lname));
        } ?>
<?php

    $position_current = array(
        'name'        => 'current',
        'id'          => 'currentid',
        'type'        =>  'currentposition',
        'class' => 'form-control' ,
        'readonly'=>'true',
        'value'=>$row->user_typename
    );

?>
<?php

    $userid = array(
        'name'        => 'userid',
        'id'          => 'userid',
        'type'        =>  'hidden',
        'class' => 'form-control' ,
        'value'=>$row->id
    );

?>
<?php

    $submitbutton = array(
        'name'        => 'updateposition',
        'id'          => 'updateposition',
        'type'        =>  'button',
        'class' => 'btn btn-success' ,
        'value'=>'Update',
    );

?>
<?php

    $cancel = array(
        'name'        => 'cancel',
        'id'          => 'cancel',
        'type'        =>  'button',
        'class' => 'btn btn-info' ,
        'value'=>'Update',
    );

?>
<?php

    $form = array(
        'name'        => 'changingposition1',
        'id'          => 'changingposition',
    );

?>
 
<div id="changedposition">
<div id='close'><a href=""><i class="glyphicon glyphicon-remove"></i></a></div>
<font color="green">You are about to change Position of :- </font><font color='blue'><?php echo $name; ?></font>
<hr />
<?php echo form_open('',$form); ?>
 <div id='loadingimage' style='display: none;'></div>
 
<?php echo form_input($userid);?>
<div class="form-group">
<label>Current Position :-</label>

<?php echo form_input($position_current,'readonly');?>
</div>

<div class="form-group">
<label>New Position *</label>
<?php 
       $js = 'id="policeposition" class="form-control"';
       echo form_dropdown('',$position,'large', $js); 
 ?>
</div>
<div class="form-group">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;
<?php echo form_button($submitbutton,'Update' );?>
   &nbsp;&nbsp;
<?php echo form_button($cancel,'Cancel');?>
</div>
<?php echo form_close(); ?>
</div>