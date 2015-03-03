<br>
<br>
<?php echo $this->session->flashdata('message'); ?>

<div class="row">
    <div class="col-xs-10">
        
    </div>
    <div class="col-xs-2">
        <ul class="list-inline">
        <li><?php echo anchor('admin/addPoliceStation/','<i class="glyphicon glyphicon-plus"></i> Add Police Station',array('class'=>'btn btn-primary')); ?></li>
        </ul>
    </div>
</div>
<legend><i class="glyphicon glyphicon-screenshot"></i> List of Stations</legend>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-striped ">
          <thead>
            <th <?php if($sort_by == 'station_id')  echo "class=\"$sort_order\""; ?>><?php echo anchor("admin/viewStations/$query_id/station_id/".(($sort_order == 'asc' && $sort_by == 'station_id') ? 'desc' : 'asc'), 'Station id') ?></th>
            <th <?php if($sort_by == 'station_name')  echo "class=\"$sort_order\""; ?>><?php echo anchor("admin/viewStations/$query_id/station_name/".(($sort_order == 'asc' && $sort_by == 'station_name') ? 'desc' : 'asc'), 'Police Station') ?></th>
            <th <?php if($sort_by == 'region_policename')  echo "class=\"$sort_order\""; ?>><?php echo anchor("admin/viewStations/$query_id/region_policename/".(($sort_order == 'asc' && $sort_by == 'region_policename') ? 'desc' : 'asc'), 'Region') ?></th>
            <th <?php if($sort_by == 'district_policename')  echo "class=\"$sort_order\""; ?>><?php echo anchor("admin/viewStations/$query_id/district_policename/".(($sort_order == 'asc' && $sort_by == 'district_policename') ? 'desc' : 'asc'), 'District') ?></th>
            <th <?php if($sort_by == 'ward_policename')  echo "class=\"$sort_order\""; ?>><?php echo anchor("admin/viewStations/$query_id/ward_policename/".(($sort_order == 'asc' && $sort_by == 'ward_policename') ? 'desc' : 'asc'), 'Ward') ?></th>
            <th>Action</th>
           </thead>
           <tbody>
                <?php foreach($stations as $stations) : ?>
                <tr>
                    <td><?php echo $stations->station_id; ?></td>
                    <td><?php echo strtoupper($stations->station_name);?></td>
                    <td><?php echo strtoupper($stations->region_policename); ?></td>
                    <td><?php echo strtoupper($stations->district_policename); ?></td>
                    <td><?php echo strtoupper($stations->ward_policename); ?></td>
                    <td><?php echo anchor('admin/deleteStation/'.$stations->station_id,'<i class="glyphicon glyphicon-remove"></i> Delete',array('class'=>'btn btn-danger','id'=>'delete_station_btn')); ?></td>
                </tr>
                <?php endforeach; ?>
          </tbody>
            
        </table>
        
        <?php if(strlen($pagination)): ?>
        <div>
            Pages: <?php echo $pagination; ?>
        </div>
        <?php endif; ?>
    </div>
</div>