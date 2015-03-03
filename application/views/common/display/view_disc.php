            <div class="row"> 
                <div class="span8 offset1">
                    <h4>Discussions</h4>
                <?php 
                 
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
                     <?php } ?>  
              </div>  
            </div>

