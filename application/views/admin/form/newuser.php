<?php

    $fno = array(
        'name'        => 'fno',
        'id'          => 'fno',
        'type'        =>  'fno',
        'class' => 'form-control' ,
    );
    $fname = array(
        'name'        => 'fname',
        'id'          => 'fname',
        'type'        =>  'fno',
        'class' => 'form-control' ,
    );
     $mname = array(
        'name'        => 'mname',
        'id'          => 'mname',
        'type'        =>  'mname',
        'class' => 'form-control' ,
    );
    $mname = array(
        'name'        => 'mname',
        'id'          => 'mname',
        'type'        =>  'mname',
        'class' => 'form-control' ,
    );
     $lname = array(
        'name'        => 'lname',
        'id'          => 'lname',
        'type'        =>  'lname',
        'class' => 'form-control' ,
    );
     $phone = array(
        'name'        => 'phone',
        'id'          => 'phone',
        'type'        =>  'phone',
        'class' => 'form-control' ,
    );
    $password = array(
        'name'        => 'password',
        'id'          => 'password',
        'type'        =>  'password',
        'class' => 'form-control' ,
    );
    $confirmpass= array(
        'name'        => 'confirmpass',
        'id'          => 'confirmpass',
        'type'        =>  'password',
        'class' => 'form-control' ,
    );


?>
<br>
<br>
<div class="row">
    <div class="col-xs-10">
        
    </div>
    <div class="col-xs-2">
        <ul class="list-inline">
        <li><?php echo anchor('admin/newUser/','<i class="glyphicon glyphicon-plus"></i> New User',array('class'=>'btn btn-primary')); ?></li>
        </ul>
    </div>
</div>
<legend><i class="glyphicon glyphicon-user"></i> Add New users</legend>
<div class="row">
    <div class="col-xs-12">
        <?php echo form_open('admin/addNewusers');?>
        <p id='beforeload'></p>
        <div class="form-group">
        <label>Force Number * </label>
        <?php echo form_input($fno);?>
        </div>
        <div class="form-group">
        <label>First Name * </label>
        <?php echo form_input($fname);?>
        </div>
         <div class="form-group">
        <label>Middle Name * </label>
        <?php echo form_input($mname);?>
        </div>
         <div class="form-group">
        <label>Last Name * </label>
        <?php echo form_input($lname);?>
        </div>
        <div class="form-group">
        <label>Mobile phone * </label>
        <?php echo form_input($phone);?>
        </div>
        <div class="form-group">
        <label>Password * </label>
        <?php echo form_input($password);?>
        </div>
        
        <div class="form-group">
         <label>Confirm password * </label>
        <?php echo form_input($confirmpass);?>
        </div>
        
        <div class="form-group">
        <label>Position * </label>
       <?php 
       $js = 'id="position" class="form-control"';
       echo form_dropdown('position',$position,'large', $js); 
       ?>
       </div>
        
       <div class="form-group">
       <label>Police region * </label>
       <?php 
       $js = 'id="region_police" class="form-control"';
       echo form_dropdown('position',$region_police,'large', $js); 
       ?>
        </div>
        
        <div class="form-group">
        <div id="space1"></div>
           </div>
        
         <div class="form-group">
         <div id="space2"></div>
           </div>
        
         <div class="form-group">
          <div id="space3"></div>
         </div>
        <div class="form-group">
          <div id="space4"></div>
         </div>
          
     <div class="form-group">
     <input type="submit" id='addnewuser' value='Add new user' class='btn btn-info'/>
     </div>
       
        <?php echo form_close(); ?>
    </div>
</div>


