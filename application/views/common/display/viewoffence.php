
<br/>
<br/>
<legend><i class='glyphicon glyphicon-tasks'></i><span class="alert-warning"> Orodha ya Matukio </span></legend>
<div class='row'>
    <div class='col-xs-1'>
        <span class="badge pull-center">Idadi ya Matukio : <?php echo $num_offence; ?></span>
    </div>
</div><br>


 <div class="row">
        <?php
        $controller = $this->session->userdata('controller');
        $attributes = array('class' => 'form-inline', 'id' => 'myform');
        echo form_open($controller.'/filterOffence', $attributes);
        
        $datarb = array('name' => 'searchbyrb','class' => 'form-control', 'id' => 'searchbyrb','placeholder'=>'Rb Namba');
        $datainput = array('name' => 'searchbydate','class' => 'form-control', 'id' => 'searchbydate','placeholder'=>'Tarehe ya kuripotiwa');
        echo form_open($controller.'/filterOffence', $attributes);
        ?>
     
   <?php if($this->session->userdata('controller') =='cro'){ ?>
       <div class="row">
     <div class='col-xs-2'>
         <i class='glyphicon glyphicon-filter'></i><label>Tafuta kwa :</label>
     </div>
       </div>
     <div class='col-xs-2'>
           <?php
            echo form_dropdown('crimetype_id',$crime_type, set_value('crimetype_id') ,'id="crimetype_id" class="form-control"');
            ?>
     </div>
     
     <div class='col-xs-2'>
           <?php
            echo form_dropdown('crimecat_id',$crime_category, set_value('crimecat_id') ,'id="crimecat_id" class="form-control"');
           ?>
     </div>  
      <div class='col-xs-3'>
           <?php echo form_input($datarb); ?>
          <div id="suggestedrbdropdown" style="display: none;">
              
              
          </div>
     </div> 
     <div class='col-xs-2'>
           <?php echo form_input($datainput); ?>
     </div>  
       
      <div class='col-xs-2'>
           <?php
            echo form_dropdown('offence_statusid',$offence_status, set_value('offence_statusid') ,'id="offence_statusid" class="form-control"');
           ?>
     </div>  
     
     
      
    
       <div class='col-xs-1'>
          <input type="submit" id="filter_button" name="submit" value="Tafuta" class="btn btn-primary"/>
     </div>    
          
     
           </div> 
  
    
      
<?php echo form_close(); ?>
   <?php }if($this->session->userdata('controller') =='ocs' || $this->session->userdata('controller') =='occid' || $this->session->userdata('controller') =='ocd'){ ?>
       <div class="row">
     <div class='col-xs-2'>
         <i class='glyphicon glyphicon-filter'></i><label>Tafuta kwa :</label>
     </div>
       </div>
     <div class='col-xs-2'>
           <?php
            echo form_dropdown('crimetype_id',$crime_type, set_value('crimetype_id') ,'id="crimetype_id" class="form-control"');
            ?>
     </div>
     
     <div class='col-xs-2'>
           <?php
            echo form_dropdown('crimecat_id',$crime_category, set_value('crimecat_id') ,'id="crimecat_id" class="form-control"');
           ?>
     </div>  
      <div class='col-xs-3'>
           <?php echo form_input($datarb); ?>
          <div id="suggestedrbdropdown" style="display: none;">
              
              
          </div>
     </div> 
     <div class='col-xs-2'>
           <?php echo form_input($datainput); ?>
     </div>  
       
      <div class='col-xs-2'>
           <?php
            echo form_dropdown('offence_statusid',$offence_status, set_value('offence_statusid') ,'id="offence_statusid" class="form-control"');
           ?>
     </div>  
     
     
      
    
       <div class='col-xs-1'>
          <input type="submit" id="filter_button" name="submit" value="Tafuta" class="btn btn-primary"/>
     </div>    
          
     
           </div> 
  
    
      
<?php echo form_close(); ?>

 
           
<?php echo form_close(); ?>
   <?php }if($this->session->userdata('controller') =='igp'){ ?>
       <div class="row">
     <div class='col-xs-2'>
         <i class='glyphicon glyphicon-filter'></i><label>Tafuta kwa :</label>
     </div>
       </div>
     <div class='col-xs-2'>
           <?php
            echo form_dropdown('crimetype_id',$crime_type, set_value('crimetype_id') ,'id="crimetype_id" class="form-control"');
            ?>
     </div>
     
     <div class='col-xs-1'>
           <?php
            echo form_dropdown('crimecat_id',$crime_category, set_value('crimecat_id') ,'id="crimecat_id" class="form-control"');
           ?>
     </div> 
           
     <div class='col-xs-2'>
           <?php
            echo form_dropdown('region_policeid',$region_police, set_value('region_policeid') ,'id="region_policeid" class="form-control"');
           ?>
     </div>
           
      <div class='col-xs-2'>
           <?php
            echo form_dropdown('district_policeid',$distric_police, set_value('district_policeid') ,'id="region_policeid" class="form-control"');
           ?>
     </div>
           
      <div class='col-xs-2'>
           <?php
            echo form_dropdown('ward_policeid',$ward_police, set_value('ward_policeid') ,'id="region_policeid" class="form-control"');
           ?>
     </div>       
<!--      <div class='col-xs-3'>
           <?php //echo form_input($datarb); ?>
          <div id="suggestedrbdropdown" style="display: none;">
              
              
          </div>
     </div> -->

       
      <div class='col-xs-2'>
           <?php
            echo form_dropdown('offence_statusid',$offence_status, set_value('offence_statusid') ,'id="offence_statusid" class="form-control"');
           ?>
     </div>  
     
     
      
    
       <div class='col-xs-1'>
          <input type="submit" id="filter_button" name="submit" value="Tafuta" class="btn btn-primary"/>
     </div>    
          
     
           </div> 
  
    
      
<?php echo form_close(); ?>
       <?php } ?>
           
 </div>
