<br/>
                <div class="row">
                <div class="col-xs-12">
                <table class="table table-bordered table-condensed">
                    <tr> <th colspan="1">&nbsp;</th><th style="text-align:center" colspan="1"></th><th style="text-align:center" colspan="1"></th><th colspan="2"style="text-align:center">Uwezo wa Mpelelezi</th></tr>
                    <tr> <th >Jina kamili la Mpelelezi</th><th style="text-align:center">Namba ya Jeshi</th><th style="text-align:center">Namba ya Simu</th><th colspan="1"style="text-align:center">Kupeleleza</th><th colspan="1" style="text-align:center">Taarifa za Mahakama</th></tr>
                    <?php foreach ($wapelelezi->result() as $info) { ?>
                                  <?php  $id=$info->info_id; ?>
                                  <?php  $courtAssigned=$info->courtAssigned; ?>
                                  <?php  $offence_no=$info->offence_no; ?>
                                  <?php  $investigator_status=$info->investigator_status; ?>
                                  <?php  $offence_statusid=$info->offence_statusid; ?>
                                  <?php  $allocator_no=$info->allocator_no; ?>
                         <tr>
                        <td><?php echo $info->fname.' '.$info->lname; ?></td>
                         <td align='center'><?php echo $info->force_no; ?></td>
                          <td align='center'><?php echo $info->mobile_no; ?></td>
                        <td align='center'><?php if($investigator_status==0){ ?>
                            <div id="ruhusukupeleleza" style='font-size:10px;'>
                                <?php if($this->session->userdata('force_no')==$allocator_no){?>
                              <a href='' data-id="<?php echo $id; ?>" data-offence="<?php echo $offence_no; ?>" data-force_no="<?php echo $info->force_no; ?>" data-offence_statusid='<?php echo $offence_statusid; ?>' data-controller='<?php echo $this->session->userdata('controller'); ?>'>
                              <i class="glyphicon glyphicon-remove"></i></a>
                                <?php }else{ ?>
                                &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                <?php } ?>
                            </div>
                                        <?php }else{ ?>
                            <div id="kutokurusukupeleleza" style='font-size:10px;'>
                                 <?php if($this->session->userdata('force_no')==$allocator_no){?>
                            <a href=''data-id="<?php echo $id; ?>"  data-offence="<?php echo $offence_no; ?>" data-force_no="<?php echo $info->force_no; ?>" data-offence_statusid='<?php echo $offence_statusid; ?>'  data-controller='<?php echo $this->session->userdata('controller'); ?>'><i class="glyphicon glyphicon-ok"></i></a>
                            <?php }else{ ?>
                            &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                <?php } ?>
                            </div> 
                                
                                <?php } ?></td>
                        
                        
                            <td align='center'>
                            
                            <?php if($courtAssigned==0){ ?>
                            
                            <div id="ruhusumplelezikujazatarifazamahakama" style='font-size:10px;'>
                                <a href=''data-id="<?php echo $id; ?>" data-offence="<?php echo $offence_no; ?>" data-offence_statusid='<?php echo $offence_statusid; ?>' data-controller='<?php echo $this->session->userdata('controller');?>'  force_no="<?php echo $info->force_no; ?>"><i class="glyphicon glyphicon-remove"></i></a>
                            </div>
                                
                            <?php }else{ ?>
                            
                            <div id="usiruhusumplelezikujazatarifazamahakama" style='font-size:10px;'>
                            <a href=''data-id="<?php echo $id; ?>" data-offence="<?php echo $offence_no; ?>" data-force_no="<?php echo $info->force_no; ?>" data-offence_statusid='<?php echo $offence_statusid; ?>'  data-controller='<?php echo $this->session->userdata('controller'); ?>'><i class="glyphicon glyphicon-ok"></i></a>
                            
                            </div>  
                                
                            <?php } ?></td>
                    <?php } ?>
                </table>



                </div>
            </div>