<?php

class Dpp extends CI_Controller{
    

 public function __construct(){         
           parent::__construct();
           $this->__clear_cache();
           $this->isLoggedIn();
        }
        
        public function index(){
            
           $data['title'] = 'CSMIS-DPP';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'common/menu/menu_one_left';
           $data['menu_one_middle'] = 'spaceHolder';
           $data['menu_one_middle_grid'] = 'col-xs-1';
           $data['menu_one_right_grid'] = '';
           $data['menu_one_right'] = 'spaceHolder';
           
           $data['menu_two_left_grid'] = 'col-xs-8';
           $data['menu_two_left'] = 'spaceHolder';
           $data['menu_two_middle_grid'] = 'col-xs-2';
           $data['menu_two_middle'] = 'spaceHolder';
           $data['menu_two_right_grid'] = 'col-xs-2';
           $data['menu_two_right'] = 'spaceHolder';
           
           $data['body_one_left_grid'] = '';
           $data['body_one_left'] = 'spaceHolder';
           $data['body_one_middle_grid'] = 'col-xs-12';
           $data['body_one_middle'] = 'common/display/dashboard';
           $data['body_one_right_grid'] = '';
           $data['body_one_right'] = 'spaceHolder';
           
           $data['body_two_left_grid'] = 'col-xs-2';
           $data['body_two_left'] = 'spaceHolder';
           $data['body_two_middle_grid'] = 'col-xs-6';
           $data['body_two_middle'] = 'spaceHolder';
           $data['body_two_right_grid'] = '';
           $data['body_two_right'] = 'spaceHolder';
           $this->load->view('layouts/main_layout',$data); 
        }
        

       
       
