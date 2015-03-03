    <?php foreach ($request_data->result() as $value) {
         $status_id = $value->request_statusid;
         $request_id = $value->request_id;
       }?>
<div class='row'>
   <ul class="list-inline">   
    <?php if($status_id == 14 || $status_id == 15 || $status_id == 18){?>
       <li><?php echo anchor('auditor/forwardToRector/'.$request_id, '<span class="glyphicon glyphicon-ok"></span> Audited', array('class' => 'btn btn-primary btn-sm active','id' => 'audit_btn')); ?></li>
    <?php } ?>
    <?php if($status_id == 14 || $status_id == 16 || $status_id == 18){?>
     <li><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reject_btn"><i class='glyphicon glyphicon-remove'></i> Reject Request</button></li>
    <?php  } 
    if($status_id == 6 || $status_id == 14 || $status_id == 16){?> 
     <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#discuss_btn"><i class='glyphicon glyphicon-bullhorn '></i> Discuss</button></li>
     <?php } ?>
      
       
   </ul>
</div>