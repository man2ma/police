<?php foreach($onedistrict->result() as $value){
   $district_name = $value->district_policename;
  }
?>
<br>
<br>
<div class='row'>
    <div class='col-xs-10'>
        
    </div>
    <div class="col-xs-2">
        <ul class="list-inline">
        <li><button class="btn btn-primary btn-sm" onclick="window.history.go(-1)"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</button></li>
        </ul>
    </div>
</div>

<legend><i class="glyphicon glyphicon-folder-close"></i> Kata za Wilaya ya Kipolisi ya <?php echo $district_name; ?></legend>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-striped ">
            <thead>
            <th>ID</th>
            <th>Kata</th>
            </thead>
            <tbody>
                <?php foreach($onedistrict->result() as $ward) : ?>
                <tr>
                    <td><?php echo $ward->ward_policeid; ?></td>
                    <td><?php echo $ward->ward_policename; ?></td>
                    <td><?php //echo anchor('admin/viewOneWard/'.$ward->ward_policeid,'<i class="glyphicon glyphicon-check"></i> Angalia zaidi',array('class'=>'btn btn-info')); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
        
    </div>
</div>