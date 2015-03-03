
<div class="row">
    <div class="col-xs-4">
        
    </div>
   
    <?php echo $this->session->flashdata('message'); ?>
</div>

<legend><span class="label label-default">Change Password</span></legend>


          <?php
                $old_settings = array(
                    'name'        => 'old_pass',
                    'id'          => 'old_pass',
                    'type'        => 'password',
                    'placeholder' => 'Old password',
                    'class' => 'form-control'
                   );
                $new_settings = array(
                    'name'        => 'new_pass',
                    'id'          => 'new_pass',
                    'type'        => 'password',
                    'placeholder' => 'New password',
                    'class' => 'form-control'
                   );
                $confirm_settings = array(
                    'name'        => 'confirm_pass',
                    'id'          => 'confirm_pass',
                    'type'        => 'password',
                    'placeholder' => 'Confirm password',
                    'class' => 'form-control'
                   );
         $attributes = array('class' => 'form', 'id' => 'addMoney', 'role' => 'form');
         echo form_open('auditor/changePasswordDo' , $attributes); 
          ?>
     
      
      <label>Enter old password &#42;
        <?php
            echo form_input($old_settings);
        ?>  </label>
        <br/>
       <label>Enter New password &#42;
        <?php
            echo form_input($new_settings);
        ?>  </label>
        <br/>
        <label>Confirm new password &#42;
        <?php
            echo form_input($confirm_settings);
        ?> </label> 
     <br>
     <button type="submit" class="btn btn-info btn-sm" id="add_money">Change </button> 
      <?php echo anchor('auditor', '<span class="glyphicon glyphicon-remove"></span> Close', array('class' => 'btn btn-info btn-sm')); ?>
