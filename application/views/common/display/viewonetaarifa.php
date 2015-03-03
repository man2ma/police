<?php
$controller = $this->session->userdata('controller');

foreach ($taarifa->result() as $value) {
    $taarifa_id = $value->taarifa_id;
}
?>
<br/>
<br/>
<legend><i class='glyphicon glyphicon-tasks'></i><span class="alert-warning"> Orodha ya Taarifa </span></legend>
<br>


<br/>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-bordered ">
            <thead  class="alert alert-success" >
            <th>RB Namba</th>
            <th>Tarehe ya kuripoti</th>
            <th>Tarehe ya Tukio</th>
            <th>Kichwa cha Taarifa</th>
            <th>Taarifa yenyewe</th>
            <th>Mkoa</th>
            <th>Wilaya</th>
            <th>Kata</th>
        </thead>
            <tbody>
                <?php foreach($taarifa->result() as $offence) : ?>
                <tr>
                    <td><?php echo $offence->rb_no; ?></td>
                    <td><?php echo date("F j, Y g:i a", strtotime($offence->date_added)); ?></td>
                    <td><?php echo date("F j, Y g:i a", strtotime($offence->date_occured)); ?></td>
                    <td><?php echo $offence->taarifa_title; ?></td>
                    <td><?php echo $offence->taarifa_content; ?></td>
                    <td><?php echo $offence->region_policename; ?></td>
                    <td><?php echo $offence->district_policename; ?></td>
                    <td><?php echo $offence->ward_policename; ?></td>
                   
                </tr>

              <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>



<div class='row'>
  <div class='col-xs-12'>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab1" data-toggle="tab">Mtoa taarifa</a></li>
    </ul>
    <div class="tab-content">
        
          <div class="tab-pane active" id="tab1">
              <br/>
              <?php if(!$mtoataarifa){ ?>
                <button  class="btn btn-info"  data-toggle="modal" data-target="#myModal">Ongeza Mtoa Taarifa</button>
              <?php } ?>
              <br/>
               <div class="row">
                   <div class="col-xs-1">
                       
                   </div>
                   <div class="col-xs-5" id="mtoa_taarifa_space">
                <!-- If there is No any Complainant Display No complainant message -->
                <?php if($mtoataarifa){ ?>
                <!-- Taarifa za mtoa taarifa hapa-->
                <?php foreach ($mtoataarifa->result() as $info) { ?>
                        
                   
                <table>
                 <tr>
                     <td style="font-weight:bold">Jina Kamili:</td><td></td>
                     <td><?php echo $info->fname.' '.$info->midname.' '.$info->lname;?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Jina Maarufu:</td><td></td>
                     <td><?php echo $info->nickname; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Jinsi:</td><td></td>
                     <td><?php echo $info->sex_name; ?></td>
                 </tr>
                  <tr>
                     <td style="font-weight:bold">Umri:</td><td></td>
                     <td><?php echo $info->age; ?></td>
                 </tr>          
                  <tr>
                     <td style="font-weight:bold">Namba ya Simu:</td><td></td>
                     <td><?php echo $info->mobile_no; ?></td>
                 </tr>
                  <tr>
                     <td style="font-weight:bold">Amuani:</td><td></td>
                     <td><?php echo $info->address; ?></td>
                 </tr>
                  <tr>
                     <td style="font-weight:bold">Mahali Anapoishi:</td><td></td>
                     <td><?php echo $info->phy_address; ?></td>
                 </tr>
                  <tr>
                     <td style="font-weight:bold">Barua Pepe:</td><td></td>
                     <td><?php echo $info->email; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Mahali Alipozaliwa :</td><td></td>
                     <td><?php echo $info->place_of_birth; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Utaifa:</td><td></td>
                     <td><?php echo $info->nationality_name; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Kabila:</td><td></td>
                     <td><?php echo $info->tribe_name; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Dini :</td><td></td>
                     <td><?php echo $info->religion_name; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Hali ya Ndoa:</td><td></td>
                     <td><?php echo $info->marital_statusname; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Kiwango cha Elimu:</td><td></td>
                     <td><?php echo $info->education_level; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Kazi afanyayo :</td><td></td>
                     <td><?php echo $info->occupation_name; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Namba ya Kitambulisho :</td><td></td>
                     <td><?php echo $info->type_name.' - '.$info->id_no; ?></td>
                 </tr>       
             </table>
                <?php } ?>
                <?php } ?>
                   </div>
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
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i>Mtoa Taarifa</h4>
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

<input type="hidden" name="offence" value="<?php echo $taarifa_id; ?>" id="taarifa_id"/>
          
<!--<div class="form-group">
    <label>Uhusika</label>
       <?php 
       $js = 'id="uhusika" class="form-control"';
       //echo form_dropdown('uhusika',$uhusika,'large', $js); 
       ?>
</div> -->
          
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
        <button type="button" id="add_mtoa_taarifa" class="btn btn-primary">Hifadhi </button>
      </div>
    </div>
  </div>
</div>
