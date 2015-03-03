<?php
 $data['mhusikainfo'] = $mhusikainfo;
?>
<?php foreach($oneoffence->result() as $off) { 
   $offence_id = $off->offence_no;
   $offence_status = $off->offence_statusid;
   $offence_ir = $off->ir_no;

 } ?>


<div class="row" id="mhusika_space">
<?php foreach ($mhusikainfo->result() as $info) { ?>
      <div class='row' id=<?php echo $info->offence_no; ?>> 
         <div class="col-xs-2">
             <a href='' data-id=<?php echo $info->wahusika_id; ?> title="Chagua_Picha"><img src="<?php echo base_url().'img/wahusika/'.$info->image;?>" class="img-polaroid"><?php echo form_open_multipart('cro/uploadMhusikaImg/'.$info->wahusika_id);?><input type='file' name='image'/><br /><input type='submit' name='upload' value='Upload Image'/><input type="hidden" name="mydirection" value='<?php echo current_url()?>' /><?php echo form_close()?></a>   
         </div>
         <div class='col-xs-5'>
                <table>
                 <tr>
                     <td style="font-weight:bold"> Uhusika:</td><td></td>
                     <td><?php echo $info->wahusika_typename;?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Jina Kamili:</td><td></td>
                     <td><?php echo $info->fname.' '.$info->midname.' '.$info->lname;?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Jinsi :</td><td></td>
                     <td><?php echo $info->sex_name; ?></td>
                 </tr>
                  <tr>
                     <td style="font-weight:bold">Umri :</td><td></td>
                     <td><?php echo $info->age; ?></td>
                 </tr>
             
                  <tr>
                     <td style="font-weight:bold">Namba ya Simu:</td><td></td>
                     <td><?php echo $info->mobile_no; ?></td>
                 </tr>
                  <tr>
                     <td style="font-weight:bold">Barua Pepe:</td><td></td>
                     <td><?php echo $info->email; ?></td>
                 </tr>
                  
             </table>
  <ul class="nav nav-pills">
       <input type="hidden" id="controller" value="<?php echo $this->session->userdata('controller'); ?>"/>
       <li data-option="view_more" data-id=<?php echo $info->wahusika_id; ?> class="wahusika_option"><?php echo anchor('', 'Tazama zaidi', array('class' => "muted")); ?></li>
      <?php if( $offence_status<12){?>
       <li data-option="edit" data-id=<?php echo $info->wahusika_id; ?> class="wahusika_option"><?php echo anchor('', 'Boresha', array('class' => "muted")); ?></li>
      <?php } ?>  
  </ul>
      </div>
          
    <div class="col-xs-5" id="more">
    <!--     Empty space to display ajax views-->
    </div>
</div>          
<?php } ?>

</div>
