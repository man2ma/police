<?php
if($crimetype_id == 1){
    $aina_kosa = 'Makosa dhidi ya Binadamu';
}elseif ($crimetype_id == 2) {
    $aina_kosa = 'Makosa dhidi ya maadili ya jamii';
}elseif ($crimetype_id == 3) {
    $aina_kosa = 'Makosa ya kuwania Mali';
}elseif ($crimetype_id == 4) {
    $aina_kosa = 'Makosa ya usalama barabarani';
}
?>
<br>
<br>
<?php echo $this->session->flashdata('message'); ?>

<div class="row">
    <div class="col-xs-8">
        
    </div>
    <div class="col-xs-4">
        <ul class="list-inline">
        <li><button class="btn btn-primary btn-sm" onclick="window.history.go(-1)"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</button></li>
        <li><?php echo anchor('admin/addMakosa/'.$crimetype_id,'<i class="glyphicon glyphicon-plus"></i> Ongeza Kipengele cha Kosa',array('class'=>'btn btn-primary')); ?></li>
        </ul>
    </div>
</div>
<legend><i class="glyphicon glyphicon-folder-open"></i>  <?php echo $aina_kosa; ?></legend>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-striped ">
            <thead>
            <th>ID</th>
            <th>Kipengele cha Kosa</th>
            <th>Kitendo</th>
            </thead>
            <tbody>
                <?php foreach($onekosa->result() as $kosa) : ?>
                <tr>
                    <td><?php echo $kosa->crimecat_id; ?></td>
                    <td><?php echo $kosa->crimecat_name; ?></td>
                     <td><?php echo anchor('admin/editOneKosa/'.$kosa->crimecat_id.'/'.$kosa->crimecat_name,'<i class="glyphicon glyphicon-edit"></i> Badili',array('class'=>'btn btn-info')); ?>
                     <?php echo anchor('admin/deleteOneKosa/'.$kosa->crimecat_id.'/'.$crimetype_id,'<i class="glyphicon glyphicon-remove"></i> Ondoa',array('class'=>'btn btn-danger','id'=>'delete_kipengele_kosa')); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
        
    </div>
</div>