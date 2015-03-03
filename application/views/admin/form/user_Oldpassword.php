
<?php
foreach($userinfo->result() as $row){
             $datainfo=array(
                'id'=>$row->id,
                'force_no'=>$row->force_no,
                'password'=>$row->password,
           );     
    
}
?>
<?php

    $form = array(
        'name'        => 'passwordchange',
        'id'          => 'passwordchange',
    );

    
      $password = array(
        'name'        => 'pass',
        'id'          => 'pass',
        'type'        =>  'password',
        'class' => 'form-control' ,
    );
     $confirmpass = array(
        'name'        => 'confirmpass',
        'id'          => 'confirmpass',
        'type'        =>  'password',
        'class' => 'form-control' ,
    );
?>

<br></br>
</br>
<div id='close'><a href=""><i class="glyphicon glyphicon-remove"></i></a></div>
<br></br>
<p style="margin-top: -80px;"><b>Reseting password of user with force number: <?php  echo $row->force_no; ?></b></p>
<hr />
<div id='passwordchangesuccess' style='display: none; color:green;'>You have successfully reseted the password</div>
 <?php echo form_open('',$form); ?>
      <input type='hidden' name='id' id='userid' value='<?php echo $row->id ;?>'>
       <div class="form-group">
       <label>New password * </label>
       <?php 
          echo form_input($password); 
       ?>
        </div>
       <div class="form-group">
       <label>confirm password * </label>
       <?php 
          echo form_input($confirmpass); 
       ?>
        </div>
         <input type="submit" id='setpassword' value='Reset password' class='btn btn-success'/>



 <?php echo form_close(); ?>