<?php 
    $email_settings = array(
        'name'        => 'number',
        'id'          => 'number',
        'type'        =>  'text',
        'value'       => set_value('email'),
        'placeholder' => 'Namba ya Mtumiaji',
         'class' => 'form-control'  
    );

    $password_settings = array(
        'name'        => 'password',
        'id'          => 'password',
        'type'        => 'password',
        'placeholder' => "&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;",
        'class' => 'form-control'
    );

    $attributes = array('class' => 'form', 'id' => 'loginForm', 'role' => 'form');
    echo form_open('home/doLogin' , $attributes); 
?>
<div class="row">
         <div class="col-xs-5">
             
         </div>
         <div class="col-xs-3">
             <img src="<?php echo base_url().'images/logo.jpg'?>"  height="100" width="75">
             
         </div>
</div>
<br/>
<div class="row">
         <div class="col-xs-1">
             
         </div>
         <div class="col-xs-11">
         
             <p style="font-family: fantasy;text-align:center; font-size:28px; color:blue;">CRIME STATISTICS INFORMATION MANAGEMENT SYSTEM</p>
         </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-lock"></span> <b>Ingia</b></div>
  <div class="panel-body">

    <br/>
    <div class="form-group">
    <label>Namba ya Mtumiaji</label>
        <?php
            echo form_error('number','<div class="error" id="statusmessage">', '</div>');
            echo form_input($email_settings);
            
        ?>     
    </div>
 
    <div class="form-group">
    <label>Neno la Siri</label>
        <?php
            echo form_error('password','<div class="error" id="statusmessage">', '</div>');
            echo form_password($password_settings);
        ?>      
    </div>
    <br/>
  <div class="row">
     <div class="col-xs-4"> 
    
     </div>
    <div class="col-xs-6">    
    <button type="submit" class="btn btn-info">Ingia</button>
    <?php echo '&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.anchor( 'home/forgot_password', 'Umesahau neno la Siri <span class="glyphicon glyphicon-question-sign"></span>'); ?>   
    </div>
   </div>
 </div>
</div>
<?php echo form_close(); ?>