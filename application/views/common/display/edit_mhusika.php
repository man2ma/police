 <?php
  foreach ($mhusikainfo->result() as $data) {
 
    $fname_settings = array(
        'name'        => 'fname',
        'id'          => 'fname_mhusika_edt',
        'placeholder' => 'Jina la Kwanza',
        'value'       => $data->fname,
        'class' => 'form-control'  
    );
    
    $mname_settings = array(
        'name'        => 'midname',
        'id'          => 'mname_mhusika_edt',
        'placeholder' => 'Jina la Kati',
        'value'       => $data->midname,
        'class' => 'form-control'  
    );
    
    $lname_settings = array(
        'name'        => 'lname',
        'id'          => 'lname_mhusika_edt',
        'placeholder' => 'Jina la Mwisho',
        'value'       => $data->lname,
        'class' => 'form-control'  
    );
    
    $nickname_settings = array(
        'name'        => 'nick_name',
        'id'          => 'nick_name_edt',
        'placeholder' => 'Jina Maarufu',
        'value'       => $data->nickname,
        'class' => 'form-control'  
    );
    
    $address_settings = array(
        'name'        => 'address',
        'id'          => 'address_mhusika_edt',
        'placeholder' => 'Anuani',
        'value'       => $data->address,
        'class' => 'form-control'  
    );
    
   $physical_address = array(
        'name'        => 'paddress',
        'id'          => 'paddress_mhusika_edt',
        'placeholder' => 'Mahali anapoishi',
       'value'       => $data->phy_address,
        'class' => 'form-control'  
    );
      
    $birthplace_settings = array(
        'name'        => 'birth_place',
        'id'          => 'birth_place_mhusika_edt',
        'placeholder' => 'Mahali alipozaliwa',
        'value'       => $data->place_of_birth,
        'class' => 'form-control'  
    );
    
    $mobile_settings = array(
        'name'        => 'mobile',
        'id'          => 'mobile_mhusika_edt',
        'placeholder' => 'Namba ya Simu',
        'value'       => $data->mobile_no,
        'class' => 'form-control'  
    );
    $email_settings = array(
        'name'        => 'email',
        'id'          => 'email_mhusika_edt',
        'placeholder' => 'Barua pepe',
        'value'       => $data->email,
        'class' => 'form-control'  
    );

     $id_settings = array(
        'name'        => 'idno',
        'id'          => 'idno_mhusika_edt',
        'placeholder' => 'Namba ya Kitambulisho',
         'value'       => $data->id_no,
        'class' => 'form-control'  
    );

?>
<input type="hidden" name="offence" value="<?php echo $data->offence_no; ?>" id="offence_no"/>
<input type="hidden" name="wahusika" value="<?php echo $data->wahusika_id; ?>" id="wahusika_id"/>
          
<div class="form-group">
    <label>Uhusika</label>
        <select name ="uhusika" id="uhusika_edt" class="form-control"> 
        <option value=<?php echo $data->wahusika_typeid; ?>><?php echo $data->wahusika_typename; ?></option>   
        <?php  foreach ($uhusika_edit->result() as $uhusika_edit){?>
        
            <option value="<?php echo $uhusika_edit->wahusika_typeid; ?>"><?php echo $uhusika_edit->wahusika_typename; ?></option>
            <?php } ?>
        </select>
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
   <select  name="age" id="age_edt" class="form-control">
      <?php echo'<option value="'.$data->age.'">'.$data->age.'</option>'; ?>
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
        <select name ="sex" id="sex_edt" class="form-control"> 
        <option value=<?php echo $data->sex_id; ?>><?php echo $data->sex_name; ?></option>   
        <?php  foreach ($sex_edit->result() as $sex_edit){?>
        
            <option value="<?php echo $sex_edit->sex_id; ?>"><?php echo $sex_edit->sex_name; ?></option>
            <?php } ?>
        </select>
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
        <select name ="nationality" id="nationality_edt" class="form-control"> 
        <option value=<?php echo $data->nationality_id; ?>><?php echo $data->nationality_name; ?></option>   
        <?php  foreach ($nationality_edit->result() as $nationality_edit){?>
        
            <option value="<?php echo $nationality_edit->nationality_id; ?>"><?php echo $nationality_edit->nationality_name; ?></option>
            <?php } ?>
        </select>
</div>           

<div class="form-group">
    <label>Kabila</label>
        <select name ="tribe" id="tribe_edt" class="form-control"> 
        <option value=<?php echo $data->tribe_id; ?>><?php echo $data->tribe_name; ?></option>   
        <?php  foreach ($tribe_edit->result() as $tribe_edit){?>
        
            <option value="<?php echo $tribe_edit->tribe_id; ?>"><?php echo $tribe_edit->tribe_name; ?></option>
            <?php } ?>
        </select>
</div>  
          
<div class="form-group">
    <label>Dini</label>
        <select name ="religion" id="religion_edt" class="form-control"> 
        <option value=<?php echo $data->religion_id; ?>><?php echo $data->religion_name; ?></option>   
        <?php  foreach ($religion_edit->result() as $religion_edit){?>
        
            <option value="<?php echo $religion_edit->religion_id; ?>"><?php echo $religion_edit->religion_name; ?></option>
            <?php } ?>
       </select>
</div>  

<div class="form-group">
    <label>Hali ya Ndoa</label>
        <select name ="marital" id="marital_edt" class="form-control"> 
        <option value=<?php echo $data->maritalstatus_id; ?>><?php echo $data->marital_statusname; ?></option>   
        <?php  foreach ($marital_edit->result() as $marital_edit){?>
        
            <option value="<?php echo $marital_edit->marital_statusid; ?>"><?php echo $marital_edit->marital_statusname; ?></option>
            <?php } ?>
       </select>
</div> 

<div class="form-group">
    <label>Kiwango cha Elimu</label>
        <select name ="education" id="education_edt" class="form-control"> 
        <option value=<?php echo $data->education_id; ?>><?php echo $data->education_level; ?></option>   
        <?php  foreach ($education_edit->result() as $education_edit){?>
        
            <option value="<?php echo $education_edit->education_id; ?>"><?php echo $education_edit->education_level; ?></option>
            <?php } ?>
       </select>
</div>  

<div class="form-group">
    <label>Kazi Afanyayo</label>
        <select name ="occupation" id="occupation_edt" class="form-control"> 
        <option value=<?php echo $data->occupation_id; ?>><?php echo $data->occupation_name; ?></option>   
        <?php  foreach ($occupation_edit->result() as $occupation_edit){?>
        
            <option value="<?php echo $occupation_edit->occupation_id; ?>"><?php echo $occupation_edit->occupation_name; ?></option>
            <?php } ?>
       </select>
</div>  

<div class="form-group">
    <label>Aina ya Kitambulisho</label>
        <select name ="idtype" id="idtype_edt" class="form-control"> 
        <option value=<?php echo $data->id_type; ?>><?php echo $data->type_name; ?></option>   
        <?php  foreach ($idtype_edit->result() as $idtype_edit){?>
        
            <option value="<?php echo $idtype_edit->type_id; ?>"><?php echo $idtype_edit->type_name; ?></option>
            <?php } ?>
       </select>
</div>  

 <div class="form-group">
    <label>Namba ya Kitambulisho</label>
    <?php 
      echo form_input($id_settings);
    ?>
</div>


 <button type="button" id="edit_mhusika_button" class="btn btn-primary">Hifadhi </button>
 <input type="hidden" id="contrl" value="<?php echo $this->session->userdata('controller'); ?>"/>
 <?php } ?> 