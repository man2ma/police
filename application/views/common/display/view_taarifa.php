<?php
$controller = $this->session->userdata('controller');
?>
<br/>
<br/>
<legend><i class='glyphicon glyphicon-tasks'></i><span class="alert-warning"> Orodha ya Taarifa </span></legend>
<div class='row'>
    <div class='col-xs-1'>
        <span class="badge pull-center">Idadi ya Taarifa : <?php echo $num_taarifa; ?></span>
    </div>
</div><br>


<br/>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-bordered ">
            <thead  class="alert alert-success" >
            <th <?php if($sort_by == 'rb_no')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewTaarifa/$query_id/rb_no/".(($sort_order == 'asc' && $sort_by == 'rb_no') ? 'desc' : 'asc'),'RB Namba') ?></th>
            <th <?php if($sort_by == 'date_added')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewTaarifa/$query_id/date_reported/".(($sort_order == 'asc' && $sort_by == 'date_reported') ? 'desc' : 'asc'), 'Tarehe ya kuripoti') ?></th>
            <th <?php if($sort_by == 'date_occured')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewTaarifa/$query_id/date_occurance/".(($sort_order == 'asc' && $sort_by == 'date_occurance') ? 'desc' : 'asc'), 'Tarehe ya Tukio') ?></th>
            <th>Kichwa cha Taarifa</th>
            <th>Taarifa yenyewe</th>
            <th <?php if($sort_by == 'region_policename')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewTaarifa/$query_id/region_policename/".(($sort_order == 'asc' && $sort_by == 'region_policename') ? 'desc' : 'asc'), 'Mkoa') ?></th>
            <th <?php if($sort_by == 'district_policename')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewTaarifa/$query_id/district_policename/".(($sort_order == 'asc' && $sort_by == 'district_policename') ? 'desc' : 'asc'), 'Wilaya') ?></th>
            <th <?php if($sort_by == 'ward_policename')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewTaarifa/$query_id/ward_policename/".(($sort_order == 'asc' && $sort_by == 'ward_policename') ? 'desc' : 'asc'), 'Kata') ?></th>
             <th>Tazama zaidi</th>
        </thead>
            <tbody>
                <?php foreach($taarifa as $offence) : ?>
                <tr>
                    <td><?php echo $offence->rb_no; ?></td>
                    
                    <td><?php echo date("F j, Y g:i a", strtotime($offence->date_added)); ?></td>
                    <td><?php echo date("F j, Y g:i a", strtotime($offence->date_occured)); ?></td>
                    <td><?php echo $offence->taarifa_title; ?></td>
                    <td><?php echo $offence->taarifa_content; ?></td>
                    <td><?php echo $offence->region_policename; ?></td>
                    <td><?php echo $offence->district_policename; ?></td>
                    <td><?php echo $offence->ward_policename; ?></td>
                    <td><?php echo anchor($controller.'/viewOneTaarifa/'.$offence->taarifa_id,'<i class="glyphicon glyphicon-eye-open"></i> Zaidi'); ?></td>
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