       public function viewOffence($query_id = 0, $sort_by = 'request_id', $sort_order = 'desc', $offset = 0){
           $this->output->enable_profiler(FALSE);
         
           $limit = 10;
           
           $data['crime_type']     = $this->common_model->getCrimeType();
           $data['crime_category'] = $this->common_model->getCrimeCategory();
           $data['offence_status'] = $this->common_model->getOffenceStatus();
           $data['ward_police'] = $this->common_model->getComboPolisiWards(); 
           $data['distric_police'] = $this->common_model->getComboPolisiDistricts(); 
           $data['region_police'] = $this->common_model->getComboPolisiRegions(); 
           $this->input->load_query($query_id);
            
           $query_array = array(
             'crimetype_id' => $this->input->get('crimetype_id'),
             'crimecat_id' => $this->input->get('crimecat_id'),
             'offence_statusid' => $this->input->get('offence_statusid'),
              
             );
           $result = $this->dpp_model->getOffence($query_array,$limit,$offset,$sort_by,$sort_order);
   
           $data['offence'] = $result['rows'];
           $data['num_offence'] = $result['num_rows'];
           $data['query_id'] = $query_id;
           $data['sort_by'] = $sort_by;
           $data['sort_order'] = $sort_order;
            
           //pagination
           $config['base_url'] = base_url().$this->uri->segment(1).'/dci/viewOffence/'.$query_id.'/'.$sort_by.'/'.$sort_order.'/';
           $config['total_rows'] =  $data['num_offence'];
           $config['per_page'] = $limit;
           $config['uri_segment'] = 7;
           $this->pagination->initialize($config);
           $data['pagination'] = $this->pagination->create_links();
            
           $data['title'] = 'CSMIS-DPP';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'common/menu/menu_one_left';
           $data['menu_one_middle'] = 'spaceHolder';
           $data['menu_one_middle_grid'] = 'col-xs-1';
           $data['menu_one_right_grid'] = '';
           $data['menu_one_right'] = 'spaceHolder';
           
           $data['menu_two_left_grid'] = 'col-xs-8';
           $data['menu_two_left'] = 'spaceHolder';
           $data['menu_two_middle_grid'] = 'col-xs-2';
           $data['menu_two_middle'] = 'spaceHolder';
           $data['menu_two_right_grid'] = 'col-xs-2';
           $data['menu_two_right'] = 'spaceHolder';
           
           $data['body_one_left_grid'] = '';
           $data['body_one_left'] = 'spaceHolder';
           $data['body_one_middle_grid'] = 'col-xs-12';
           $data['body_one_middle'] = 'common/display/viewoffence';
           $data['body_one_right_grid'] = '';
           $data['body_one_right'] = 'spaceHolder';
           
           $data['body_two_left_grid'] = 'col-xs-2';
           $data['body_two_left'] = 'spaceHolder';
           $data['body_two_middle_grid'] = 'col-xs-6';
           $data['body_two_middle'] = 'spaceHolder';
           $data['body_two_right_grid'] = '';
           $data['body_two_right'] = 'spaceHolder';
           $this->load->view('layouts/main_layout',$data);
       }
       
       
    public function filterOffence(){
       $query_array = array(
           'crimetype_id' => $this->input->post('crimetype_id'),
           'crimecat_id' => $this->input->post('crimecat_id'),
           'offence_statusid' => $this->input->post('offence_statusid'),
         
         
       ); 
       
       $query_id = $this->input->save_query($query_array);
               
       redirect("dci/viewOffence/$query_id");  
    }
       
        
       public function viewOneOffence($offence_no){
            
            // $this->output->enable_profiler(TRUE);  
           $data['user_disc'] = $this->common_model->getComboUsersForDisc();
           $data['oneoffence']  = $this->cro_model->getOneOffence($offence_no);
           $data['sex']         = $this->common_model->getSex();
           $data['nationality'] = $this->common_model->getNationality();
           $data['tribe']       = $this->common_model->getTribe();
           $data['religion']    = $this->common_model->getReligion();
           $data['marital']     = $this->common_model->getMaritalStatus();
           $data['education']   = $this->common_model->getEducation();
           $data['occupation']  = $this->common_model->getOccupation();
           $data['idtype']      = $this->common_model->getIDType();
           $data['uhusika']     = $this->common_model->getWahusika();
           
           $data['wapelelezi']  = $this->common_model->getWapelelezi($offence_no);
           $data['ushahidi']  = $this->common_model->getUshahidi($offence_no);
           $data['mahakama']=$this->common_model->getMahakama($offence_no);
           $data['assignedMpelelezi']=$this->common_model->getassignedMplelezi($offence_no);
           $data['chaguaWapelelezi']=$this->common_model->getSelectInvestigators();
           $data['taarifazamahakama']=$this->common_model->courtInfo($offence_no);
           $data['chaguaWatuhumiwa']=$this->common_model->getWatuhumiwa($offence_no);
           $data['mhusikainfo']   = $this->common_model->getMhusikainfo($offence_no);
           $data['discussions'] = $this->common_model->getDiscussions($offence_no,$this->session->userdata('force_no'),$this->session->userdata('force_no'));
           $data['title'] = 'CSMIS-DPP';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'common/menu/menu_one_left';
           $data['menu_one_middle'] = 'spaceHolder';
           $data['menu_one_middle_grid'] = 'col-xs-1';
           $data['menu_one_right_grid'] = '';
           $data['menu_one_right'] = 'spaceHolder';
           
           $data['menu_two_left_grid'] = 'col-xs-8';
           $data['menu_two_left'] = 'spaceHolder';
           $data['menu_two_middle_grid'] = 'col-xs-2';
           $data['menu_two_middle'] = 'spaceHolder';
           $data['menu_two_right_grid'] = 'col-xs-2';
           $data['menu_two_right'] = 'spaceHolder';
           
           $data['body_one_left_grid'] = '';
           $data['body_one_left'] = 'spaceHolder';
           $data['body_one_middle_grid'] = 'col-xs-12';
           $data['body_one_middle'] = 'common/display/viewoneoffence';
           $data['body_one_right_grid'] = '';
           $data['body_one_right'] = 'spaceHolder';
           
           $data['body_two_left_grid'] = 'col-xs-2';
           $data['body_two_left'] = 'spaceHolder';
           $data['body_two_middle_grid'] = 'col-xs-6';
           $data['body_two_middle'] = 'spaceHolder';
           $data['body_two_right_grid'] = '';
           $data['body_two_right'] = 'spaceHolder';
           $this->load->view('layouts/main_layout',$data);
       }

       
       
       
   public function viewMhusika(){
         
        $wahusika_id = $this->input->post('wahusika_id');
        
        $data['mhusikainfo'] = $this->common_model->getSpecificMhusikainfo($wahusika_id);
        $this->load->view('common/display/view_mhusika_ajax',$data);
   }

   
   public function editMhusika(){
       
       $wahusika_id = $this->input->post('wahusika_id');
       $data['mhusikainfo'] = $this->common_model->getSpecificMhusikainfo($wahusika_id);

       //Used when editing forms
       $data['sex_edit']         = $this->common_model->getSex($value=1);
       $data['nationality_edit'] = $this->common_model->getNationality($value=1);
       $data['tribe_edit']       = $this->common_model->getTribe($value=1);
       $data['religion_edit']    = $this->common_model->getReligion($value=1);
       $data['marital_edit']     = $this->common_model->getMaritalStatus($value=1);
       $data['education_edit']   = $this->common_model->getEducation($value=1);
       $data['occupation_edit']  = $this->common_model->getOccupation($value=1);
       $data['idtype_edit']      = $this->common_model->getIDType($value=1);
       $data['uhusika_edit']     = $this->common_model->getWahusika($value=1);
       //end when editing
        
       $this->load->view('common/display/edit_mhusika',$data);   
}



