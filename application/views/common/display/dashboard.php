<?php $controller = $this->session->userdata('controller'); ?>
<br>
<legend><i class="glyphicon glyphicon-tower"></i> My Dashboard</legend>
<br>
<div class="row">
    <div class="col-lg-2">
        
    </div>
    <?php if($controller == 'cro'){ ?>
     <div class="col-lg-2">
        <?php echo anchor($controller.'/newTaarifa','<i class="glyphicon glyphicon-pencil"></i><br> Taarifa Mpya',array('class'=>'btn btn-info btn-lg')); ?>
    </div>
    <div class="col-lg-2">
        <?php echo anchor($controller.'/newOffence','<i class="glyphicon glyphicon-pencil"></i><br> Tukio Jipya',array('class'=>'btn btn-info btn-lg')); ?>
    </div>
    <div class="col-lg-2">
        <?php echo anchor($controller.'/viewTaarifa','<i class="glyphicon glyphicon-tasks"></i><br> Tazama Taarifa',array('class'=>'btn btn-warning btn-lg')); ?>
    </div>
    <?php } ?>
    <div class="col-lg-2">
        <?php echo anchor($controller.'/viewOffence','<i class="glyphicon glyphicon-tasks"></i><br> Tazama Matukio',array('class'=>'btn btn-warning btn-lg')); ?>
    </div>
    <?php if($controller != 'cro'){ ?>
    <div class="col-lg-2">
        <?php echo anchor($controller.'/viewReports','<i class="glyphicon glyphicon-briefcase"></i><br> Tazama Ripoti',array('class'=>'btn btn-success btn-lg')); ?>
    </div>
    <?php } ?>
    </div>
    <br/>
    <br/>
    <legend></legend>
</div>

