<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin extends CI_Controller{
    

    
 public function __construct(){         
           parent::__construct();
           $this->__clear_cache();
           $this->isLoggedIn();
        }
        
        
        
        public function index(){
           $data['title'] = 'CSMIS-Admin';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/display/dashboard';
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
        
        
        
        
        public function viewUsers($query_id = 0, $sort_by = 'force_no', $sort_order = 'desc', $offset = 0){
           $limit = 20;
           $result = $this->admin_model->getUsers($limit,$offset,$sort_by,$sort_order);

           $data['users'] = $result['rows'];
           $data['num_users'] = $result['num_rows'];
           $data['query_id'] = $query_id;
           $data['sort_by'] = $sort_by;
           $data['sort_order'] = $sort_order;
         
           //pagination
           $config['base_url'] = base_url().$this->uri->segment(1).'/admin/index/'.$query_id.'/'.$sort_by.'/'.$sort_order.'/';
           $config['total_rows'] =  $data['num_users'];
           $config['per_page'] = $limit;
           $config['uri_segment'] = 7;
           $this->pagination->initialize($config);
           $data['pagination'] = $this->pagination->create_links();
            
           $data['title'] = 'CSMIS-Users';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/display/viewUsers';
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

       
        
       public function viewMakosa(){
           $data['makosa'] = $this->common_model->select('crime_type');
           
           $data['title'] = 'CSMIS-Offences';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/display/viewMakosa';
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
        
        
          public function viewOneKosa($crimetype_id){
           $data['onekosa'] = $this->common_model->select('crime_category','crimetype_id',$crimetype_id);
           $data['crimetype_id'] = $crimetype_id;
           
           $data['title'] = 'CSMIS-Offences';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/display/viewOnekosa';
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
        
        
       public function addMakosa($crimetype_id){
           $data['crimetype_id'] = $crimetype_id;
           $data['kosa'] = $this->admin_model->getCrimeType($data['crimetype_id']);
           
           $data['title'] = 'CSMIS-Offences';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/form/addMakosa';
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
        
        
        
        
        public function addMakosaDo(){
            $data['crimetype_id'] = $this->input->post('kosa');
            $data['crimecat_name'] = $this->input->post('kipengele');

            $insert = $this->common_model->insert($data, 'crime_category');
            if($insert){
                 $this->session->set_flashdata('message', '<div class="col-xs-12 alert alert-success" id="flash" style="text-align:center">Umefanikiwa kuongeza Kipengele cha kosa</div>');
                redirect('admin/addMakosa/'.$data['crimetype_id']);
            }
        }
        
        
        
        public function editOneKosa($crimecat_id, $crimecat_name){
           $data['resultdata'] = $this->common_model->select('crime_category','crimecat_id',$crimecat_id);
           
           $data['title'] = 'CSMIS-Offences';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/form/editOnekosa';
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
        
        
        public function editOneKosaDo(){
            $this->output->enable_profiler(TRUE);
            $crimetype_id = $this->input->post('crimetype_id');
            $crimecat_id = $this->input->post('crimecat_id');
            $data['crimecat_name'] = $this->input->post('kipengele');
            
            $update = $this->common_model->update($data,'crime_category','crimecat_id',$crimecat_id);
            if($update){
                $this->session->set_flashdata('message', '<div class="col-xs-12 alert alert-success" id="flash" style="text-align:center">Umefanikiwa kubadili Kipengele cha kosa</div>');
                redirect('admin/viewOneKosa/'.$crimetype_id);
            }
        }

        

        public function deleteOneKosa($crimecat_id, $crimetype_id){
           $delete = $this->common_model->delete('crime_category','crimecat_id',$crimecat_id);
           if($delete){
               redirect('admin/viewOneKosa/'.$crimetype_id);
           }
        }
        
       
        
       public function viewLocations(){
           $data['locations'] = $this->common_model->select('region_police',$column='',$region='');
           
           $data['title'] = 'CSMIS-Locations';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/display/viewLocations';
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
        
        
     
      public function viewOneRegion($region_id){
           $data['oneregion'] = $this->common_model->getPoliceDistricts($region_id);
           
           $data['title'] = 'CSMIS-Regions';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/display/viewdistricts';
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
        
        
        
       public function viewOneDistrict($district_id){
           $data['onedistrict'] = $this->common_model->getPoliceWard($district_id);
           
           $data['title'] = 'CSMIS-Regions';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/display/viewwards';
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
        
        
        
        
      public function viewStations($query_id = 0, $sort_by = 'station_id', $sort_order = 'desc', $offset = 0){
           $limit = 100;
           $result = $this->common_model->getPoliceStations($limit,$offset,$sort_by,$sort_order);

           $data['stations'] = $result['rows'];
           $data['num_stations'] = $result['num_rows'];
           $data['query_id'] = $query_id;
           $data['sort_by'] = $sort_by;
           $data['sort_order'] = $sort_order;
         
           //pagination
           $config['base_url'] = base_url().$this->uri->segment(1).'/admin/index/'.$query_id.'/'.$sort_by.'/'.$sort_order.'/';
           $config['total_rows'] =  $data['num_stations'];
           $config['per_page'] = $limit;
           $config['uri_segment'] = 7;
           $this->pagination->initialize($config);
           $data['pagination'] = $this->pagination->create_links();
           
           $data['title'] = 'CSMIS-Stations';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/display/viewstations';
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
        
        

        
        public function addPoliceStation(){
           $data['region_police'] = $this->common_model->getComboPolisiRegions();
           $data['station_type'] = $this->common_model->getComboStationType();
           $data['station_class'] = $this->common_model->getComboStationClass();
           $data['title'] = 'CSMIS-New user';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/form/newstation';
           $data['body_one_right_grid'] = '';
           $data['body_one_right'] = 'spaceHolder';
           
           $data['body_two_left_grid'] = 'col-xs-2';
           $data['body_two_left'] = 'spaceHolder';
           $data['body_two_middle_grid'] = 'col-xs-6';
           $data['body_two_middle'] = 'spaceHolder';
           $data['body_two_right_grid'] = '';
           $data['body_two_right'] = 'spaceHolder';
           $data['region_police']=$this->common_model->getComboPolisiRegions(); 
           $data['position']=$this->common_model->getComboNewuserPosition();
           $this->load->view('layouts/main_layout',$data);           
        }

        public function newUser(){           

           $data['title'] = 'CSMIS-New user';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/form/newuser';
           $data['body_one_right_grid'] = '';
           $data['body_one_right'] = 'spaceHolder';
           $data['body_two_left_grid'] = 'col-xs-2';
           $data['body_two_left'] = 'spaceHolder';
           $data['body_two_middle_grid'] = 'col-xs-6';
           $data['body_two_middle'] = 'spaceHolder';
           $data['body_two_right_grid'] = '';
           $data['body_two_right'] = 'spaceHolder';
           $data['region_police']=$this->common_model->getComboPolisiRegions(); 
           $data['position']=$this->common_model->getComboNewuserPosition();
           $this->load->view('layouts/main_layout',$data);           
        }
        
        
        
        
        public function userMoreinfo($users_id){     
            $this->output->enable_profiler(FALSE);
            
           $data['title'] = 'CSMIS-New user';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/form/moreuserinfo';
           $data['body_one_right_grid'] = '';
           $data['body_one_right'] = 'spaceHolder';
           $data['body_two_left_grid'] = 'col-xs-2';
           $data['body_two_left'] = 'spaceHolder';
           $data['body_two_middle_grid'] = 'col-xs-6';
           $data['body_two_middle'] = 'spaceHolder';
           $data['body_two_right_grid'] = '';
           $data['body_two_right'] = 'spaceHolder';
          
           $data['userinfo']=$this->admin_model->getUsermoreinfo($users_id);
           $this->load->view('layouts/main_layout',$data);
           
        }
        
        
        

       public function addPoliceStationDo(){
            
            $region_police = $this->input->post('region_police');
            $result = $this->common_model->select('region_police', 'region_policeid', $region_police);
            foreach ($result->result() as $value) {
              $region_nbs = $value->region_nbsid;
            }
            $district_police = $this->input->post('district_police');
            $result1 = $this->common_model->select('district_police', 'district_policeid', $district_police);
            foreach ($result1->result() as $val) {
                $district_nbs = $val->district_nbsid;
            }
            $ward_police = $this->input->post('ward_police');
            $result2 = $this->common_model->select('ward_police', 'ward_policeid', $ward_police);
            foreach ($result2->result() as $valu) {
                $ward_nbs = $valu->ward_nbsid;
            }

            $data['station_typeid']    = $this->input->post('station_type');
            $data['station_classid']   = $this->input->post('station_class');
            $data['station_name']      = $this->input->post('station_name');
            $data['region_policeid']   = $region_police;
            $data['region_nbsid']      = $region_nbs;
            $data['district_policeid'] = $district_police;
            $data['district_nbsid']    = $district_nbs;
            $data['ward_policeid']     = $ward_police;
            $data['ward_nbsid']        = $ward_nbs;
            
            $insert_station = $this->common_model->insert($data, 'station');
            if($insert_station){
                $this->session->set_flashdata('message', '<div class="col-xs-12 alert alert-success" id="flash" style="text-align:center">Umefanikiwa kuhifadhi kituo kipya cha Polisi</div>');
                redirect('admin/viewStations');
            }
        }

        
       public function deleteStation($station_id){
            $delete = $this->common_model->delete('station','station_id',$station_id);
            if($delete){
                $this->session->set_flashdata('message', '<div class="col-xs-12 alert alert-success" id="flash" style="text-align:center">Umefanikiwa kuondoa kituo</div>');
                redirect('admin/viewStations');
            }
       }
       

         // *********************** Get district information  *************  //
       public function getPolisiDistrict(){
           $region_policeid = $this->input->post('region_policenewlocation');
           $data['district_police'] = $this->common_model->getComboPolisiDistricts($region_policeid);
           $this->load->view('common/form/district_polisi',$data);
        }
        
        public function getPolisiDistrictnewLocation(){
           $region_policeid = $this->input->post('region_policeid');
           $data['district_police'] = $this->common_model->getComboPolisiDistricts($region_policeid);
           $this->load->view('common/form/district_polisinewLocation',$data);
           
        }
       
        
         // *********************** Get policeward information  *************  //
      
       
       public function getPolisiWard(){
           $district_policeid = $this->input->post('district_policeid'); 
           $data['ward_police'] = $this->common_model->getComboPolisiWardsByID($district_policeid);
           $this->load->view('common/form/ward_polisi',$data);
        }
        
        
        
         public function getPolisiWardnewLocation(){
           $district_policeid = $this->input->post('district_policenewlocation');
           $data['ward_police'] = $this->common_model->getComboPolisiWards($district_policeid);
           $this->load->view('common/form/ward_polisinewLocation',$data);
        }
        
        
        // *********************** Get polisiStation information  *************  //
        
        public function getPolisiStation(){
           $ward_policeid = $this->input->post('ward_policeid');
           $data['station_police'] = $this->common_model->getComboPolisiStation($ward_policeid);
           $this->load->view('common/form/station_polisi',$data);
        }
         public function getPolisiStationnewLocation(){
           $ward_policeid = $this->input->post('ward_policenewLocation');
           $data['station_police'] = $this->common_model->getComboPolisiStation($ward_policeid);
           $this->load->view('common/form/station_polisinewLocation',$data);
        }

        
        // ******************** Get transfer user to new Location ************** //
        
         public  function UpdateLocation(){ 
                 $userid=$this->input->post('id');
                 $locationnew=$this->input->post('locationnew');
                 $data['station_id']=$locationnew;
                 $this->admin_model->updateTable($data,'users','id',$userid);  
        }
        
        
        
        
        
        
        
        
        
        
      public function viewLogs(){
           $data['sessions'] = $this->common_model->select('ci_sessions', '', '','');

           $data['title'] = 'CSMIS-Police Station';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/display/viewlogs';
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

               

        
        
        
        
        
        public function addNewusers(){
            $data=array(
                'id'             =>   '',
                'force_no'       =>   $this->input->post('fno'),
                'password'       =>  md5($this->input->post('password')),
                'fname'          =>   $this->input->post('fname'),
                'midname'        =>   $this->input->post('mname'),
                'lname'          =>   $this->input->post('lname'),
                'mobile_no'      =>   $this->input->post('phone'),
                'user_typeid'    =>   $this->input->post('position'),
                'station_id'     =>   $this->input->post('station_police'),
                'user_statusid'  =>   '1'
            );
            echo $this->input->post('station_id');
            
           $insert = $this->common_model->insert($data,'users');
           redirect('admin/viewUsers');
        }
        
        public  function getCurrentposition(){
        $userid=$this->input->post('textbox');
        $data['userinfo']=$this->admin_model->getUsermoreinfo($userid);
        $data['position']=$this->admin_model->getPoliceposition();
        $this->load->view('admin/form/updateUserposition',$data);
        
        }

        public  function UpdatePosition(){ 
        $userid=$this->input->post('userid');
        $newpositionId=$this->input->post('newpositionId');
        $data['user_typeid']=$newpositionId;
        $userdata['admin_id']=$this->session->userdata('force_no');
        $this->admin_model->updateTable($data,'users','id',$userid);
        $history=$this->admin_model->select('users_history','','');
        foreach ($history->result() as $historyid){
            $hid=$historyid->id;  
        }
       $updatedhistory=$this->admin_model->updateTable($userdata,'users_history','id',$hid);
       if($updatedhistory)
       {
           $data['title'] = 'CSMIS-New user';
           $data['menu_one_left_grid'] = 'col-xs-12';
           $data['menu_one_left'] = 'admin/menu/menu_one_left';
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
           $data['body_one_middle'] = 'admin/form/moreuserinfo';
           $data['body_one_right_grid'] = '';
           $data['body_one_right'] = 'spaceHolder';
           $data['body_two_left_grid'] = 'col-xs-2';
           $data['body_two_left'] = 'spaceHolder';
           $data['body_two_middle_grid'] = 'col-xs-6';
           $data['body_two_middle'] = 'spaceHolder';
           $data['body_two_right_grid'] = '';
           $data['body_two_right'] = 'spaceHolder';
           $force_no=$userid;
           $data['userinfo']=$this->admin_model->getUsermoreinfo($force_no);
           $this->load->view('layouts/main_layout',$data);
       //$this->load->view('admin/form/updateUserposition'); 
      // redirect('admin/userMoreinfo/'.$userid);   
       }
       else{
           echo "nothing else";
       }
       
        }
        public  function DeactivateUser(){
          $userid=$this->input->post('textbox');
          $data['user_statusid']=2;
          $this->common_model->update($data,'users','id',$userid);
        }
        
        public  function ActivateUser(){
          $userid=$this->input->post('text');
          $data['user_statusid']=1;
          $this->common_model->update($data,'users','id',$userid);
        }
        public function getOldstationinfo(){
         $userid=$this->input->post('text');    
         $data['userinfo']=$this->admin_model->getUsermoreinfo($userid);  
         $data['region_police'] = $this->common_model->getComboPolisiRegions();
         $this->load->view('admin/form/useroldinfo',$data);
        }
        public function getuserOldpassword(){
         $userid=$this->input->post('id');    
         $data['userinfo']=$this->admin_model->getUsermoreinfo($userid);  
         $this->load->view('admin/form/user_Oldpassword',$data);
        }
        public function resetPassword()
        {
        $userid=$this->input->post('id');  
        $password=$this->input->post('password'); 
        $data['password']=sha1($password);
        $this->common_model->update($data,'users','id',$userid);
        }







        public function isLoggedIn() {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        $isPosition = $this->session->userdata('controller');
        if(!isset($isLoggedIn) || $isLoggedIn != true || $isPosition != 'admin')
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

?>
