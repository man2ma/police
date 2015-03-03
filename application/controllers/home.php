<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Class Home extends CI_Controller{
    
    public $number ;
    public $password ;
    
    public function index(){
       $this->__clear_cache();
       $this->isLoggedIn();
       
       $data['title'] = 'CSMIS-POLICE FORCE TZ';
       $data['body_one_right'] = 'common/form/login';
       
       $this->load->view('layouts/home_layout',$data);
     
    }
   
    public function doLogin(){
        $this->output->enable_profiler(FALSE);
        $this->number = $this->input->post('number');
	$this->password = sha1($this->input->post('password'));   
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	$this->form_validation->set_rules('number', 'number', 'required|callback_checkUser');
	$this->form_validation->set_rules('password', 'password', 'required|callback_checkUser');
        
        if ($this->form_validation->run() == FALSE){
	$this->index();
	}
         else{
        //Auto load model common
	$data['userinfo'] = $this->home_model->getUserInfo($this->number, $this->password);

	foreach ($data['userinfo'] as $info){
	$user_session_data = array(
                'force_no'         => $info->force_no,
		'firstname'        => $info->fname,
                'middlename'       => $info->midname,
		'lastname'         => $info->lname,
		'phone'            => $info->mobile_no,
                'position'         => $info->user_typename,
                'usertype_id'         => $info->user_typeid,
                'region_nbs'       => $info->region_nbsname,
                'region_nbsid'     => $info->region_nbsid,
                'region_policename'=> $info->region_policename,
                'region_policeid'  => $info->region_policeid,
                'district_nbsid'   => $info->district_nbsid,
                'district_nbsname' => $info->district_nbsname,
                'district_policeid'=> $info->district_policeid,
                'district_policename' => $info->district_policename,
                'ward_nbsname'     => $info->ward_nbsname,
                'ward_nbsid'       => $info->ward_nbsid,
                'ward_policename'  => $info->ward_policename,
                'ward_policeid'    => $info->ward_policeid,
                'station_id'       => $info->station_id,
                'controller'       => $info->user_controller,
                'station_name'     => $info->station_name,
                'station_typeid'   => $info->station_typeid,
                'station_classid'   => $info->station_classid,
                'station_initial'  =>$info->station_initial
		  );
		}

	$this->session->set_userdata($user_session_data);
	$this->session->set_userdata('isLoggedIn',TRUE);

	 redirect($info->user_controller);
	}
    }
    
    
    public function checkUser() {
	//Auto load model Common
	$check = $this->home_model->checkUser($this->number, $this->password);
	if($check){
	return TRUE;
	}else {
        $this->form_validation->set_message('checkUser', 'Jina la Mtumiaji ama neno la siri limekosewa...');
	return FALSE;
	}
	}
        
   public function getSpaceHolder(){
       $this->load->view('spaceHolder');
   }


   public function logout(){
        $this->session->sess_destroy();
        redirect('home');
        }

   public function isLoggedIn() {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if(isset($isLoggedIn) && $isLoggedIn == true)
        {
        redirect($this->session->userdata('controller'));
        die();
        }

        }

   private function __clear_cache() {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
     }
}
?>
