<br>
<br>
<legend><i class="glyphicon glyphicon-folder-close"></i> Aina za Makosa</legend>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-striped ">
            <thead>
            <th>S/N</th>
            <th>Aina ya Kosa</th>
            <th>Kitendo</th>
            </thead>
            <tbody>
                <?php foreach($makosa->result() as $kosa) : ?>
                <tr>
                    <td><?php echo $kosa->crimetype_id; ?></td>
                    <td><?php echo $kosa->crimetype_name; ?></td>
                    <td><?php echo anchor('admin/viewOneKosa/'.$kosa->crimetype_id,'<i class="glyphicon glyphicon-check"></i> Angalia zaidi',array('class'=>'btn btn-info')); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
        
    </div>
</div>