<br>
<br>
<legend><i class="glyphicon glyphicon-folder-close"></i> Mikoa ya KiPolisi</legend>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-striped ">
            <thead>
            <th>ID</th>
            <th>Mkoa</th>
            </thead>
            <tbody>
                <?php foreach($locations->result() as $region) : ?>
                <tr>
                    <td><?php echo $region->region_policeid; ?></td>
                    <td><?php echo $region->region_policename; ?></td>
                    <td><?php echo anchor('admin/viewOneRegion/'.$region->region_policeid,'<i class="glyphicon glyphicon-check"></i> Angalia zaidi',array('class'=>'btn btn-info')); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
        
    </div>
</div>