   public function editMhusikaDo(){
           //$this->output->enable_profiler(TRUE);
       
           $wahusika_id              = $this->input->post('wahusika');
           $data['wahusika_typeid']  = $this->input->post('uhusika_type');
           $data['fname']            = $this->input->post('fname');
           $data['midname']          = $this->input->post('mname');
           $data['lname']            = $this->input->post('lname');
           $data['nickname']         = $this->input->post('nick_name');
           $data['sex']              = $this->input->post('gender');
           $data['age']              = $this->input->post('age_number');
           $data['nationality_id']   = $this->input->post('nation');
           $data['tribe_id']         = $this->input->post('tribe_type');
           $data['address']          = $this->input->post('address');
           $data['phy_address']      = $this->input->post('paddress');
           $data['place_of_birth']   = $this->input->post('bplace');
           $data['mobile_no']        = $this->input->post('mobile');
           $data['email']            = $this->input->post('email');
           $data['religion_id']      = $this->input->post('religion_type');
           $data['id_type']          = $this->input->post('id_type');
           $data['id_no']            = $this->input->post('id_no');
           $data['maritalstatus_id'] = $this->input->post('marital_status');
           $data['education_id']     = $this->input->post('education_level');
           $data['occupation_id']    = $this->input->post('occupation_type');
           
       $mhusika_current = $this->common_model->getSpecificMhusikainfo($wahusika_id);
       foreach ($mhusika_current->result() as $item){
           $cur_data['wahusika_typeid']  = $item->wahusika_id;
           $cur_data['fname']            = $item->fname;
           $cur_data['midname']          = $item->midname;
           $cur_data['lname']            = $item->lname;
           $cur_data['nickname']         = $item->nickname;
           $cur_data['sex']              = $item->sex;
           $cur_data['age']              = $item->age;
           $cur_data['nationality_id']   = $item->nationality_id;
           $cur_data['tribe_id']         = $item->tribe_id;
           $cur_data['address']          = $item->address;
           $cur_data['phy_address']      = $item->phy_address;
           $cur_data['place_of_birth']   = $item->place_of_birth;
           $cur_data['mobile_no']        = $item->mobile_no;
           $cur_data['email']            = $item->email;
           $cur_data['religion_id']      = $item->religion_id;
           $cur_data['id_type']          = $item->id_type;
           $cur_data['id_no']            = $item->id_no;
           $cur_data['maritalstatus_id'] = $item->maritalstatus_id;
           $cur_data['education_id']     = $item->education_id;
           $cur_data['occupation_id']    = $item->occupation_id;
       }
       
       
         $result_diff = array_diff_assoc($data, $cur_data);

         //if there is diffirent do this..
         if(!empty($result_diff)){
           $update_mhusika = $this->common_model->update($data,'wahusika','wahusika_id',$wahusika_id);
           if($update_mhusika){
               $data['mhusikainfo']   = $this->common_model->getMhusikainfo($this->input->post('offence')); 
               $this->session->set_flashdata('message', '<div class="col-xs-12 alert alert-success" id="flash">Umefanikiwa kufanya mabadiliko</div>');
               $this->load->view('common/display/view_mhusika',$data);
              }  
           }else{
               $this->session->set_flashdata('message', '<div class="col-xs-12 alert alert-warning" id="flash">Hujabadili kitu!</div>');    
               $this->load->view('common/display/view_mhusika',$data);
           }
           
       }
       

public function uploadMhusikaImg($wahusika_id){
    //$this->output->enable_profiler(TRUE);
    //Do uploading
    if(isset($_POST['upload'])){
    $folder = 'img/wahusika/';
    $orig_w = 500;
    
    $mydirection = $this->input->post('mydirection');
    $imageFile = $_FILES['image']['tmp_name'];
    $filename = basename($_FILES['image']['name']);
    
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    list($width,$height) = getimagesize($imageFile);
    switch ($ext){
        case 'jpeg':
        $src = imagecreatefromjpeg($imageFile);
        break;
    
        case 'JPEG':
        $src = imagecreatefromjpeg($imageFile);
        break;
    
        case 'jpg':
        $src = imagecreatefromjpeg($imageFile);
        break;
    
        case 'JPG':
        $src = imagecreatefromjpeg($imageFile);
        break;
    
        case 'png':
        $src = imagecreatefrompng($imageFile);
        break;
        
    
        case 'PNG':
        $src = imagecreatefrompng($imageFile);
        break;
    
        default :
           die('Invalid image type');
    }
   
    
    $orig_h = ($height/$width)*$orig_w;
    
    $tmp = imagecreatetruecolor($orig_w, $orig_h);
    
    imagecopyresampled($tmp,$src,0,0,0,0,$orig_w,$orig_h,$width,$height);
    imagejpeg($tmp, $folder.$wahusika_id,100);
    
    imagedestroy($tmp);
    imagedestroy($src);
    
    
   $data['folder'] = $folder;
   $data['filename'] = $filename;
   $data['orig_w'] = $orig_w;
   $data['orig_h'] = $orig_h;
   $data['wahusika_id'] = $wahusika_id;
   $data['mydirection'] = $mydirection;
   
   $data['width'] = 140;
   $data['height'] = 140;
   $data['ratio'] = 140/140;
   
   
   $this->load->view('common/display/imageCropZone',$data);
   
   }
elseif(isset ($_POST['crop'])){
    $filename = $_POST['filename'];
    $folder = $_POST['folder'];
    $width = $_POST['width'];
    $height = $_POST['height'];
    $wahusika_id = $_POST['wahusika_id'];
    $mydirection = $_POST['mydirection'];
    
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    switch ($ext){
        case 'jpeg':
        $src = imagecreatefromjpeg($folder.$wahusika_id);
        break;
    
        case 'JPEG':
        $src = imagecreatefromjpeg($folder.$wahusika_id);
        break;
    
        case 'jpg':
        $src = imagecreatefromjpeg($folder.$wahusika_id);
        break;
    
        case 'JPG':
        $src = imagecreatefromjpeg($folder.$wahusika_id);
        break;
    
        case 'png':
        $src = imagecreatefrompng($folder.$wahusika_id);
        break;
        
    
        case 'PNG':
        $src = imagecreatefrompng($folder.$wahusika_id);
        break;
    
        default :
           die('Invalid image type');
    }
    
    $tmp = imagecreatetruecolor($width, $height);
    
    imagecopyresampled($tmp,$src,0,0,$_POST['x'],$_POST['y'],$width,$height,$_POST['w'],$_POST['h']);
    imagejpeg($tmp, $folder.'t_'.$wahusika_id,100);
    
    imagedestroy($tmp);
    imagedestroy($src);
    
    $data['image'] = 't_'.$wahusika_id;
    $this->common_model->update($data,'wahusika','wahusika_id',$wahusika_id);
    redirect($mydirection);
    }   
}
  public function transfer_to_Highcourt($offence_id){
        $data['offence_statusid']=11;
        $send_dci = $this->common_model->update($data,'offence','offence_no',$offence_id);
        if($send_dci){
            redirect('dci/viewOneOffence/'.$offence_id);
        }
    }
  public function LoadCourt(){
        
      $data['offenceid']= $this->input->post('data');
      $data['controller']= $this->input->post('controller');
      $this->load->view('common/form/highCourt',$data);
      
    }
     public function TransfertoCourt() {
         $offence_id= $this->input->post('offenceid');
         $data['offence_statusid']= $this->input->post('courtid');
         $datacourt['offence_no']=$offence_id;
         $datacourt['courtname']=$this->input->post('courtname');
         $datacourt['force_no']=$this->session->userdata('force_no');
         $datacourt['courtlevel_id']= $this->input->post('courtid');
         $this->common_model->update($data,'offence','offence_no',$offence_id);
         $insert_court= $this->common_model->insert($datacourt,'courtinfo'); 
        if($insert_court){
         $this->load->view('common/form/closeCourt');   
        }
    }
   public function view_kesiImefungwa(){
       $this->load->view('common/form/view_kesiImefungwa');   
     }
     
     
     public function view_adhabuform(){
       $this->load->view('common/form/view_adhabuform');   
         
     }
     