<br/>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-bordered ">
            <thead  class="alert alert-success" >
            <th <?php if($sort_by == 'rb_no')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/rb_no/".(($sort_order == 'asc' && $sort_by == 'rb_no') ? 'desc' : 'asc'),'RB Namba') ?></th>
            <th <?php if($sort_by == 'ir_no')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/ir_no/".(($sort_order == 'asc' && $sort_by == 'ir_no') ? 'desc' : 'asc'), 'IR Namba') ?></th>
            <?php if($this->session->userdata('controller') =='rpc'){ ?>
             <th <?php if($sort_by == 'rco_no')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/rco_no/".(($sort_order == 'asc' && $sort_by == 'rco_no') ? 'desc' : 'asc'), 'RCO Namba') ?></th>
            <?php }if($this->session->userdata('controller') =='hq'){ ?>
               <th <?php if($sort_by == 'rco_no')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/rco_no/".(($sort_order == 'asc' && $sort_by == 'rco_no') ? 'desc' : 'asc'), 'RCO Namba') ?></th>
               <th <?php if($sort_by == 'dci_no')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/hq/".(($sort_order == 'asc' && $sort_by == 'dci_no') ? 'desc' : 'asc'), 'DCI Namba') ?></th>

            <?php }if($this->session->userdata('controller') =='igp'){ ?>
               <th <?php if($sort_by == 'rco_no')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/rco_no/".(($sort_order == 'asc' && $sort_by == 'rco_no') ? 'desc' : 'asc'), 'RCO Namba') ?></th>
               <th <?php if($sort_by == 'dci_no')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/hq/".(($sort_order == 'asc' && $sort_by == 'dci_no') ? 'desc' : 'asc'), 'DCI Namba') ?></th>
               
            <?php }if($this->session->userdata('controller') =='csuhqx'){ ?>
                <th <?php if($sort_by == 'rco_no')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/rco_no/".(($sort_order == 'asc' && $sort_by == 'rco_no') ? 'desc' : 'asc'), 'RCO Namba') ?></th>
               <th <?php if($sort_by == 'dci_no')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/dci_no/".(($sort_order == 'asc' && $sort_by == 'dci_no') ? 'desc' : 'asc'), 'DCI Namba') ?></th>
               <th <?php if($sort_by == 'dossier_no')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/dossier_no/".(($sort_order == 'asc' && $sort_by == 'dci_no') ? 'desc' : 'asc'), 'Dossier Namba') ?></th>
            <?php }if($this->session->userdata('controller') =='dci'){ ?> 
             <th <?php if($sort_by == 'rco_no')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/rco_no/".(($sort_order == 'asc' && $sort_by == 'rco_no') ? 'desc' : 'asc'), 'RCO Namba') ?></th>
               <th <?php if($sort_by == 'dci_no')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/dci_no/".(($sort_order == 'asc' && $sort_by == 'dci_no') ? 'desc' : 'asc'), 'DCI Namba') ?></th>
               <th <?php if($sort_by == 'dossier_no')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/dossier_no/".(($sort_order == 'asc' && $sort_by == 'dci_no') ? 'desc' : 'asc'), 'Dossier Namba') ?></th>
            <?php }?>
            <th <?php if($sort_by == 'date_reported')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/date_reported/".(($sort_order == 'asc' && $sort_by == 'date_reported') ? 'desc' : 'asc'), 'Tarehe ya kuripoti') ?></th>
            <th <?php if($sort_by == 'date_occurance')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/date_occurance/".(($sort_order == 'asc' && $sort_by == 'date_occurance') ? 'desc' : 'asc'), 'Tarehe ya Tukio') ?></th>
            <th <?php if($sort_by == 'crimetype_name')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/crimetype_name/".(($sort_order == 'asc' && $sort_by == 'crimetype_name') ? 'desc' : 'asc'), 'Kundi la Kosa') ?></th>
            <th <?php if($sort_by == 'crimecat_name')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/crimecat_name/".(($sort_order == 'asc' && $sort_by == 'crimecat_name') ? 'desc' : 'asc'), 'Kosa lenyewe') ?></th>
            <th <?php if($sort_by == 'tukiostatus')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/tukiostatus/".(($sort_order == 'asc' && $sort_by == 'tukiostatus') ? 'desc' : 'asc'), 'Ukubwa wa Kosa') ?></th>
            <th <?php if($sort_by == 'offence_location')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/offence_location/".(($sort_order == 'asc' && $sort_by == 'offence_location') ? 'desc' : 'asc'), 'Mahali lilipotokea') ?></th>
            <th <?php if($sort_by == 'offence_statusname')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/offence_statusname/".(($sort_order == 'asc' && $sort_by == 'offence_statusname') ? 'desc' : 'asc'), 'Hatua ilipo') ?></th>
            
            <th <?php if($sort_by == 'region_policename')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/region_policename/".(($sort_order == 'asc' && $sort_by == 'region_policename') ? 'desc' : 'asc'), 'Mkoa') ?></th>
            <th <?php if($sort_by == 'district_policename')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/district_policename/".(($sort_order == 'asc' && $sort_by == 'district_policename') ? 'desc' : 'asc'), 'Wilaya') ?></th>
            <th <?php if($sort_by == 'ward_policename')  echo "class=\"$sort_order\""; ?>><?php echo anchor($controller."/viewOffence/$query_id/ward_policename/".(($sort_order == 'asc' && $sort_by == 'ward_policename') ? 'desc' : 'asc'), 'Kata') ?></th>
            <th>Tazama zaidi</th>
        </thead>
            <tbody>
                <?php foreach($offence as $offence) : ?>
                <tr>
                    <td><?php echo $offence->rb_no; ?></td>
                    <td>
                        <?php echo $offence->ir_no; ?>
                    </td>
                    <?php if($this->session->userdata('controller') =='rpc'){ ?>
                     <td>
                        <?php echo $offence->rco_no; ?>
                    </td>
                    <?php } ?>
                    
                     <?php if($this->session->userdata('controller') =='hq' || $this->session->userdata('controller') =='igp' ){ ?>
                    <td>
                        <?php echo $offence->rco_no; ?>
                    </td>
                     <td>
                        <?php echo $offence->dci_no; ?>
                    </td>
                  
                    <?php } ?>
                    
                       <?php if($this->session->userdata('controller') =='csuhqx'){ ?>
                    <td>
                        <?php echo $offence->rco_no; ?>
                    </td>
                     <td>
                        <?php echo $offence->dci_no; ?>
                    </td>
                    <td>
                        <?php echo $offence->dossier_no; ?>
                    </td>
                    <?php } ?>
                    
                        <?php if($this->session->userdata('controller') =='dci'){ ?>
                    <td>
                        <?php echo $offence->rco_no; ?>
                    </td>
                     <td>
                        <?php echo $offence->dci_no; ?>
                    </td>
                    <td>
                        <?php echo $offence->dossier_no; ?>
                    </td>
                    <?php } ?>
                    
                    
                    <td><?php echo date("F j, Y g:i a", strtotime($offence->date_reported)); ?></td>
                    <td><?php echo date("F j, Y g:i a", strtotime($offence->date_occurance)); ?></td>
                    <td><?php echo $offence->crimetype_name; ?></td>
                    <td><?php echo $offence->crimecat_name; ?></td>
                    <?php 
                      if($offence->tukiostatus == 1){ ?>
                       <td>Kosa dogo</td>
                     <?php }else{ ?>
                       <td>Kosa kubwa</td>
                     <?php } ?>
                    <td><?php echo $offence->offence_location; ?></td>
                    <td><?php echo $offence->offence_statusname; ?></td>
                    <td><?php echo $offence->region_policename; ?></td>
                    <td><?php echo $offence->district_policename; ?></td>
                    <td><?php echo $offence->ward_policename; ?></td>
                    <td><?php echo anchor($controller.'/viewOneOffence/'.$offence->offence_no,'<i class="glyphicon glyphicon-eye-open"></i> Zaidi'); ?></td>
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
