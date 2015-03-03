<?php foreach($oneregion->result() as $value){
  $region_name = $value->region_policename;
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

<legend><i class="glyphicon glyphicon-folder-close"></i> Wilaya za Mkoa wa Kipolisi wa <?php echo $region_name; ?></legend>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-striped ">
            <thead>
            <th>ID</th>
            <th>Wilaya</th>
            </thead>
            <tbody>
                <?php foreach($oneregion->result() as $district) : ?>
                <tr>
                    <td><?php echo $district->district_policeid; ?></td>
                    <td><?php echo $district->district_policename; ?></td>
                    <td><?php echo anchor('admin/viewOneDistrict/'.$district->district_policeid,'<i class="glyphicon glyphicon-check"></i> Angalia zaidi',array('class'=>'btn btn-info')); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
        
    </div>
</div>