      public function pernartFactors(){
       $datainfo=$this->input->post('datainfo');
       if($datainfo==1)
       {
          
        $this->load->view('common/form/view_kifungoform');   
            
       }
       if($datainfo==2)
       {
         $this->load->view('common/form/view_fidiaform');   
            
       }
       if($datainfo==3)
       {
         $this->load->view('common/form/view_kifungofidiaform');   
            
       }
       
       
     }
    public function courtTaarifa(){
       $data['date']=$this->input->post('tarehe'); 
       $data['courtforce_no']=$this->session->userdata('force_no');  
       $offence_no=$this->input->post('offence_no');
       $data['offence_no']=$offence_no; 
       $data['court_levelid']=$this->input->post('offence_status'); 
      // $data['offence_id']=$this->input->post('mahakamaid');
       $data['taarifa_id']=$this->input->post('hatuazakimahakama');
       $data['wahusika_id']=$this->input->post('chaguaWatuhumiwa'); 
       $data['court_hatuaid']= $this->input->post('courtclosinginfo');
       $data['athabu_id']= $this->input->post('pernaltfactorid'); 
       $amount=$this->input->post('amount');
       $jailyearsid= $this->input->post('jailyearsid'); 
       $jailmonthsid=$this->input->post('jailmonthsid');
       if($jailmonthsid=='')
       {
        $data['miezi']='';  
       }
       else
       {
        $data['miezi']=$this->input->post('jailmonthsid');   
       }
       if($jailyearsid=='')
       {
        $data['miaka']='';  
       }
       else
       {
        $data['miaka']=$this->input->post('jailmonthsid');   
       }
       
       if($amount=='')
       {
        $data['fidia']='';  
       }
       else
       {
        $data['fidia']=$this->input->post('amount');   
       }
       $data['infodescription']= $this->input->post('ushahidi');
       $insert_court= $this->common_model->insert($data,'courtstatus_info'); 
        if($insert_court)
        {
         $data['taarifazamahakama']=$this->common_model->courtInfo($offence_no);
         $this->load->view('common/display/view_taafazamahakama', $data);
        }   
     }
     public function deleteCourtinfo() {
         
        $courtinfoid= $this->input->post('courtinfoid'); 
        $offence_no= $this->input->post('offence_no');
        $deleted_courtinfo= $this->common_model->delete('courtstatus_info','courtinfo_id',$courtinfoid);
        if($deleted_courtinfo)
        {
          
          $data['taarifazamahakama']=$this->common_model->courtInfo($offence_no);
          $this->load->view('common/display/view_taafazamahakama', $data);
        }
       
         
     }   
 //////////end of upelelezi  
     
