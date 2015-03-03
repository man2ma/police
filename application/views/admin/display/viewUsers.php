<br>
<br>
<div class="row">
    <div class="col-xs-10">
        
    </div>
    <div class="col-xs-2">
        <ul class="list-inline">
        <li><?php echo anchor('admin/newUser/','<i class="glyphicon glyphicon-plus"></i> New User',array('class'=>'btn btn-primary')); ?></li>
        </ul>
    </div>
</div>
<legend><i class="glyphicon glyphicon-user"></i> List of Users</legend>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-striped ">
            <thead>
            <th>Force No</th>
            <th <?php if($sort_by == 'fname')  echo "class=\"$sort_order\""; ?>><?php echo anchor("admin/viewUsers/$query_id/fname/".(($sort_order == 'asc' && $sort_by == 'fname') ? 'desc' : 'asc'), 'Full Name') ?></th>
            <th <?php if($sort_by == 'region_policename')  echo "class=\"$sort_order\""; ?>><?php echo anchor("admin/viewUsers/$query_id/region_policename/".(($sort_order == 'asc' && $sort_by == 'region_policename') ? 'desc' : 'asc'), 'Region') ?></th>
            <th <?php if($sort_by == 'district_police_name')  echo "class=\"$sort_order\""; ?>><?php echo anchor("admin/viewUsers/$query_id/district_police_name/".(($sort_order == 'asc' && $sort_by == 'district_police_name') ? 'desc' : 'asc'), 'District') ?></th>
            <th <?php if($sort_by == 'ward_policename')  echo "class=\"$sort_order\""; ?>><?php echo anchor("admin/viewUsers/$query_id/ward_policename/".(($sort_order == 'asc' && $sort_by == 'ward_policename') ? 'desc' : 'asc'), 'Ward') ?></th>
            <th <?php if($sort_by == 'user_typename')  echo "class=\"$sort_order\""; ?>><?php echo anchor("admin/viewUsers/$query_id/user_typename/".(($sort_order == 'asc' && $sort_by == 'user_typename') ? 'desc' : 'asc'), 'Position') ?></th>
            <th <?php if($sort_by == 'station_name')  echo "class=\"$sort_order\""; ?>><?php echo anchor("admin/viewUsers/$query_id/station_name/".(($sort_order == 'asc' && $sort_by == 'station_name') ? 'desc' : 'asc'), 'Station') ?></th>
            <th <?php if($sort_by == 'userstatus_name')  echo "class=\"$sort_order\""; ?>><?php echo anchor("admin/viewUsers/$query_id/userstatus_name/".(($sort_order == 'asc' && $sort_by == 'userstatus_name') ? 'desc' : 'asc'), 'User Status') ?></th>
            <th>View More</th>
           </thead>
            <tbody>
                <?php foreach($users as $users) : ?>
                <tr>
                    <td><?php echo $users->force_no; ?></td>
                    <td><?php echo strtoupper($users->fname.' '.$users->midname.' '.$users->lname);?></td>
                    <td><?php echo strtoupper($users->region_policename); ?></td>
                    <td><?php echo strtoupper($users->district_policename); ?></td>
                    <td><?php echo strtoupper($users->ward_policename); ?></td>
                    <td><?php echo strtoupper($users->user_typename); ?></td>
                    <td><?php echo strtoupper($users->station_name); ?></td>
                    <td><?php echo strtoupper($users->userstatus_name); ?></td>
                    <td><?php echo anchor('admin/userMoreinfo/'.$users->id,"<i class='glyphicon glyphicon-eye-open icon-black'>");?></td>
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
