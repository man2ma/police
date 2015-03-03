<?php
 $data['mhusikainfo'] = $mhusikainfo;
?>
<?php foreach($oneoffence->result() as $off) { 
   $offence_id = $off->offence_no;
   $offence_status = $off->offence_statusid;
   $offence_ir = $off->ir_no;

 } ?>

<br/>
<br/>
<div class='row'>
    <div class="col-xs-10" >
      
        <?php if($this->session->userdata('controller') =='cro'){ ?>
        <?php if(($this->session->userdata('station_classid')) ==1){ ?>
        <?php if($offence_status==1){ ?>
  
   
        
         <?php }elseif($offence_status==2){  ?>
        
              <?php // echo anchor('cro/transfer_to_District/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i> Peleka Wilayani', array('class' => "btn btn-success btn-sm",'id'=>"send_wilayani")); ?>
              <!--<div id="send_close" class="btn btn-danger btn-sm"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id;?>"><i class="glyphicon glyphicon-eye-close">Funga</i></a></div>-->
                <div id="courtforminfo" style="display: none;"></div>
                   <div id="courtclosing" style="display: none;"></div>
         <?php } ?>
        
        
        
        
          <?php }elseif(($this->session->userdata('station_classid')) ==2 || ($this->session->userdata('station_classid'))==3){ ?>
                <?php if($offence_status==1){ ?>
                   <?php // echo anchor('cro/transfer_to_District/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i> Peleka Wilayani', array('class' => "btn btn-success btn-sm",'id'=>"send_wilayani")); ?>
                  <?php } ?>
        
          <?php } ?>
        
        
         <?php }if($this->session->userdata('controller') =='ocs'){ //end of checking for transfer button by charge room officer // ?>
          
       
         <?php if(($this->session->userdata('station_classid')) ==1){ ?>
            <?php if($offence_status==1){ ?>
        
            <?php }elseif ($offence_status==2) { ?>
                      <ul class="list-inline">   
                     <li>
                  <?php echo anchor('ocs/transfer_to_District/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i> Peleka Wilayani', array('class' => "btn btn-success btn-sm",'id'=>"send_wilayani")); ?>
               
                  <label class="btn btn-warning btn" id="send_mahakamani"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id; ?>"><i class="glyphicon glyphicon-arrow-right"></i>Peleka mahakamani</a></label>
                 <div id="send_close" class="btn btn-danger btn-sm"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id;?>"><i class="glyphicon glyphicon-eye-close">Funga</i></a></div>
                  <div id="courtforminfo" style="display: none;"></div>
                   <div id="courtclosing" style="display: none;"></div>
                          
                         </li>
                    </ul>
             <?php }elseif ($offence_status==8) { ?>
                   <?php echo anchor('ocs/transfer_to_District/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i> Peleka Wilayani', array('class' => "btn btn-success btn-sm",'id'=>"send_wilayani")); ?>
                    <div id="courtforminfo" style="display: none;"></div>
                   <div id="courtclosing" style="display: none;"></div>
                   <div id="send_close" class="btn btn-danger btn-sm"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id;?>"><i class="glyphicon glyphicon-eye-close">Funga</i></a></div>
             
              <?php } ?>

        <?php }elseif(($this->session->userdata('station_classid')) ==2 || ($this->session->userdata('station_classid'))==3){ ?>
             <div id="courtforminfo" style="display: none;"></div>
                   <div id="courtclosing" style="display: none;"></div>       
           <div id="send_close" class="btn btn-danger btn-sm"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id;?>"><i class="glyphicon glyphicon-eye-close">Funga</i></a></div>
         <?php echo anchor('ocs/transfer_to_District/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i> Peleka Wilayani', array('class' => "btn btn-success btn-sm",'id'=>"send_wilayani")); ?>
        <?php } ?>
        
        
        
         <?php } if($this->session->userdata('controller') =='ocd'){ ?>
       <ul class="list-inline">   
          <li>
              
              <?php if($offence_status==3){ ?>
               <?php if($off->ir_no == 'Haijawekwa'){ ?>
               <?php  }else{ ?>
              <?php echo anchor('ocd/transfer_to_Region/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i> Peleka Mkoani', array('class' => "btn btn-success btn-sm",'id'=>"send_mkoani")); ?>
              <label class="btn btn-warning btn" id="send_mahakamani"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id; ?>"><i class="glyphicon glyphicon-arrow-right"></i>Peleka mahakamani</a></label>
                 <div id="courtforminfo" style="display: none;"></div>
                   <div id="courtclosing" style="display: none;"></div>
                <?php echo anchor('ocd/transfer_to_Close/'.$offence_id, '<i class="glyphicon glyphicon-eye-close"></i> Funga', array('class' => "btn btn-danger btn-sm",'id'=>"send_mahakamani")); ?>
               <?php } ?>
               <?php }elseif ($offence_status==9){ ?>
                 <?php echo anchor('ocd/transfer_to_Region/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i> Peleka Mkoani', array('class' => "btn btn-success btn-sm",'id'=>"send_mkoani")); ?>
                   <div id="courtforminfo" style="display: none;"></div>
                   <div id="courtclosing" style="display: none;"></div>
                    <div id="send_close" class="btn btn-danger btn-sm"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id;?>"><i class="glyphicon glyphicon-eye-close">Funga</i></a></div>
              <?php  } ?>
          </li>
        </ul>
        <?php } if($this->session->userdata('controller') =='occid'){  ?>
       
        <ul class="list-inline">   
          <li>
              
              <?php if($offence_status==3){ ?>
               <?php if($off->ir_no == 'Haijawekwa'){ ?>
              
              
               <?php  }else{ ?>
              
              <?php echo anchor('occid/transfer_to_Region/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i> Peleka Mkoani', array('class' => "btn btn-success btn-sm",'id'=>"send_mkoani")); ?>
              <label class="btn btn-warning btn" id="send_mahakamani"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id; ?>"><i class="glyphicon glyphicon-arrow-right"></i>Peleka mahakamani</a></label>
                  <div id="courtforminfo" style="display: none;"></div>
               <div id="send_close" class="btn btn-danger btn-sm"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id;?>"><i class="glyphicon glyphicon-eye-close">Funga</i></a></div>
               <?php } ?>
              
              
               <?php }elseif($offence_status==9){ ?>
                 <?php echo anchor('occid/transfer_to_Region/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i> Peleka Mkoani', array('class' => "btn btn-success btn-sm",'id'=>"send_mkoani")); ?>
                  <div id="courtforminfo" style="display: none;"></div>
                   <div id="courtclosing" style="display: none;"></div>
                   <div id="send_close" class="btn btn-danger btn-sm"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id;?>"><i class="glyphicon glyphicon-eye-close">Funga</i></a></div>
              <?php  } ?>
          </li>
        </ul>
        <?php } ?>
        
        
        <?php if($this->session->userdata('controller') =='rpc'){ ?>
        <ul class="list-inline">   
          <li >
              
              <?php if($offence_status==4){ ?>
               <?php if($off->rco_no == 'Haijawekwa'){ ?>
              
                <?php  }else{ ?>
                 <?php echo anchor('rpc/transfer_to_Hq/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i>Peleka Makao Makuu', array('class' => "btn btn-success btn-sm",'id'=>"send_hq")); ?>
                     <label class="btn btn-warning btn" id="send_mahakamani"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id; ?>"><i class="glyphicon glyphicon-arrow-right"></i>Peleka mahakamani</a></label>
                       <div id="courtforminfo" style="display: none;"></div>
                      <div id="courtclosing" style="display: none;"></div>
                      <div id="send_close" class="btn btn-danger btn-sm"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id;?>"><i class="glyphicon glyphicon-eye-close">Funga</i></a></div>
                <?php }?>
              
              
              <?php }elseif ($offence_status==10){ ?>
                 <?php echo anchor('rpc/transfer_to_Hq/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i>Peleka Makao Makuu', array('class' => "btn btn-success btn-sm",'id'=>"send_hq")); ?> 
                       <div id="courtforminfo" style="display: none;"></div>
                   <div id="courtclosing" style="display: none;"></div>
                      <div id="send_close" class="btn btn-danger btn-sm"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id;?>"><i class="glyphicon glyphicon-eye-close">Funga</i></a></div>
              <?php } ?>
              
            
          </li>
        </ul>
       
        <?php }elseif($this->session->userdata('controller') =='rco'){ ?>
        <ul class="list-inline">   
          <li>
              
              <?php if($offence_status==4){ ?>
               <?php if($off->rco_no == 'Haijawekwa'){ ?>
              
                <?php  }else{ ?>
                 <?php echo anchor('rco/transfer_to_Hq/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i>Peleka Makao Makuu', array('class' => "btn btn-success btn-sm",'id'=>"send_hq")); ?>
                     <label class="btn btn-warning btn" id="send_mahakamani"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id; ?>"><i class="glyphicon glyphicon-arrow-right"></i>Peleka mahakamani</a></label>
                       <div id="courtforminfo" style="display: none;"></div>
                       <div id="courtclosing" style="display: none;"></div>
                       <div id="send_close" class="btn btn-danger btn-sm"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id;?>"><i class="glyphicon glyphicon-eye-close">Funga</i></a></div>
                <?php }?>
              
              
              <?php }elseif ($offence_status==10){ ?>
                 <?php echo anchor('rco/transfer_to_Hq/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i>Peleka Makao Makuu', array('class' => "btn btn-success btn-sm",'id'=>"send_hq")); ?> 
                     <div id="courtforminfo" style="display: none;"></div>
                       <div id="courtclosing" style="display: none;"></div>
                    <div id="send_close" class="btn btn-danger btn-sm"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id;?>"><i class="glyphicon glyphicon-eye-close">Funga</i></a></div>
              <?php } ?>
              
            
          </li>
        </ul>
       <?php }elseif($this->session->userdata('controller') =='csuhqx'||$this->session->userdata('controller') =='csuhqy'||$this->session->userdata('controller') =='csuhqz'){ ?>
        <ul class="list-inline">   
            <li>
              
               <?php if($off->dossier_no == 'Haijawekwa'){ ?>
              
               
              
              
              <?php }else{?>
             <?php if($offence_status==6){ ?>
              
             <?php }else{ ?>
                <?php echo anchor($this->session->userdata('controller').'/transfer_to_Dci/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i>Peleka Kwa DCI', array('class' => "btn btn-success btn-sm",'id'=>"send_dci")); ?>
                <?php } ?>
              
              <?php } ?>
          </li>
        </ul>
      <?php }elseif($this->session->userdata('controller') =='dci'){ ?>
        
          <ul class="list-inline">   
         <li class='label'>
              
               <?php if($off->dossier_no == 'Haijawekwa'){ ?>
              
              <?php }else{?>
             <?php if($offence_status==6){ ?>
               <?php echo anchor($this->session->userdata('controller').'/transfer_to_Dpp/'.$offence_id, '<i class="glyphicon glyphicon-asterisk"></i>Peleka Kwa DPP', array('class' => "btn btn-success btn-sm",'id'=>"send_dci")); ?>
                   <div id="courtforminfo" style="display: none;"></div>
                      <div id="courtclosing" style="display: none;"></div>
                      <div id="send_close" class="btn btn-danger btn-sm"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id;?>"><i class="glyphicon glyphicon-eye-close">Funga</i></a></div>
             <?php }else{ ?>
               
                <?php } ?>
              
              <?php } ?>
          </li>
        </ul> 
        
        
        
        
        
     <?php }elseif($this->session->userdata('controller') =='dpp'){ ?>
        
          <ul class="list-inline">   
         <li>
             <?php if($offence_status==7){ ?>
              <label class="btn btn-warning btn" id="send_mahakamani"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id; ?>"><i class="glyphicon glyphicon-arrow-right"></i>Peleka mahakamani</a></label>
                    <div id="courtforminfo" style="display: none;"></div>
                   <div id="courtclosing" style="display: none;"></div>
               <div id="send_close" class="btn btn-danger btn-sm"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id;?>"><i class="glyphicon glyphicon-eye-close">Funga</i></a></div>
             <?php }elseif ($offence_status==11){ ?>
               <div id="courtforminfo" style="display: none;"></div>
                      <div id="courtclosing" style="display: none;"></div>
                      <div id="send_close" class="btn btn-danger btn-sm"><a href="" data-controller="<?php echo $this->session->userdata('controller'); ?>" data-offence="<?php echo $offence_id;?>"><i class="glyphicon glyphicon-eye-close">Funga</i></a></div>
                <?php } ?>
          </li>
        </ul> 
       
      <?php } ?>
     <?php if($offence_status>11){ ?>   
        
        <span class="label-imefungwa">Imefungwa</span>
     <?php }?>   
    </div>
    <div class="col-xs-2">
        <ul class="list-inline">   
          <li><button class="btn btn-primary btn-sm" onclick="window.history.go(-1)"><span class="glyphicon glyphicon-circle-arrow-left"></span> Rudi nyuma</button></li>
        </ul>
    </div>
