<br/>
                <div class="row">
                <div class="col-xs-12">
                <table class="table table-bordered table-condensed table-striped">
                    <tr> <th colspan="1">&nbsp;</th><th style="text-align:center" colspan="1">&nbsp;</th><th style="text-align:center" colspan="1">&nbsp;</th><th colspan="5"style="text-align:center">Nyaraka/Picha/Sauti/Video</th></tr>
                    <tr> <th >Ushahidi#</th><th style="text-align:center">Mjazaji</th><th style="text-align:center">Maneno</th><th colspan="1" style="text-align:center">Nyaraka</th><th colspan="1" style="text-align:center">Picha</th><th colspan="1" style="text-align:center">Sauti</th><th colspan="1" style="text-align:center">Video</th><th>Ondoa</th></tr>
                   
                    <?php $no=1;?>
                     <?php foreach ($ushahidi->result() as $info) { ?>
                            <?php
                          
                             $date=$info->date;
                           
                             $link=$info->link;
                             $force_no=$info->force_no;
                             $extension=substr($link,-3);
                             $dateArray=array();
                             $dateArray=explode('-',$date);
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
                             $sno=$no++;  
                             ?>
                       <?php if($this->session->userdata('controller')=='cro'&& $this->session->userdata('force_no')==$force_no){?> 
                         <tr> 
                            <td><?php echo $sno; ?></td><td style="text-align:center"><?php echo $info->force_no; ?></td><td style="align:centre;"><?php echo $info->description; ?></td>
                             <td colspan="1" style="text-align:center">
                                 
                             <?php if($extension=='pdf'||$extension=='doc'|| $extension=='txt'||$extension=='xls'||$extension=='xls'||$extension=='odt'||$extension=='docx'||$extension=='pptx'||$extension=='xlsx'||$extension=='csv'){ ?>
                            <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                            <?php }?>
                            
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                              <?php if($extension=='gif'||$extension=='jpg'||$extension=='png'||$extension=='JPG'){?>
                              <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                              <?php } ?>
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                            
                            <?php if($extension=='mp3'||$extension=='ogg'||$extension=='oga'||$extension=='wav'||$extension=='wv'||$extension=='vox'||$extension=='tta'||$extension=='sln'||$extension=='raw'||$extension=='ra'||$extension=='rm'||$extension=='vox'||$extension=='m4p'||$extension=='m4a'){?>
                                        
                                    <audio controls>
                                      <source src="<?php echo base_url();?>./uploads/<?php echo $info->link; ?>" type="audio/mpeg">
                                    </audio> 
                            <?php }if($extension==0){ ?>
                            <?php } ?>
                            </td>
                            <td colspan="1" style="text-align:center">
                            <?php if($extension=='mp4'||$extension=='mpeg'){?>
                            <?php
                            $data=base_url().'uploads/'.$info->link;
                            echo anchor($data,'videolink');?>
                            <?php } ?>
                           
                             </td> 
                             <td style="text-align:center;">

                             <?php if($deleteaccess<=3 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>

                                 <div id="deleteushahidi"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $info->id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>

                               
                         
                        <?php } ?>
                             
                             </td>
                             </tr> 
                       <?php }if($this->session->userdata('controller')=='ocs'){?> 
                         <tr> 
                            <td><?php echo $sno; ?></td><td style="text-align:center"><?php echo $info->force_no; ?></td><td style="align:centre;"><?php echo $info->description; ?></td>
                             <td colspan="1" style="text-align:center">
                                 
                             <?php if($extension=='pdf'||$extension=='doc'|| $extension=='txt'||$extension=='xls'||$extension=='xls'||$extension=='odt'||$extension=='docx'||$extension=='pptx'||$extension=='xlsx'||$extension=='csv'){ ?>
                            <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                            <?php }?>
                            
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                              <?php if($extension=='gif'||$extension=='jpg'||$extension=='png'||$extension=='JPG'){?>
                              <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                              <?php } ?>
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                            
                            <?php if($extension=='mp3'||$extension=='ogg'||$extension=='oga'||$extension=='wav'||$extension=='wv'||$extension=='vox'||$extension=='tta'||$extension=='sln'||$extension=='raw'||$extension=='ra'||$extension=='rm'||$extension=='vox'||$extension=='m4p'||$extension=='m4a'){?>
                                        
                                    <audio controls>
                                      <source src="<?php echo base_url();?>./uploads/<?php echo $info->link; ?>" type="audio/mpeg">
                                    </audio> 
                            <?php }if($extension==0){ ?>
                            <?php } ?>
                            </td>
                            <td colspan="1" style="text-align:center">
                            <?php if($extension=='mp4'||$extension=='mpeg'){?>
                            <?php
                            $data=base_url().'uploads/'.$info->link;
                            echo anchor($data,'videolink');?>
                            <?php } ?>
                           
                             </td> 
                             <td style="text-align:center;">

                              <?php if($deleteaccess<=4 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>

                                 <div id="deleteushahidi"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $info->id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>

                               
                          
                               <?php } ?>
                             
                             
                             </tr> 
                          <?php }if($this->session->userdata('controller')=='ocd'||$this->session->userdata('controller')=='occid'){?> 
                         <tr> 
                            <td><?php echo $sno; ?></td><td style="text-align:center"><?php echo $info->force_no; ?></td><td style="align:centre;"><?php echo $info->description; ?></td>
                             <td colspan="1" style="text-align:center">
                                 
                             <?php if($extension=='pdf'||$extension=='doc'|| $extension=='txt'||$extension=='xls'||$extension=='xls'||$extension=='odt'||$extension=='docx'||$extension=='pptx'||$extension=='xlsx'||$extension=='csv'){ ?>
                            <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                            <?php }?>
                            
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                              <?php if($extension=='gif'||$extension=='jpg'||$extension=='png'||$extension=='JPG'){?>
                              <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                              <?php } ?>
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                            
                            <?php if($extension=='mp3'||$extension=='ogg'||$extension=='oga'||$extension=='wav'||$extension=='wv'||$extension=='vox'||$extension=='tta'||$extension=='sln'||$extension=='raw'||$extension=='ra'||$extension=='rm'||$extension=='vox'||$extension=='m4p'||$extension=='m4a'){?>
                                        
                                    <audio controls>
                                      <source src="<?php echo base_url();?>./uploads/<?php echo $info->link; ?>" type="audio/mpeg">
                                    </audio> 
                            <?php }if($extension==0){ ?>
                            <?php } ?>
                            </td>
                            <td colspan="1" style="text-align:center">
                            <?php if($extension=='mp4'||$extension=='mpeg'){?>
                            <?php
                            $data=base_url().'uploads/'.$info->link;
                            echo anchor($data,'videolink');?>
                            <?php } ?>
                           
                             </td> 
                             <td style="text-align:center;">

                             <?php if($deleteaccess<=5 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>
                                   
                                 <div id="deleteushahidi"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $info->id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>

                               
                          
                               <?php } ?>
                             
                             
                             </tr> 
                         <?php }if($this->session->userdata('controller')=='rpc'||$this->session->userdata('controller')=='rco'){?> 
                         <tr> 
                            <td><?php echo $sno; ?></td><td style="text-align:center"><?php echo $info->force_no; ?></td><td style="align:centre;"><?php echo $info->description; ?></td>
                             <td colspan="1" style="text-align:center">
                                 
                             <?php if($extension=='pdf'||$extension=='doc'|| $extension=='txt'||$extension=='xls'||$extension=='xls'||$extension=='odt'||$extension=='docx'||$extension=='pptx'||$extension=='xlsx'||$extension=='csv'){ ?>
                            <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                            <?php }?>
                            
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                              <?php if($extension=='gif'||$extension=='jpg'||$extension=='png'||$extension=='JPG'){?>
                              <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                              <?php } ?>
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                            
                            <?php if($extension=='mp3'||$extension=='ogg'||$extension=='oga'||$extension=='wav'||$extension=='wv'||$extension=='vox'||$extension=='tta'||$extension=='sln'||$extension=='raw'||$extension=='ra'||$extension=='rm'||$extension=='vox'||$extension=='m4p'||$extension=='m4a'){?>
                                        
                                    <audio controls>
                                      <source src="<?php echo base_url();?>./uploads/<?php echo $info->link; ?>" type="audio/mpeg">
                                    </audio> 
                            <?php }if($extension==0){ ?>
                            <?php } ?>
                            </td>
                            <td colspan="1" style="text-align:center">
                            <?php if($extension=='mp4'||$extension=='mpeg'){?>
                            <?php
                            $data=base_url().'uploads/'.$info->link;
                            echo anchor($data,'videolink');?>
                            <?php } ?>
                           
                             </td> 
                             <td style="text-align:center;">

                             <?php if($deleteaccess<=6 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>
                                   
                                 <div id="deleteushahidi"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $info->id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>

                               
                          
                             <?php } ?>
                             
                             
                             </tr> 
                          <?php }if($this->session->userdata('controller')=='hq'){?> 
                         <tr> 
                            <td><?php echo $sno; ?></td><td style="text-align:center"><?php echo $info->force_no; ?></td><td style="align:centre;"><?php echo $info->description; ?></td>
                             <td colspan="1" style="text-align:center">
                                 
                             <?php if($extension=='pdf'||$extension=='doc'|| $extension=='txt'||$extension=='xls'||$extension=='xls'||$extension=='odt'||$extension=='docx'||$extension=='pptx'||$extension=='xlsx'||$extension=='csv'){ ?>
                            <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                            <?php }?>
                            
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                              <?php if($extension=='gif'||$extension=='jpg'||$extension=='png'||$extension=='JPG'){?>
                              <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                              <?php } ?>
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                            
                            <?php if($extension=='mp3'||$extension=='ogg'||$extension=='oga'||$extension=='wav'||$extension=='wv'||$extension=='vox'||$extension=='tta'||$extension=='sln'||$extension=='raw'||$extension=='ra'||$extension=='rm'||$extension=='vox'||$extension=='m4p'||$extension=='m4a'){?>
                                        
                                    <audio controls>
                                      <source src="<?php echo base_url();?>./uploads/<?php echo $info->link; ?>" type="audio/mpeg">
                                    </audio> 
                            <?php }if($extension==0){ ?>
                            <?php } ?>
                            </td>
                            <td colspan="1" style="text-align:center">
                            <?php if($extension=='mp4'||$extension=='mpeg'){?>
                            <?php
                            $data=base_url().'uploads/'.$info->link;
                            echo anchor($data,'videolink');?>
                            <?php } ?>
                           
                             </td> 
                             <td style="text-align:center;">

                              <?php if($deleteaccess<=7 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>
                                   
                                 <div id="deleteushahidi"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $info->id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>

                               
                          
                               <?php } ?>
                             
                             
                             </tr> 
                            <?php }if($this->session->userdata('controller')=='csuhqx'||$this->session->userdata('controller')=='csuhqy'||$this->session->userdata('controller')=='csuhqz'){?> 
                            <tr> 
                            <td><?php echo $sno; ?></td><td style="text-align:center"><?php echo $info->force_no; ?></td><td style="align:centre;"><?php echo $info->description; ?></td>
                             <td colspan="1" style="text-align:center">
                                 
                             <?php if($extension=='pdf'||$extension=='doc'|| $extension=='txt'||$extension=='xls'||$extension=='xls'||$extension=='odt'||$extension=='docx'||$extension=='pptx'||$extension=='xlsx'||$extension=='csv'){ ?>
                            <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                            <?php }?>
                            
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                              <?php if($extension=='gif'||$extension=='jpg'||$extension=='png'||$extension=='JPG'){?>
                              <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                              <?php } ?>
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                            
                            <?php if($extension=='mp3'||$extension=='ogg'||$extension=='oga'||$extension=='wav'||$extension=='wv'||$extension=='vox'||$extension=='tta'||$extension=='sln'||$extension=='raw'||$extension=='ra'||$extension=='rm'||$extension=='vox'||$extension=='m4p'||$extension=='m4a'){?>
                                        
                                    <audio controls>
                                      <source src="<?php echo base_url();?>./uploads/<?php echo $info->link; ?>" type="audio/mpeg">
                                    </audio> 
                            <?php }if($extension==0){ ?>
                            <?php } ?>
                            </td>
                            <td colspan="1" style="text-align:center">
                            <?php if($extension=='mp4'||$extension=='mpeg'){?>
                            <?php
                            $data=base_url().'uploads/'.$info->link;
                            echo anchor($data,'videolink');?>
                            <?php } ?>
                           
                             </td> 
                             <td style="text-align:center;">

                              <?php if($deleteaccess<=8 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>
                                   
                                 <div id="deleteushahidi"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $info->id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>

                               
                          
                               <?php } ?>
                             
                             
                             </tr> 
                        <?php }if($this->session->userdata('controller')=='dci'){?> 
                            <tr> 
                            <td><?php echo $sno; ?></td><td style="text-align:center"><?php echo $info->force_no; ?></td><td style="align:centre;"><?php echo $info->description; ?></td>
                             <td colspan="1" style="text-align:center">
                                 
                             <?php if($extension=='pdf'||$extension=='doc'|| $extension=='txt'||$extension=='xls'||$extension=='xls'||$extension=='odt'||$extension=='docx'||$extension=='pptx'||$extension=='xlsx'||$extension=='csv'){ ?>
                            <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                            <?php }?>
                            
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                              <?php if($extension=='gif'||$extension=='jpg'||$extension=='png'||$extension=='JPG'){?>
                              <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                              <?php } ?>
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                            
                            <?php if($extension=='mp3'||$extension=='ogg'||$extension=='oga'||$extension=='wav'||$extension=='wv'||$extension=='vox'||$extension=='tta'||$extension=='sln'||$extension=='raw'||$extension=='ra'||$extension=='rm'||$extension=='vox'||$extension=='m4p'||$extension=='m4a'){?>
                                        
                                    <audio controls>
                                      <source src="<?php echo base_url();?>./uploads/<?php echo $info->link; ?>" type="audio/mpeg">
                                    </audio> 
                            <?php }if($extension==0){ ?>
                            <?php } ?>
                            </td>
                            <td colspan="1" style="text-align:center">
                            <?php if($extension=='mp4'||$extension=='mpeg'){?>
                            <?php
                            $data=base_url().'uploads/'.$info->link;
                            echo anchor($data,'videolink');?>
                            <?php } ?>
                           
                             </td> 
                             <td style="text-align:center;">

                              <?php if($deleteaccess<=8 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>
                                   
                                 <div id="deleteushahidi"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $info->id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>

                               
                          
                               <?php } ?>
                             
                             
                             </tr> 
                       <?php }if($this->session->userdata('controller')=='dpp'){?> 
                            <tr> 
                            <td><?php echo $sno; ?></td><td style="text-align:center"><?php echo $info->force_no; ?></td><td style="align:centre;"><?php echo $info->description; ?></td>
                             <td colspan="1" style="text-align:center">
                                 
                             <?php if($extension=='pdf'||$extension=='doc'|| $extension=='txt'||$extension=='xls'||$extension=='xls'||$extension=='odt'||$extension=='docx'||$extension=='pptx'||$extension=='xlsx'||$extension=='csv'){ ?>
                            <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                            <?php }?>
                            
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                              <?php if($extension=='gif'||$extension=='jpg'||$extension=='png'||$extension=='JPG'){?>
                              <a href="<?php echo base_url();?>uploads/<?php echo $info->link; ?>"><?php echo $info->link;?></a>
                              <?php } ?>
                            </td>
                            
                            <td colspan="1" style="text-align:center">
                            
                            <?php if($extension=='mp3'||$extension=='ogg'||$extension=='oga'||$extension=='wav'||$extension=='wv'||$extension=='vox'||$extension=='tta'||$extension=='sln'||$extension=='raw'||$extension=='ra'||$extension=='rm'||$extension=='vox'||$extension=='m4p'||$extension=='m4a'){?>
                                        
                                    <audio controls>
                                      <source src="<?php echo base_url();?>./uploads/<?php echo $info->link; ?>" type="audio/mpeg">
                                    </audio> 
                            <?php }if($extension==0){ ?>
                            <?php } ?>
                            </td>
                            <td colspan="1" style="text-align:center">
                            <?php if($extension=='mp4'||$extension=='mpeg'){?>
                            <?php
                            $data=base_url().'uploads/'.$info->link;
                            echo anchor($data,'videolink');?>
                            <?php } ?>
                           
                             </td> 
                             <td style="text-align:center;">

                              <?php if($deleteaccess<=9 && $this->session->userdata('force_no')==$force_no && $yearinfo==$year && $monthinfo==$month && $dayinfo==$day){ ?>
                                   
                                 <div id="deleteushahidi"><a href="" data-controller='<?php echo $this->session->userdata('controller'); ?>' data-id="<?php echo $info->id ; ?>" data-offence='<?php echo $info->offence_no;?>'><i class="glyphicon glyphicon-remove"></i></a></div>

                               
                          
                             <?php } ?>
                             
                             
                             </tr> 
                           <?php }?>     
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                     <?php }?>       
                </table>

                    
                    
                    
                    
                    
                    
                    
                    
                    

                </div>
                </div>
  