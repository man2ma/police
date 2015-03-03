<?php $controller = $this->session->userdata('controller'); ?>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><?php echo anchor($controller.'','<i class="glyphicon glyphicon-tower"></i> Dashboard'); ?></li>
        <?php if($controller == 'cro'){ ?>
         <li><?php echo anchor($controller.'/newTaarifa','<i class="glyphicon glyphicon-pencil"></i> Taarifa Mpya'); ?></li>
         <li><?php echo anchor($controller.'/newOffence','<i class="glyphicon glyphicon-pencil"></i> Tukio Jipya'); ?></li>
         <li><?php echo anchor($controller.'/viewTaarifa','<i class="glyphicon glyphicon-tasks"></i> Tazama Taarifa'); ?></li>
        <?php } ?>
        <li><?php echo anchor($controller.'/viewOffence','<i class="glyphicon glyphicon-tasks"></i> Tazama Matukio'); ?></li>
        <?php if($controller != 'cro'){ ?>
        <li><?php echo anchor($controller.'/viewReports','<i class="glyphicon glyphicon-briefcase"></i> Tazama Ripoti'); ?></li>
        <?php } ?>
        <?php if($controller == 'cro' || $controller == 'ocs'){ ?>
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-folder-close"></i> Tazama Matukio kwa:<span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><?php echo anchor($controller.'/viewFullOffence/rb','<i class="glyphicon glyphicon-folder-open"></i> Matukio kwa RB nzima'); ?></li>
          </ul>
        </li>
        <?php } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> <?php echo $this->session->userdata('firstname').' '.$this->session->userdata('lastname'); ?><span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="#">My Profile</a></li>
          </ul>
        </li>
        <li><?php echo anchor('home/logout','<i class="glyphicon glyphicon-lock"></i> Logout'); ?></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