</div> 
<div class="row">
    <div class="col-xs-12">
        <table class="table table-bordered ">
           <thead  class="alert alert-success" >
            <th>RB Namba</th>
            <th>IR Namba</th>
            <?php if(($this->session->userdata('controller') =='rpc')||($this->session->userdata('controller') =='rco')){ ?>
            <th>RCO Namba</th>
            <?php } ?>
            <?php if(($this->session->userdata('controller') =='hq')){ ?>
            <th>RCO Namba</th>
            <th>DCI Namba</th>
            <?php } ?>
             <?php if(($this->session->userdata('controller') =='csuhqx')){ ?>
            <th>RCO Namba</th>
            <th>DCI Namba</th>
            <th>Dossier Namba</th>
            <?php } ?>
            <?php if(($this->session->userdata('controller') =='csuhqy')){ ?>
            <th>RCO Namba</th>
            <th>DCI Namba</th>
            <th>Dossier Namba</th>
            <?php } ?>
            <?php if(($this->session->userdata('controller') =='csuhqz')){ ?>
            <th>RCO Namba</th>
            <th>DCI Namba</th>
            <th>Dossier Namba</th>
            <?php } ?>
            <?php if(($this->session->userdata('controller') =='dci')){ ?>
            <th>RCO Namba</th>
            <th>DCI Namba</th>
            <th>Dossier Namba</th>
            <?php } ?>
             <?php if(($this->session->userdata('controller') =='dpp')){ ?>
            <th>DCI Namba</th>
            <th>Dossier Namba</th>
            <?php } ?>
            <th>Tarehe ya kuripoti</th>
            <th>Tarehe ya Tukio</th>
            <th>Kundi la Kosa</th>
            <th>Kosa lenyewe</th>
            <th>Ukubwa wa Kosa</th>
            <th>Mahali lilipotokea</th>
            <th>Hatua ilipo</th>
           </thead>
           <tbody>
                <?php foreach($oneoffence->result() as $offence) : ?>
                <tr>
                    <td><?php echo $offence->rb_no; ?></td>
                    <td>
                        
                        <?php if($offence->ir_no== 'Haijawekwa'){ ?>
                        
                         <?php if($this->session->userdata('controller') =='cro'){ ?>
                        
                        <?php if(($this->session->userdata('station_classid')) ==1){ ?>
                        
                        
                          <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#assignIR"><span class="glyphicon glyphicon-tags"></span>  <?php echo $offence->ir_no; ?></button></li>
                         <?php }else{ ?>
                     
                              <?php echo $offence->ir_no;  ?>    
                          <?php } ?>
                        
                        <?php }elseif($this->session->userdata('controller') =='ocs'){ ?>
                          
                           <?php if(($this->session->userdata('station_classid')) ==1){ ?>
                           <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#assignIR"><span class="glyphicon glyphicon-tags"></span>  <?php echo $offence->ir_no; ?></button></li>
                           <?php }else{?>
                        <?php echo $offence->ir_no; ?>
                           <?php } ?>
                        <?php }elseif($this->session->userdata('controller') =='ocd'){ ?>
                           
                             <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#assignIR"><span class="glyphicon glyphicon-tags"></span>  <?php echo $offence->ir_no; ?></button></li>
                           
                        <?php }elseif($this->session->userdata('controller') =='occid'){ ?>
                             <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#assignIR"><span class="glyphicon glyphicon-tags"></span>  <?php echo $offence->ir_no; ?></button></li>
                        <?php } ?>
                           
                        <?php }else{ ?>
                           
                              <?php echo $offence->ir_no; ?>
                          
                        <?php } ?>
                    </td>
                    
                    
                    
            
                    
                       <?php if($this->session->userdata('controller') =='rco'){ ?>
                         <td>
                        <?php if($offence->rco_no =='Haijawekwa'){ ?>
                         <?php if($offence_status<4){ ?>    
                             <label class="btn-police">Hajawekwa</label>
                          <?php }else{ ?>   
                 
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#assignRCO"><span class="glyphicon glyphicon-tags"></span>  <?php echo $offence->rco_no; ?></button></li>
                        
                        <?php } ?>
                          
                        <?php }else{ ?>
                        
                        <?php  echo $offence->rco_no;?>
                        <?php } ?>
 
                        </td>
                     
                       <?php }elseif($this->session->userdata('controller') =='rpc'){ ?>
                        
                         <td>
  
                        <?php if($offence->rco_no =='Haijawekwa'){ ?>
                         <?php if($offence_status<4){ ?>    
                             <label class="btn-police">Hajawekwa</label>
                          <?php }else{ ?>   
                 
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#assignRCO"><span class="glyphicon glyphicon-tags"></span>  <?php echo $offence->rco_no; ?></button></li>
                        
                        <?php } ?>
                          
                        <?php }else{ ?>
                        
                        <?php  echo $offence->rco_no;?>
                        <?php } ?>
 
                        </td>
                        
                        <?php }elseif($this->session->userdata('controller') =='hq'){ ?>
                        <td>
                        <?php if($offence->rco_no == 'Haijawekwa'){ ?>
                        <?php  echo $offence->rco_no;?>
                        <?php }else{ ?>
                          <?php  echo $offence->rco_no;?>
                        <?php } ?>
                        </td> 
                        
                        <td>
                           <?php if($offence->dci_no== 'Haijawekwa'){ ?> 
                     
                         <?php if($offence_status<5){ ?> 
                             <label class="btn-police">Hajawekwa</label>
                         <?php }elseif($offence_status==5){ ?>
                          <?php if(($offence->ir_no!= 'Haijawekwa')&&($offence->rco_no!= 'Haijawekwa')){ ?>
                            
                             <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#assignDCI"><span class="glyphicon glyphicon-tags"></span>  <?php echo $offence->dci_no; ?></button></li>
                             
                             <?php }else{ ?>
                             <?php  echo $offence->dci_no;?>
                            <?php }?>
                         <?php }elseif($offence_status==10){ ?>
                             
                                <label class="btn-police">Hajawekwa</label>
  
                            <?php }?>
                                
                             <?php }else{ ?>
                                 <?php  echo $offence->dci_no;?>
                                
                             <?php } ?>
                        </td>
                        
                        
                        <?php }elseif($this->session->userdata('controller') =='csuhqx'){ ?>
                         <td>
                        <?php if($offence->rco_no == 'Haijawekwa'){ ?>
                        <?php  echo $offence->rco_no;?>
                        <?php }else{ ?>
                          <?php  echo $offence->rco_no;?>
                        <?php } ?>
                        </td> 
                        
                        <td>
                           <?php if($offence->dci_no == 'Haijawekwa'){ ?> 
                            
                            <?php if(($offence->ir_no!= 'Haijawekwa')&&($offence->rco_no!= 'Haijawekwa')){ ?>
                             <?php  echo $offence->dci_no;?>
                            <?php }else{ ?>
                             <?php  echo $offence->dci_no;?>
                            <?php }?>
                             
                           <?php }else{ ?>
                          <?php  echo $offence->dci_no;?>
                        <?php } ?> 
                            
                        </td>

                   <td>
                          <?php if($offence->dossier_no == 'Haijawekwa'){ ?> 
                            
                            <?php if(($offence->ir_no!= 'Haijawekwa')&&($offence->rco_no!= 'Haijawekwa')&&($offence->dci_no!= 'Haijawekwa')){ ?>
                             <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#assignDossierno"><span class="glyphicon glyphicon-tags"></span>  <?php echo $offence->dossier_no; ?></button></li>
                            <?php }else{ ?>
                             <?php  echo $offence->dossier_no;?>
                             1
                            <?php }?>
                             
                           <?php }else{ ?>
                          <?php  echo $offence->dossier_no;?>
                        <?php } ?>   
                        </td>
                         <?php }elseif($this->session->userdata('controller') =='csuhqy'){ ?>
                        
                            <td>
                        <?php if($offence->rco_no == 'Haijawekwa'){ ?>
                        <?php  echo $offence->rco_no;?>
                        <?php }else{ ?>
                          <?php  echo $offence->rco_no;?>
                        <?php } ?>
                        </td> 
                        
                        <td>
                           <?php if($offence->dci_no == 'Haijawekwa'){ ?> 
                            
                            <?php if(($offence->ir_no!= 'Haijawekwa')&&($offence->rco_no!= 'Haijawekwa')){ ?>
                             <?php  echo $offence->dci_no;?>
                            <?php }else{ ?>
                             <?php  echo $offence->dci_no;?>
                            <?php }?>
                             
                           <?php }else{ ?>
                          <?php  echo $offence->dci_no;?>
                        <?php } ?> 
                            
                        </td>

                             <td>
                          <?php if($offence->dossier_no == 'Haijawekwa'){ ?> 
                            
                            <?php if(($offence->ir_no!= 'Haijawekwa')&&($offence->rco_no!= 'Haijawekwa')&&($offence->dci_no!= 'Haijawekwa')){ ?>
                             <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#assignDossierno"><span class="glyphicon glyphicon-tags"></span>  <?php echo $offence->dossier_no; ?></button></li>
                            <?php }else{ ?>
                             <?php  echo $offence->dossier_no;?>
                             1
                            <?php }?>
                             
                           <?php }else{ ?>
                          <?php  echo $offence->dossier_no;?>
                        <?php } ?>   
                        </td>
                        
                         <?php }elseif($this->session->userdata('controller') =='csuhqz'){ ?>
                        
                            <td>
                        <?php if($offence->rco_no == 'Haijawekwa'){ ?>
                        <?php  echo $offence->rco_no;?>
                        <?php }else{ ?>
                          <?php  echo $offence->rco_no;?>
                        <?php } ?>
                        </td> 
                        
                        <td>
                           <?php if($offence->dci_no == 'Haijawekwa'){ ?> 
                            
                            <?php if(($offence->ir_no!= 'Haijawekwa')&&($offence->rco_no!= 'Haijawekwa')){ ?>
                             <?php  echo $offence->dci_no;?>
                            <?php }else{ ?>
                             <?php  echo $offence->dci_no;?>
                            <?php }?>
                             
                           <?php }else{ ?>
                          <?php  echo $offence->dci_no;?>
                        <?php } ?> 
                            
                        </td>
                        
                        
                        
                        `<td>
                          <?php if($offence->dossier_no == 'Haijawekwa'){ ?> 
                            
                            <?php if(($offence->ir_no!= 'Haijawekwa')&&($offence->rco_no!= 'Haijawekwa')&&($offence->dci_no!= 'Haijawekwa')){ ?>
                             <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#assignDossierno"><span class="glyphicon glyphicon-tags"></span>  <?php echo $offence->dossier_no; ?></button></li>
                            <?php }else{ ?>
                             <?php  echo $offence->dossier_no;?>
                             1
                            <?php }?>
                             
                           <?php }else{ ?>
                          <?php  echo $offence->dossier_no;?>
                        <?php } ?>   
                        </td>
                        
                        
                         <?php }elseif($this->session->userdata('controller') =='dci'){ ?>
                       
                         <td>
                        <?php if($offence->rco_no == 'Haijawekwa'){ ?>
                        <?php  echo $offence->rco_no;?>
                        <?php }else{ ?>
                          <?php  echo $offence->rco_no;?>
                        <?php } ?>
                        </td> 
                        
                        <td>
                           <?php if($offence->dci_no == 'Haijawekwa'){ ?> 
                            
                            <?php if(($offence->ir_no!= 'Haijawekwa')&&($offence->rco_no!= 'Haijawekwa')){ ?>
                             <?php  echo $offence->dci_no;?>
                            <?php }else{ ?>
                             <?php  echo $offence->dci_no;?>
                            <?php }?>
                             
                           <?php }else{ ?>
                          <?php  echo $offence->dci_no;?>
                        <?php } ?> 
                            
                        </td>
                        
                         <td>
                          <?php if($offence->dossier_no == 'Haijawekwa'){ ?> 
                            
                         <?php  echo $offence->dossier_no;?>
                            <?php }else{ ?>
                             
                        <?php  echo $offence->dossier_no;?>
                            <?php }?>
                             
                           
                        </td>
                       <?php }elseif($this->session->userdata('controller') =='dpp'){ ?>
                       
                        
                        
                        <td>
                           <?php if($offence->dci_no == 'Haijawekwa'){ ?> 
                            
                            <?php if(($offence->ir_no!= 'Haijawekwa')&&($offence->rco_no!= 'Haijawekwa')){ ?>
                             <?php  echo $offence->dci_no;?>
                            <?php }else{ ?>
                             <?php  echo $offence->dci_no;?>
                            <?php }?>
                             
                           <?php }else{ ?>
                          <?php  echo $offence->dci_no;?>
                        <?php } ?> 
                            
                        </td>
                        
                         <td>
                          <?php if($offence->dossier_no == 'Haijawekwa'){ ?> 
                            
                         <?php  echo $offence->dossier_no;?>
                            <?php }else{ ?>
                             
                        <?php  echo $offence->dossier_no;?>
                            <?php }?>
                             
                           
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
                    <td>
                      <?php  if($this->session->userdata('controller') =='hq'){ ?>
                        <?php if($offence->hqinternalstatus_no =='Haijawekwa'){?>
                        
                         <?php echo $offence->offence_statusname; ?>
                 
                        <?php }if($offence->hqinternalstatus_no =='x'){ ?>
                        <label class="label label-danger" id="makosadhidiyabinadamulabel"><a href="#"  data-toggle="popover" title="Idara ya Makosa Dhidi ya Binadamu" data-content="Default popover"><i class="glyphicon glyphicon-user"></i> Iko Idara X</label></a>
                          <?php }if($offence->hqinternalstatus_no =='y'){ ?>
                        <label class="label label-warning" id="makosadhidiyabinadamulabel"><a href="#"  data-toggle="popover" title="Idara ya Makosa dhidi ya maadili ya jamii" data-content="Default popover"><i class="glyphicon glyphicon-home"></i> Iko Idara Y</label></a>
                        <?php }if($offence->hqinternalstatus_no =='z'){ ?>
                            <label class="label label-info" id="makosadhidiyabinadamulabel"><a href="#"  data-toggle="popover" title="Idara ya Makosa ya kuwania mali" data-content="Default popover"><i class="glyphicon glyphicon-briefcase"></i> Iko Idara Z</label></a>
                             <?php } ?>
                        
                      <?php }else{?>
                        
                        <?php echo $offence->offence_statusname; ?>
                    
                      <?php } ?>
                    
                    </td>
                    
                </tr>
                <?php $offence_no = $offence->offence_no; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="row-fluid" id="statement">
<table class=" table table-striped">
    
    <tr>
       
     <form >
    <?php 
    //Lets check if there is a statement
    $statement_return=  Cro_model::getStatementUpload($offence_no);
    if($statement_return == FALSE){
    ?>
        <td>   
           
         <input type="hidden" id="offense_no" value="<?php echo $offence_no;?>"/>
         <input type="hidden" id="controller" value="<?php echo $this->session->userdata('controller');?>"/>
        <div id="uploadedstatementshow" style="display: none;"></div>
         <div class="form-group" >
             
         
         <div style="position:relative;" id="statementshowupload">
		<a class='btn btn-primary' >
		   Statement Faili.....
			<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" id='file_source' onchange='$("#upload-file-info").html($(this).val());'>
		</a>
		&nbsp;
		<span class='label label-info' id="upload-file-info"></span>
	</div>
 
         </div>
         
        </td>   
         <td> 
         
             <button class="btn btn-success" id="upload-statement">Hifadhi</button>
        
      
         </td> 
             
             
             
             
         </div>
         
        
    <?php } //THe end of form if no statement
    else{
        //---Foreach the statement model-----
    foreach($statement_return->result() as $statement){
        $statementnow=$statement->minute_file;
     }  
     $urlnor = base_url()."uploads/".$statementnow;
     echo"<td colspan='2'>"; echo anchor($urlnor,'Statement/Minute', array('target' => '_blank', 'class' => 'new_window')); echo"</td>";
    }
    ?>
      <?php echo form_close();?>
    </tr>
 </div>
   
</table>
   
</div>




<div class='row'>
    <div class='col-xs-12'>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab1" data-toggle="tab">Maelezo zaidi</a></li>
      <li><a href="#tab2" data-toggle="tab">Wahusika</a></li>
      <li><a href="#tab6" data-toggle="tab">Mawasiliano</a></li>
      <?php if($this->session->userdata('controller') =='cro'){ ?>
   
      <?php if($assignedMpelelezi){ ?>
     
      <li><a href="#tab3" data-toggle="tab">Ushahidi</a></li>
      
         <?php foreach ($assignedMpelelezi->result() as $mpelelezi ){
              
              $courtAssigne=$mpelelezi->courtAssigned;
              $investigator_status=$mpelelezi->investigator_status;
          }
          ?>
      
       <?php if($courtAssigne==1){ ?>              
      
            <li><a href="#tab4" data-toggle="tab">Taarifa za mahakamani</a></li>
      
       <?php } ?>
      
      <?php }else{ ?>
      
      
      <?php }?>
      
       
      
     
      <?php }if($this->session->userdata('controller') =='ocs'){ ?>
       <?php if($offence->ir_no == 'Haijawekwa'){ ?>
          
       <?php }else{ ?>
        <li><a href="#tab5" data-toggle="tab">Wapelelezi</a></li>
        <li><a href="#tab3" data-toggle="tab">Ushahidi</a></li>
        <?php if($assignedMpelelezi){ ?>
              
               <li><a href="#tab4" data-toggle="tab">Taarifa za mahakamani</a></li>   
         <?php } ?>
        
        
        
        
        
        
        
        
        
        
        
       <?php } ?>
      
     <?php }if($this->session->userdata('controller') =='ocd'||$this->session->userdata('controller') =='occid'){ ?>
       
        <li><a href="#tab5" data-toggle="tab">Wapelelezi</a></li>
        <li><a href="#tab3" data-toggle="tab">Ushahidi</a></li>
        
        
         <?php if($assignedMpelelezi){ ?>
              
               <li><a href="#tab4" data-toggle="tab">Taarifa za mahakamani</a></li>   
         <?php } ?>

     <?php }if($this->session->userdata('controller') =='rco'||$this->session->userdata('controller') =='rpc'){ ?>

        <li><a href="#tab5" data-toggle="tab">Wapelelezi</a></li>
        
        <li><a href="#tab3" data-toggle="tab">Ushahidi</a></li>
      <?php if($assignedMpelelezi){ ?>
              
               <li><a href="#tab4" data-toggle="tab">Taarifa za mahakamani</a></li>   
         <?php } ?>

     <?php }if($this->session->userdata('controller') =='hq'){ ?>

        <li><a href="#tab5" data-toggle="tab">Wapelelezi</a></li>
        <li><a href="#tab3" data-toggle="tab">Ushahidi</a></li>
       <?php if($assignedMpelelezi){ ?>
              
               <li><a href="#tab4" data-toggle="tab">Taarifa za mahakamani</a></li>   
         <?php } ?>
        
   <?php }if($this->session->userdata('controller') =='csuhqx'||$this->session->userdata('controller') =='csuhqy'||$this->session->userdata('controller') =='csuhqz'){ ?>
    <?php if($assignedMpelelezi){ ?>
                  <li><a href="#tab4" data-toggle="tab">Taarifa za mahakamani</a></li>  
                   
                         <?php } ?>
        

        
     <?php }if($this->session->userdata('controller') =='dci'){ ?>

        <li><a href="#tab5" data-toggle="tab">Wapelelezi</a></li>
        <li><a href="#tab3" data-toggle="tab">Ushahidi</a></li>
       <?php if($assignedMpelelezi){ ?>
                  <li><a href="#tab4" data-toggle="tab">Taarifa za mahakamani</a></li>  
                   
                         <?php } ?>
        
        
        
        
     <?php }if($this->session->userdata('controller') =='dpp'){ ?>
        <li><a href="#tab3" data-toggle="tab">Ushahidi</a></li>
          <?php if($assignedMpelelezi){ ?>
                  <li><a href="#tab4" data-toggle="tab">Taarifa za mahakamani</a></li>  
                   
                         <?php } ?>
        
     <?php } ?>

    </ul>
     
    <!-- Tab panes -->
    <div class="tab-content">
        
          <div class="tab-pane active" id="tab1">
              <br>
              <?php $this->load->view('common/display/offencemoreinfo'); ?>
              <?php $this->load->view('common/display/offence_location'); ?>
          </div>
          <div class="tab-pane" id="tab2">
              <br/>
               <?php if($offence_status<12){ ?>
              <button  class="btn btn-info"  data-toggle="modal" data-target="#myModal">Ongeza Mhusika</button>
               <?php } ?>
              
              <br/><?php echo $this->session->flashdata('message'); ?>
               <div class="row">
                <!-- If there is No any Complainant Display No complainant message -->
                <?php if(!$mhusikainfo){
                    $this->load->view('common/message/noMhusika');
                }else {
                //If there is Complainant display them all
                    $this->load->view('common/display/view_mhusika', $data);
                }
               ?>
               </div>
          </div>
        
        
        <div class="tab-pane fade" id="tab3">
          <div class='row'>
          <div id="showushahidiloaded" style="display: none;"></div> 
           <?php if(!$ushahidi){?> 
            <?php }else{ ?>    
           <div id="showorigionushahidi">
            <?php  $this->load->view('common/display/view_Ushahidi', $data);?>
             
            </div>
            <?php } if($this->session->userdata('controller') =='cro'){ ?>
               <br></br>
              
            <?php if($investigator_status==1) { ?>
         
              <a href="#myModal2" role="button" class="btn btn-warning" data-toggle="modal" style="margin-left: 199px;">Ongeza Ushahidi</a>   
            <?php } ?>
             <?php } if($this->session->userdata('controller') =='ocs'){ ?>
             
              
                <?php if($offence_status>=2 && $offence_status<12 ){ ?>

             
                <a href="#myModal2" role="button" class="btn btn-warning" data-toggle="modal" style="margin-left: 199px;">Ongeza Ushahidi</a>   
              
                <?php } ?>
              
            <?php } if($this->session->userdata('controller') =='ocd'||$this->session->userdata('controller') =='occid'){ ?>
             
              
                <?php if($offence_status>=3 && $offence_status<12 ){ ?>

             
                <a href="#myModal2" role="button" class="btn btn-warning" data-toggle="modal" style="margin-left: 199px;">Ongeza Ushahidi</a>   
              
                <?php } ?>
              
             <?php } if($this->session->userdata('controller') =='rco'||$this->session->userdata('controller') =='rpc'){ ?>
             
              
               <?php if($offence_status>=4 && $offence_status<12 ){ ?>

             
                <a href="#myModal2" role="button" class="btn btn-warning" data-toggle="modal" style="margin-left: 199px;">Ongeza Ushahidi</a>   
              
                <?php } ?>
              
             <?php } if($this->session->userdata('controller') =='hq'){ ?>
             
              
               <?php if($offence_status>=5 && $offence_status<12 ){ ?>

             
                <a href="#myModal2" role="button" class="btn btn-warning" data-toggle="modal" style="margin-left: 199px;">Ongeza Ushahidi</a>   
                 <?php } ?>
              
              <?php } if($this->session->userdata('controller') =='csuhqx'||$this->session->userdata('controller') =='csuhqy'||$this->session->userdata('controller') =='csuhqz'){ ?>
                       
                  
                
              
              
              <?php } if($this->session->userdata('controller') =='dci'){ ?>
             
                     <?php if($offence_status>=7 && $offence_status<12 ){ ?>

             
                         <a href="#myModal2" role="button" class="btn btn-warning" data-toggle="modal" style="margin-left: 199px;">Ongeza Ushahidi</a>   
                     <?php } ?>
              
              
                <?php } if($this->session->userdata('controller') =='dpp'){ ?>
             
                     <?php if($offence_status>=8 && $offence_status<12 ){ ?>

             
                        
                     <?php } ?>
              
              
               <?php } ?>
              
              
              
              
            
          </div>
             
          </div>
        
        
        
        
        
        
        <div class="tab-pane fade" id="tab4">
            <div class='row'>
                </br>
          <div id="showcourttaarifa" style="display: none;"></div> 
            <?php if(!$taarifazamahakama){ ?> 
            
            
            <?php }else{ ?>
            <div id="showoriginalcourttaarifa">
                <?php  $this->load->view('common/display/view_taafazamahakama', $data); ?>
            </div>
            <?php } ?>
          <?php if($assignedMpelelezi){?>

           <?php foreach ($assignedMpelelezi->result() as $mpelelezi ){
              
              $courtAssigne=$mpelelezi->courtAssigned;
              $investigator_status=$mpelelezi->investigator_status;
              }
             ?>
          
          
            <?php if($this->session->userdata('controller') =='cro'){ ?>
          
          
            <?php if($offence_status>=8 && $courtAssigne==1){ ?> 
             <a href="#myModal3" role="button" class="btn btn-court" data-toggle="modal" style="margin-left:280px;">Ongeza Taarifa za kimahakama</a>   

            <?php } ?>

            <?php }if($this->session->userdata('controller') =='ocs'){ ?>
             <?php if($offence_status==8){ ?>
               <a href="#myModal3" role="button" class="btn btn-court" data-toggle="modal" style="margin-left:280px;">Ongeza Taarifa za kimahakama</a>   
             <?php } ?>
             
          <?php }if($this->session->userdata('controller') =='ocd'||$this->session->userdata('controller') =='occid'){ ?>
             <?php if($offence_status==9){ ?>
               <a href="#myModal3" role="button" class="btn btn-districtcourt" data-toggle="modal" style="margin-left:280px;">Ongeza Taarifa za kimahakama</a>   
             <?php } ?>
            
             <?php }if($this->session->userdata('controller') =='rco'||$this->session->userdata('controller') =='rpc'){ ?>
             <?php if($offence_status==10){ ?>
               <a href="#myModal3" role="button" class="btn btn-regioncourt" data-toggle="modal" style="margin-left:280px;">Ongeza Taarifa za kimahakama</a>   
             
              <?php } ?>
               
               
             <?php }if($this->session->userdata('controller') =='dci'){ ?>
             <?php if($offence_status>=11 && $offence_status<12){ ?>
               <a href="#myModal3" role="button" class="btn btn-regioncourt" data-toggle="modal" style="margin-left:280px;">Ongeza Taarifa za kimahakama</a>   
              <?php } ?>
             
             <?php }if($this->session->userdata('controller') =='dpp'){ ?>
              
             <?php if($offence_status==11){ ?>
               <a href="#myModal3" role="button" class="btn btn-highcourt" data-toggle="modal" style="margin-left:280px;">Ongeza Taarifa za kimahakama</a>   
             
             
            <?php } ?>
            
            <?php } ?> 
               
               
             <?php } ?>  
           </div> 

          </div>
        
        
        
        
          <div class="tab-pane fade" id="tab5">
              <br></br>
               <?php if($this->session->userdata('controller') =='cro'){ ?>
             
            
               
               <?php }if($this->session->userdata('controller') =='ocs'){ ?>
               <div id="showmpelelezi" style="display: none;"></div>
               <div id="hideorigionwapelezi">
                    <?php if(!$wapelelezi){?>
                    <?php }else{ ?>
                <?php $this->load->view('common/display/viewWapelelezi', $data);?>
                   
                    <?php } ?>
               </div>
              <?php if($offence_status<12){?>
               <a href="#myModal1" role="button" class="btn btn-success" data-toggle="modal" style="margin-left: 199px;">Ongeza Mpelelezi</a> 
              <?php }?>
                <?php }if($this->session->userdata('controller') =='ocd'||$this->session->userdata('controller') =='occid'){ ?>
               <div id="showmpelelezi" style="display: none;"></div>
               <div id="hideorigionwapelezi">
                    <?php if(!$wapelelezi){?>
                    <?php }else{ ?>
                <?php $this->load->view('common/display/viewWapelelezi', $data);?>
                   
                    <?php } ?>
               </div>
               <?php if($offence_status<12){?>
               <a href="#myModal1" role="button" class="btn btn-success" data-toggle="modal" style="margin-left: 199px;">Ongeza Mpelelezi</a> 
              <?php }?>
               
              <?php }if($this->session->userdata('controller') =='rco'||$this->session->userdata('controller') =='rco'){ ?>
               <div id="showmpelelezi" style="display: none;"></div>
               <div id="hideorigionwapelezi">
                    <?php if(!$wapelelezi){?>
                    <?php }else{ ?>
                <?php $this->load->view('common/display/viewWapelelezi', $data);?>
                   
                    <?php } ?>
               </div>
               <a href="#myModal1" role="button" class="btn btn-success" data-toggle="modal" style="margin-left: 199px;">Ongeza Mpelelezi</a> 
               
             <?php }if($this->session->userdata('controller') =='hq'){ ?>
               <div id="showmpelelezi" style="display: none;"></div>
               <div id="hideorigionwapelezi">
                    <?php if(!$wapelelezi){?>
                    <?php }else{ ?>
                <?php $this->load->view('common/display/viewWapelelezi', $data);?>
                   
                    <?php } ?>
               </div>
              <?php if($offence_status<12){?>
               <a href="#myModal1" role="button" class="btn btn-success" data-toggle="modal" style="margin-left: 199px;">Ongeza Mpelelezi</a> 
              <?php }?>
               
             <?php }if($this->session->userdata('controller') =='csuhqx'||$this->session->userdata('controller') =='csuhqy'||$this->session->userdata('controller') =='csuhqz'){ ?>
               <div id="showmpelelezi" style="display: none;"></div>
               <div id="hideorigionwapelezi">
                    <?php if(!$wapelelezi){?>
                    <?php }else{ ?>
                <?php $this->load->view('common/display/viewWapelelezi', $data);?>
                   
                    <?php } ?>
               </div>
              
             <?php }if($this->session->userdata('controller') =='dci'){ ?>
               <div id="showmpelelezi" style="display: none;"></div>
               <div id="hideorigionwapelezi">
                    <?php if(!$wapelelezi){?>
                    <?php }else{ ?>
                <?php $this->load->view('common/display/viewWapelelezi', $data);?>
                   
                    <?php } ?>
               </div>
               <?php if($offence_status<12){?>
               <a href="#myModal1" role="button" class="btn btn-success" data-toggle="modal" style="margin-left: 199px;">Ongeza Mpelelezi</a> 
              <?php }?>
               <?php }?>
          </div>
         
        
        
        
        
<!--        mawasilano tab-->
           <div class="tab-pane" id="tab6">
              <br/>

              <div class="row container">
                  <div id='original' class="row">
                <div class="span8 offset1">
                    <h4>Discussions</h4>
                <?php 
                 if($discussions == TRUE){
                 foreach ($discussions->result() as $discussion) { ?>

                   <div class="alert alert-success">
                    <?php if($this->session->userdata('force_no') == $discussion->sender_id){ ?>
                     <div class="row-fluid">
                       <b><i class="icon-comment icon-white"> </i> Sent to:<?php echo $discussion->receiverfname.' '.$discussion->receiverlname; ?></b>  
                     </div>
                    <?php }else{ ?>
                      <div class="row-fluid">
                       <b><i class="icon-comment icon-white"> Received from:</i> <?php echo $discussion->senderfname.' '.$discussion->senderlname; ?></b>  
                     </div>
                    <?php } ?>
                     <div class="row-fluid">
                       <?php echo $discussion->disc_content; ?>  
                     </div>
                     <div class="row-fluid">
                         <div class="span3 offset9">
                             <small><?php echo date("F j, Y g:i a", strtotime($discussion->date_added)); ?></small>
                         </div>
                     </div>
                  </div>
                 <?php }} ?>  
              </div>
              </div>
              <div id='load_ajax_result' style="display:none;">
                  
              </div>
                <?php echo form_open(''); ?> 
                   <div class="form-group">
                       <?php 
                       $js = 'id="receiver_id" class="form-control"';
                       echo form_dropdown('user_disc',$user_disc,'large', $js); 
                       ?>
                   </div>
                   <input type='hidden' id='controller' value='<?php echo $this->session->userdata('controller');?>'/>
                   <input type='hidden' id='sender_id' value='<?php echo $this->session->userdata('force_no');?>'/>
                   <input type='hidden' id='offence_no' value='<?php echo $offence_id;?>'/>
                   <div class="form-group">
                       <textarea rows="4" id='disc_content' class="form-control"></textarea>
                   </div>
                   <div class="form-group">
                       <button id='disc-btn' class="btn btn-sm btn-success">Tuma</button>
                   </div>
                <?php echo form_close(); ?> 
               </div>
          </div>
        
    </div> 
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> Ongeza Mhusika</h4>
      </div>
      <div class="modal-body">
        
   <?php
    $fname_settings = array(
        'name'        => 'fname',
        'id'          => 'fname_mhusika',
        'placeholder' => 'Jina la Kwanza',
        'class' => 'form-control'  
    );
    
    $mname_settings = array(
        'name'        => 'midname',
        'id'          => 'mname_mhusika',
        'placeholder' => 'Jina la Kati',
        'class' => 'form-control'  
    );
    
    $lname_settings = array(
        'name'        => 'lname',
        'id'          => 'lname_mhusika',
        'placeholder' => 'Jina la Mwisho',
        'class' => 'form-control'  
    );
    
    $nickname_settings = array(
        'name'        => 'nick_name',
        'id'          => 'nick_name',
        'placeholder' => 'Jina Maarufu',
        'class' => 'form-control'  
    );
    
    $address_settings = array(
        'name'        => 'address',
        'id'          => 'address_mhusika',
        'placeholder' => 'Anuani',
        'class' => 'form-control'  
    );
    
   $physical_address = array(
        'name'        => 'paddress',
        'id'          => 'paddress_mhusika',
        'placeholder' => 'Mahali anapoishi',
        'class' => 'form-control'  
    );
      
    $birthplace_settings = array(
        'name'        => 'birth_place',
        'id'          => 'birth_place_mhusika',
        'placeholder' => 'Mahali alipozaliwa',
        'class' => 'form-control'  
    );
    
    $mobile_settings = array(
        'name'        => 'mobile',
        'id'          => 'mobile_mhusika',
        'placeholder' => 'Namba ya Simu',
        'class' => 'form-control'  
    );
    $email_settings = array(
        'name'        => 'email',
        'id'          => 'email_mhusika',
        'placeholder' => 'Barua pepe',
        'class' => 'form-control'  
    );

     $id_settings = array(
        'name'        => 'idno',
        'id'          => 'idno_mhusika',
        'placeholder' => 'Namba ya Kitambulisho',
        'class' => 'form-control'  
    );

?>

<input type="hidden" name="offence" value="<?php echo $offence_no; ?>" id="offence_no"/>
          
<div class="form-group">
    <label>Uhusika</label>
       <?php 
       $js = 'id="uhusika" class="form-control"';
       echo form_dropdown('uhusika',$uhusika,'large', $js); 
       ?>
</div> 
          
<div class="form-group">
    <label>Jina la Kwanza</label>
    <?php 
      echo form_input($fname_settings);
    ?>
</div>
          
<div class="form-group">
    <label>Jina la Kati</label>
    <?php 
      echo form_input($mname_settings);
    ?>
</div>
          
<div class="form-group">
    <label>Jina la Mwisho</label>
    <?php 
      echo form_input($lname_settings);
    ?>
</div>

<div class="form-group">
    <label>Jina Maarufu</label>
    <?php 
      echo form_input($nickname_settings);
    ?>
</div>

<div class="form-group">
   <label>Umri</label>
   <select  name="age" id="age" class="form-control">
       <option>--Chagua Umri--</option>
         <?php 
         $i = 0;
         for($i=0; $i<120; $i++){ 
         echo'<option value="'.$i.'">'.$i.'</option>'; 
                 } 
         ?>

   </select>
</div>  
   
<div class="form-group">
    <label>Jinsi</label>
       <?php 
       $js = 'id="sex" class="form-control"';
       echo form_dropdown('sex',$sex,'large', $js); 
       ?>
</div>  
          
 <div class="form-group">
    <label>Mahali Alipozaliwa</label>
    <?php 
      echo form_input($birthplace_settings);
    ?>
</div>
 
 <div class="form-group">
    <label>Mahali Anapoishi</label>
    <?php 
      echo form_input($physical_address);
    ?>
</div> 
                  
 <div class="form-group">
    <label>Anuani</label>
    <?php 
      echo form_input($address_settings);
    ?>
</div>    
          
 <div class="form-group">
    <label>Nambari ya Simu</label>
    <?php 
      echo form_input($mobile_settings);
    ?>
</div>
          
 <div class="form-group">
    <label>Barua Pepe</label>
    <?php 
      echo form_input($email_settings);
    ?>
</div>
          
<div class="form-group">
    <label>Utaifa</label>
       <?php 
       $js = 'id="nationality" class="form-control"';
       echo form_dropdown('nationality',$nationality,'large', $js); 
       ?>
</div>           

<div class="form-group">
    <label>Kabila</label>
       <?php 
       $js = 'id="tribe" class="form-control"';
       echo form_dropdown('tribe',$tribe,'large', $js); 
       ?>
</div>  
          
<div class="form-group">
    <label>Dini</label>
       <?php 
       $js = 'id="religion" class="form-control"';
       echo form_dropdown('religion',$religion,'large', $js); 
       ?>
</div>  
  

<div class="form-group">
    <label>Hali ya Ndoa</label>
       <?php 
       $js = 'id="marital" class="form-control"';
       echo form_dropdown('marital',$marital,'large', $js); 
       ?>
</div>  

<div class="form-group">
    <label>Kiwango cha Elimu</label>
       <?php 
       $js = 'id="education" class="form-control"';
       echo form_dropdown('education',$education,'large', $js); 
       ?>
</div>  

<div class="form-group">
    <label>Kazi Afanyayo</label>
       <?php 
       $js = 'id="occupation" class="form-control"';
       echo form_dropdown('occupation',$occupation,'large', $js); 
       ?>
</div>  

<div class="form-group">
    <label>Aina ya Kitambulisho</label>
       <?php 
       $js = 'id="idtype" class="form-control"';
       echo form_dropdown('idtype',$idtype,'large', $js); 
       ?>
</div>  

 <div class="form-group">
    <label>Namba ya Kitambulisho</label>
    <?php 
      echo form_input($id_settings);
    ?>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="add_mhusika" class="btn btn-primary">Hifadhi </button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Ongeza Mpelelezi</h4>
      </div>
      <div class="modal-body">
          <?php echo form_open(); ?>
       <input type="hidden"  value="<?php echo $this->session->userdata('controller'); ?>" id="controller"/>
       <input type="hidden"  value="<?php echo $offence_no; ?>" id="offence_no"/>
       <input type="hidden"  value="<?php echo $offence_status; ?>" id="offence_status"/>
        <?php 
       $js = 'id="wapeleleziid" class="form-control"';
       echo form_dropdown('chaguaWapelelezi',$chaguaWapelelezi,'large', $js); 
       ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="addwapelelezi" class="btn btn-success">Hifadhi</button>
         <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>


<!-- Ushahidi -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Ongeza Ushahidi</h4>
      </div>
       <div id="successushahidiinfo" style="display: none; color:green;margin-left:50px;"></div>
      <?php echo form_open(); ?> 
       
      <div class="modal-body">
       <input type="hidden"  value="<?php echo $this->session->userdata('controller'); ?>" id="controller"/>
       <input type="hidden"  value="<?php echo $offence_no; ?>" id="offence_no"/>
       <input type="hidden"  value="<?php echo $offence_status; ?>" id="offence_status"/>
       <div class="form-group">
      <textarea class="form-control" name="ushahidi" id="ushahidi" rows="10" placeholder="Andika Maelezo"></textarea>
       </div>
        <div class="form-group">
         <div style="position:relative;">
		<a class='btn btn-primary' >
			Chagua Faili.....
			<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" id='file_source' onchange='$("#upload-file-info").html($(this).val());'>
		</a>
		&nbsp;
		<span class='label label-info' id="upload-file-info"></span>
	</div>
       </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="addushahidi" class="btn btn-success">Hifadhi</button>
      <?php echo form_close(); ?>
      
    </div>
  </div>
</div>
</div>
<!--Courtinformation -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Ongeza Taarifa za Kimahakama</h4>
      </div>
      <?php echo form_open(); ?> 
     
      <div class="modal-body">
            <div class="form-group">
                <input type="date" name="date" class="form-control" id="hatuatarehe">
               
           </div>
        <input type="hidden"  value="<?php echo $this->session->userdata('controller'); ?>" id="controller"/> 
        <input type="hidden"  value="<?php echo $offence_no; ?>" id="offence_no"/>
       <input type="hidden"  value="<?php echo $offence_status; ?>" id="offence_status"/>
       <div class="form-group">
          <?php 
            $j= 'id="mahakamaid" class="form-control"';
             echo form_dropdown('mahakamaid',$mahakama,'large', $j); 
             ?>    
       </div>
         <div class="form-group">
     
             <?php 
            $js = 'id="chaguaWatuhumiwa" class="form-control"';
             echo form_dropdown('chaguaWatuhumiwa',$chaguaWatuhumiwa,'large', $js); 
               ?>  
       </div>
     
          
       <div class="form-group">
           <select class="form-control" id="hatuazakimahakama">
               <option value="">--Chagua Taarifa--</option>
               <option value="1">Mtuhumiwa Kasomewa Mashitaka</option>
               <option value="2">Kesi imeahirishwa</option>
               <option value="3">Kesi imefungwa</option>
               
           </select>
       </div>
        <div class="form-group"> 
            <div id="imefungwa"> </div>
            
            
                </div>
        
         <div class="form-group"> 
            <div id="athabufactors"> </div>
            
            
                </div>
        <div class="form-group"> 
            <div id="athabufactorkifungo"> </div>
            
            
                </div>
       <div class="form-group">
      <textarea class="form-control" name="ushahidi" id="ushahidiId" rows="4" placeholder="Andika Maelezo"></textarea>
       </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="addhatuazamahakama" class="btn btn-success">Hifadhi</button>
      <?php echo form_close(); ?>
      
    </div>
  </div>
</div>
</div>





























<!-- Modal IR Assign -->
<div class="modal fade" id="assignIR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Weka IR-No</h4>
      </div>
      <div class="modal-body">
       <?php echo form_open($this->session->userdata('controller').'/assignIR/'.$offence_id); ?>
        <div class="form-group">
            <label>IR Namba</label>
            <?php 
              echo form_input($ir_settings);
            ?>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sitisha</button>
        <button type="submit" class="btn btn-primary">Hifadhi</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<!-- Modal -->

<!-- Modal RCO Assign -->
<div class="modal fade" id="assignRCO" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Weka RCO-No</h4>
      </div>
      <div class="modal-body">
       <?php echo form_open($this->session->userdata('controller').'/assignRCO/'.$offence_id); ?>
        <div class="form-group">
            <label>RCO Namba</label>
            <?php 
              echo form_input($rco_settings);
            ?>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sitisha</button>
        <button type="submit" class="btn btn-primary">Hifadhi</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>

<div class="modal fade" id="assignRPC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Weka RCO-No11111</h4>
      </div>
      <div class="modal-body">
       <?php echo form_open($this->session->userdata('controller').'/assignRPC/'.$offence_id); ?>
        <div class="form-group">
            <label>RPC Namba</label>
            <?php 
              echo form_input($rpc_settings);
            ?>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sitisha</button>
        <button type="submit" class="btn btn-primary">Hifadhi</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>

<!-- Modal -->

<div class="modal fade" id="assignDCI" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Weka DCI-No</h4>
      </div>
      <div class="modal-body">
       <?php echo form_open($this->session->userdata('controller').'/assignDCI/'.$offence_id); ?>
        <div class="form-group">
            <label>DCI Namba</label>
            <?php 
              echo form_input($dci_settings);
            ?>
        </div>
          <div class="form-group">
              <input type="hidden" name="crimetypeid" value="<?php echo $offence->crimetype_id; ?>">
         </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sitisha</button>
        <button type="submit" class="btn btn-primary">Hifadhi</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>


<div class="modal fade" id="assignDossierno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Weka Dossier-No</h4>
      </div>
      <div class="modal-body">
       <?php echo form_open($this->session->userdata('controller').'/assignDossierno/'.$offence_id); ?>
        <div class="form-group">
            <label>Dossier Namba</label>
            <?php 
              echo form_input($dossierno_settings);
            ?>
        </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sitisha</button>
        <button type="submit" class="btn btn-primary">Hifadhi</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>


