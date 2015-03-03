<?php 
$fname=  ucfirst($this->session->userdata('firstname'));
$lname=ucfirst($this->session->userdata('lastname'));
$fullname=$fname.' '.$lname;
//array('class'=>'btn btn-info')
?> 
 
<!-- Split button -->
<div class="pull-right">
<div class="btn-group">
<button type="button" class="btn btn-info"><?php  echo $fullname; ?></button>
       
       <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>

  <ul class="dropdown-menu" role="menu">
    <li class="divider"></li>
    <li><?php echo anchor('auditor/changePassword', 'Change Password'); ?></li>
    <li class="divider"></li>
  </ul>
</div>
<?php echo anchor('home/logout', 'Logout',array('class'=>'btn btn-info')); ?> 
</div>