 public function checkcourtclosing(){
           $offence_no= $this->input->post('offence_no');
           $dataclosingcourt=$this->common_model->CourtClosingInfo($offence_no);
           if($dataclosingcourt!= NULL){ 
            $data['offence_no']=$offence_no;
             $data['mhusikaclosinginfo']=$this->common_model->CourtwahusikaClosing($offence_no);
             $this->load->view('common/form/view_courtclosingform', $data);
            }
       else{
            $data['offence_no']=$offence_no;
            $this->load->view('common/form/view_closingbypoliceform', $data);
          }
     }
     
    public function ClosingOffencePolice()
    {
      $offence_no= $this->input->post('offence_no');
      $description=$this->input->post('description');
      $offenceupdate['offence_statusid']=$this->input->post('courtid');
      
      $chaguaWatuhumiwa=$this->common_model->getWatuhumiwaClosing($offence_no);
   
      if($chaguaWatuhumiwa!= NULL)
      {
        $count=1;
       foreach($chaguaWatuhumiwa->result() as $info){
        $wahusika_id=$info->wahusika_id;
        $dataupdate['closing_statusid']=1;
        $datainfo=$count++; 
        $this->common_model->update($dataupdate,'wahusika','wahusika_id',$wahusika_id);
       
      }

      $data['offence_closingid']=$offence_no;
      $data['walioachiwa']= $datainfo;
      $this->common_model->update($offenceupdate,'offence','offence_no',$offence_no);
      $insert_offence = $this->common_model->insert($data,'offence_closinginfo');
      if($insert_offence)
      {
         $this->load->view('common/display/view_policeclosing', $data);
      }   
      }
      else
      {
        $data['offence_closingid']=$offence_no;
        

        $data['maelezo']=$description;
        $this->common_model->update($offenceupdate,'offence','offence_no',$offence_no);
        $insert_offenceclosing=$this->common_model->insert($data,'offence_closinginfo');
        if($insert_offenceclosing)
        {
          $this->load->view('common/display/view_policeclosing', $data);
        }
      }
      
    } 
    public function ClosingOffenceCourt(){
        $walioachiwa=0 ;
        $bothfungafidia=0;
        $waliofungwa=0;
        $waliotozwafidia=0;
        $offence_no= $this->input->post('offence_no');   
        $courtlevelid= $this->input->post('courtlevelid');
        $mhusikaclosinginfo=$this->common_model->CourtwahusikaClosing($offence_no);
        foreach($mhusikaclosinginfo->result() as $info){
                $athabu=$info->athabu_id;
                $offence=$info->offence_no;
               if($athabu==0)
               {
                   $achia= count($athabu);
                   $walioachiwa+=$achia;
                   
                   
               }
               if($athabu==1)
               {
                   $funga=count($athabu);
                   $waliofungwa+= $funga;
                   
                 
               }
               if($athabu==2)
               {
                   $fidia=count($athabu);
                   $waliotozwafidia+= $fidia;
                   
                 
               }
               if($athabu==3)
               {
                   $fungafidia=count($athabu);
                   $bothfungafidia+=$fungafidia;
                   
                 
               }
              $dataupdate['closing_statusid']=$athabu;
              $wahusika_id=$info->wahusika_id;
              $this->common_model->update($dataupdate,'wahusika','wahusika_id',$wahusika_id);    
        }
          $data['walioachiwa']=$walioachiwa;
          $data['waliofungwa']=$waliofungwa;
          $data['waliotozwafidia']=$waliotozwafidia;
          $data['kifungofidia']=$bothfungafidia;
          $data['offence_closingid']=$offence_no;
          if($courtlevelid==8)
          {
             $datachange['offence_statusid']=15;   
          }
          if($courtlevelid==9)
          {
             $datachange['offence_statusid']=16;   
          }
          if($courtlevelid==10)
          {
             $datachange['offence_statusid']=17;   
          }
          if($courtlevelid==11)
          {
             $datachange['offence_statusid']=18;   
          }
          $insert_offence=$this->common_model->insert($data,'offence_closinginfo');
          $this->common_model->update($datachange,'offence','offence_no',$offence_no);
          if($insert_offence){
              $this->load->view('common/display/closing', $data);   
          }
         
     } 
     
     
     
     
     ///////end of closing information
       public function saveDiscussion(){
           $data['sender_id'] = $this->input->post('sender');
           $data['receiver_id'] = $this->input->post('receiver');
           $data['disc_content'] = $this->input->post('content');
           $data['offence_no'] = $this->input->post('offence');
           
           $insert = $this->common_model->insert($data,'discussions');
           if($insert){
               $disc['discussions'] = $this->common_model->getDiscussions($data['offence_no'],$data['sender_id'],$data['receiver_id']);
               $this->load->view('common/display/view_disc',$disc);
           }
       }

    


public function isLoggedIn() {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        $isPosition = $this->session->userdata('controller');
        if(!isset($isLoggedIn) || $isLoggedIn != true || $isPosition != 'dpp')
             {
            redirect('home');
            die();
             }
        }
    
        
        private function __clear_cache() {
                $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
                $this->output->set_header("Pragma: no-cache");
        }
        
      


}

