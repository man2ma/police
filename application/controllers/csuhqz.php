<?php

class Csuhqz extends CI_Controller{
    

 public function __construct(){         
           parent::__construct();
           $this->__clear_cache();
           $this->isLoggedIn();
        }
        
        public function index(){
            
           $data['title'] = 'CSMIS-CSUHQZ';
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
              'hqinternalstatus_no' => 'z'
             );
           $result = $this->csuhqz_model->getOffence($query_array,$limit,$offset,$sort_by,$sort_order);
   
           $data['offence'] = $result['rows'];
           $data['num_offence'] = $result['num_rows'];
           $data['query_id'] = $query_id;
           $data['sort_by'] = $sort_by;
           $data['sort_order'] = $sort_order;
            
           //pagination
           $config['base_url'] = base_url().$this->uri->segment(1).'/csuhqz/viewOffence/'.$query_id.'/'.$sort_by.'/'.$sort_order.'/';
           $config['total_rows'] =  $data['num_offence'];
           $config['per_page'] = $limit;
           $config['uri_segment'] = 7;
           $this->pagination->initialize($config);
           $data['pagination'] = $this->pagination->create_links();
            
           $data['title'] = 'CSMIS-CSUHQZ';
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
           'hqinternalstatus_no' => 'z'
       ); 
       
       $query_id = $this->input->save_query($query_array);
               
       redirect("csuhqx/viewOffence/$query_id");  
    }
       
        
       public function viewOneOffence($offence_no){
              $number=1;
              $hqinternalstatus_no='z';
              $checkdossierno['dossier_no']=$this->dossierno_model->getOdder($hqinternalstatus_no);
              if($checkdossierno['dossier_no']!=FALSE){
                 foreach($checkdossierno['dossier_no']->result() as $row)
                 {
                   $number++;  
                 }
              }
    
               $data['dossierno_settings'] = array(
                    'name'        => 'dossier_no',
                    'id'          => 'dossier_no',
                    'type'        => 'dossier_no',
                    'placeholder' => 'Dossier Namba',
                    'data-mask'=>"Dossier/".$number."/".date('Y'),
                    'class' => 'form-control'  
                 );
                 
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
           
           $data['title'] = 'CSMIS-CSUHQY';
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


  

    
    
    public function assignDCI($offence_id){
        $data['dci_no'] = $this->input->post('dci');
        $crimetypeid= $this->input->post('crimetypeid');
        if($crimetypeid==1)
        {
          $data['hqinternalstatus_no'] ='x';   
        }
        if($crimetypeid==2)
        {
          $data['hqinternalstatus_no'] ='y';   
        }
        if($crimetypeid==3)
        {
          $data['hqinternalstatus_no'] ='z';   
        }
        
        $assign_dci= $this->common_model->update($data,'offence','offence_no',$offence_id);
        if($assign_dci){
            redirect('csuhqz/viewOneOffence/'.$offence_id);
        }
    }
    public function assignDossierno($offence_id){
        $data['dossier_no'] = $this->input->post('dossier_no');
        $assign_dossier_no= $this->common_model->update($data,'offence','offence_no',$offence_id);
        if($assign_dossier_no){
            redirect('csuhqz/viewOneOffence/'.$offence_id);
        }
    }
      public function transfer_to_Dci($offence_id){
        $data['offence_statusid'] = 6;
        $send_dci = $this->common_model->update($data,'offence','offence_no',$offence_id);
        if($send_dci){
           redirect('csuhqz/viewOneOffence/'.$offence_id);
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
    
  


public function isLoggedIn() {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        $isPosition = $this->session->userdata('controller');
        if(!isset($isLoggedIn) || $isLoggedIn != true || $isPosition != 'csuhqz')
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



