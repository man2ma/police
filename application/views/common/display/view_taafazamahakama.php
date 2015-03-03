
<br/>
                <div class="row">
                <div class="col-xs-12">
                    <table class="table table-bordered table-condensed">
                        <tr><th colspan="1">&nbsp;</th><th colspan="1">&nbsp;</th><th colspan="1">&nbsp;</th><th colspan="1">&nbsp;</th><th colspan="1">&nbsp;</th> <th colspan="1">&nbsp;</th><th style="text-align:center" colspan="1">&nbsp;</th><th style="text-align:center" colspan="1">&nbsp;</th><th colspan="4"style="text-align:center">Uamuzi wa Mahakama</th><th colspan="1"style="text-align:center">&nbsp;</th></tr>     
                        <tr><th colspan="1">#</th><th colspan="1">Tarehe</th><th colspan="1">Kesi</th><th colspan="1">Mjazaji</th><th colspan="1">Mhusika</th> <th colspan="1">Taarifa</th><th style="text-align:center" colspan="1">Mahakama</th><th style="text-align:center" colspan="1">Maelezo</th><th colspan="1"style="text-align:center">Athabu</th><th colspan="1"style="text-align:center">Miezi</th><th colspan="1"style="text-align:center">Miaka</th><th colspan="1"style="text-align:center">Fidia</th><th colspan="1"style="text-align:center">&nbsp;</th></tr>   
                        <?php $idno=1;?>
                       <?php foreach ($taarifazamahakama->result() as $info) { ?>
                                  <?php  $id=$info->courtinfo_id; ?>
                                  <?php  $date=$info->date; ?>
                                  <?php  $offence_no=$info->offence_no; ?>
                                  <?php  $force_no=$info->courtforce_no; ?>
                                  <?php  $taarifa_description=$info->taarifa_description; ?> 
                                  <?php  $courtname=$info->courtname; ?>
                                  <?php  $description=$info->infodescription; ?>
                                  <?php 
                                      $auto_date=$info->auto_date; 
                                      $dateArray=array();
                                      $dateArray=explode('-',$auto_date);
                                      $dateinfo=$dateArray[2];
                             
                             
                                      $monthinfo=$dateArray[1];
                                      $yearinfo=$dateArray[0];

                                      $timeArray=array();
                                      $timeArray=explode(' ',$dateinfo);
                                      $timeinfo=$timeArray[1];
                                      $dayinfo=$timeArray[0];
                              
                                      $hourArray=array();
                                      $hourArray= explode(':',$timeinfo );
                                      $specifichour=$hourArray[0];
                                      $year=date('Y'); 
                                      $day=date('d');
                                      $month=date('m');
                                      $data=date('H');
                                      $deleteaccess=$data-$specifichour;
                                     $idnumber=$idno++;
                                  ?> 
                                          
                    
                    
                    
                    
                                  <?php  $athabu_description=$info->athabu_description; ?> 
                                  <?php  $miaka=$info->miaka; ?>
                                  <?php  $miezi=$info->miezi; ?> 
                                  <?php  $amount=$info->fidia; ?> 
                                  <?php   
                                  $fname=$info->fname;  $midname=$info->midname; $lname=$info->lname;$nickname=$info->nickname;
                                   $name=$fname.' '.$midname.' '.$lname.''.'( aka '.$nickname.')';
                                  ?>
                                  
                           <tr><td colspan=""><?php echo $idnumber; ?></td><td colspan="1"><?php echo $date; ?></td><td colspan="1"><?php echo $offence_no; ?></td><td colspan="1"><?php echo $force_no; ?></td><td colspan="1"> <?php echo $name; ?></td> <td colspan="1"><?php echo $taarifa_description; ?></td><td style="text-align:center" colspan="1"><?php echo $courtname; ?></td><td style="text-align:center" colspan="1"><?php echo $description; ?></td><td colspan="1"style="text-align:center"><?php echo $athabu_description; ?></td><td colspan="1"style="text-align:center"><?php echo $miezi;?></td><td colspan="1"style="text-align:center"><?php echo $miaka; ?></td><td colspan="1"style="text-align:center"><?php echo $amount;?></td>
                               <td colspan=""style="text-align:center">
                                   <?php if($this->session->userdata('controller')=='cro'){ ?> 
                                  
                                       <?php if($deleteaccess<=3 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>

                                        <div id="deletecourttaarifa"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>

                               
                         
                                          <?php }else{ ?> &nbsp;<?php } ?>
                                
                            <?php }if($this->session->userdata('controller')=='ocs'){ ?> 

                             <?php if($deleteaccess<=4 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>

                                 <div id="deletecourttaarifa"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>
                                   
                         
                        <?php }else{ ?> &nbsp;<?php } ?>
                                        
                           <?php }if($this->session->userdata('controller')=='occid'||$this->session->userdata('controller')=='ocd'){ ?> 
 
                             
                             <?php if($deleteaccess<=5 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>

                                 <div id="deletecourttaarifa"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>
                                   
                         
                        <?php }else{ ?> &nbsp;<?php } ?>
                                        
                           <?php }if($this->session->userdata('controller')=='rpc'||$this->session->userdata('controller')=='rco'){ ?> 
 
                             
                             <?php if($deleteaccess<=6 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>

                                 <div id="deletecourttaarifa"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>
                                   
                         
                              <?php }else{ ?> &nbsp;<?php } ?>
                                        
                           <?php }if($this->session->userdata('controller')=='hq'){ ?> 
 
                             
                             <?php if($deleteaccess<=7 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>

                                 <div id="deletecourttaarifa"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>
                                   
                         
                              <?php }else{ ?> &nbsp;<?php } ?>
                                        
                             <?php }if($this->session->userdata('controller')=='csuhqx'||$this->session->userdata('controller')=='csuhqy'||$this->session->userdata('controller')=='csuhqz'){ ?> 
 
                             
                             <?php if($deleteaccess<=8 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>

                                 <div id="deletecourttaarifa"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>
                                   
                         
                              <?php }else{ ?> &nbsp;<?php } ?>
                                        
                             <?php }if($this->session->userdata('controller')=='dci'){ ?> 
 
                             
                             <?php if($deleteaccess<=9 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>

                                 <div id="deletecourttaarifa"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>
                                   
                         
                              <?php }else{ ?> &nbsp;<?php } ?>
                                        
                             <?php }if($this->session->userdata('controller')=='dpp'){ ?> 
 
                             
                             <?php if($deleteaccess<=10 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>

                                 <div id="deletecourttaarifa"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>
                                   
                         
                              <?php }else{ ?> &nbsp;<?php } ?>
                                        
                             <?php }  ?>   
                                 
                               </td>
                           
                           
                           
                           </tr>        
                       <?php } ?>
                        
                    </table>
                </div>
                  </div>
