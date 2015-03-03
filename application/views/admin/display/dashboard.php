<br>
<legend><i class="glyphicon glyphicon-tower"></i> Admin Dashboard</legend>
<br>
<div class="row">
    <div class="col-lg-2">
        <?php echo anchor('admin/viewUsers','<i class="glyphicon glyphicon-user"></i><br> Manage Users',array('class'=>'btn btn-info btn-lg')); ?>
    </div>
    <div class="col-lg-2">
        <?php echo anchor('admin/viewMakosa','<i class="glyphicon glyphicon-folder-close"></i><br> Manage Makosa',array('class'=>'btn btn-warning btn-lg')); ?>
    </div>
    <div class="col-lg-2">
        <?php echo anchor('admin/viewLocations','<i class="glyphicon glyphicon-globe"></i><br> Manage Maeneo',array('class'=>'btn btn-success btn-lg')); ?>
    </div>   
    <div class="col-lg-2">
        <?php echo anchor('admin/viewStations','<i class="glyphicon glyphicon-screenshot"></i><br> Vituo vya Polisi',array('class'=>'btn btn-primary btn-lg')); ?>
    </div>
    <div class="col-lg-2">
        <?php echo anchor('admin/viewLogs','<i class="glyphicon glyphicon-cog"></i><br> View Logs',array('class'=>'btn btn-danger btn-lg')); ?>
    </div> 
    </div>
</div>

