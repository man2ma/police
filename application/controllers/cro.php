<?php

class Cro extends CI_Controller{
    

 public function __construct(){         
           parent::__construct();
           $this->__clear_cache();
           $this->isLoggedIn();
        }
        
        public function index(){
            
           $data['title'] = 'CSMIS-CRO';
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
        
   public function newTaarifa(){
           $data['crime_type'] = $this->cro_model->getCrimeType();

           $data['title'] = 'CSMIS-CRO';
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
           $data['date_settings'] = array(
                    'name'        => 'date',
                    'id'          =>'date',
                    'type'        =>  'text',
                    'placeholder' => 'Tarehe ya tukio',
                    'class' => 'form-control'  
                 );
           $data['rb_settings'] = array(
                    'name'        =>'rb',
                    'id'          =>'rb',
                    'type'        => 'text',
                    'value'=>$this->getRBSeries(),
                    //'readonly'=>'true',
                    'class' => 'form-control'  
                );
           $data['body_one_left_grid'] = '';
           $data['body_one_left'] = 'spaceHolder';
           $data['body_one_middle_grid'] = 'col-xs-12';
           $data['body_one_middle'] = 'common/form/newtaarifa';
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
        
        
        
        public function newTaarifaDo() {
            $data['date_occured']    = $this->input->post('date');
            $data['rb_no']           = $this->input->post('rb'); 
            $data['taarifa_title']   = $this->input->post('taarifa_title');
            $data['taarifa_content'] = $this->input->post('taarifa_content');
            $data['station_id']      = $this->session->userdata('station_id');
            $data['added_by']        = $this->session->userdata('force_no');
            $data['is_taarifa']      = 1; //Yes is taarifa
            
            $insert_taarifa = $this->common_model->insert($data,'taarifa');
            if($insert_taarifa){
                redirect('cro/viewTaarifa');
            } 
        }
        
  
public function viewTaarifa($query_id = 0, $sort_by = 'request_id', $sort_order = 'desc', $offset = 0){
           $this->output->enable_profiler(FALSE);
           $limit = 10;
           
           $data['ward_police'] = $this->common_model->getComboPolisiWards(); 
           $data['distric_police'] = $this->common_model->getComboPolisiDistricts(); 
           $data['region_police'] = $this->common_model->getComboPolisiRegions(); 
           $this->input->load_query($query_id);
            
           $query_array = array(
             'region_policeid' => $this->input->get('region_policeid'),
             'district_policeid' => $this->input->get('district_policeid'),
             'ward_policeid' => $this->input->get('ward_policeid')
             );
           $result = $this->cro_model->getTaarifa($query_array,$limit,$offset,$sort_by,$sort_order);
   
           $data['taarifa'] = $result['rows'];
           $data['num_taarifa'] = $result['num_rows'];
           $data['query_id'] = $query_id;
           $data['sort_by'] = $sort_by;
           $data['sort_order'] = $sort_order;
            
           //pagination
           $config['base_url'] = base_url().$this->uri->segment(1).'/cro/viewTaarifa/'.$query_id.'/'.$sort_by.'/'.$sort_order.'/';
           $config['total_rows'] =  $data['num_taarifa'];
           $config['per_page'] = $limit;
           $config['uri_segment'] = 7;
           $this->pagination->initialize($config);
           $data['pagination'] = $this->pagination->create_links();
            
           $data['title'] = 'CSMIS-CRO';
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
           $data['body_one_middle'] = 'common/display/view_taarifa';
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
       
       
    public function filterTaarifa(){
       $query_array = array(
           'crimetype_id' => $this->input->post('crimetype_id'),
           'crimecat_id' => $this->input->post('crimecat_id'),
           'offence_statusid' => $this->input->post('offence_statusid'),
           'region_policeid' => $this->input->post('region_policeid'),
           'district_policeid' => $this->input->post('district_policeid'),
           'ward_policeid' => $this->input->post('ward_policeid')
       ); 
       
       $query_id = $this->input->save_query($query_array);
               
       redirect("cro/viewOffence/$query_id");  
    }
   
    
    
    public function viewOneTaarifa($taarifa_id){

           $data['sex']         = $this->common_model->getSex();
           $data['nationality'] = $this->common_model->getNationality();
           $data['tribe']       = $this->common_model->getTribe();
           $data['religion']    = $this->common_model->getReligion();
           $data['marital']     = $this->common_model->getMaritalStatus();
           $data['education']   = $this->common_model->getEducation();
           $data['occupation']  = $this->common_model->getOccupation();
           $data['idtype']      = $this->common_model->getIDType();
           
           $data['mtoataarifa']   =$this->common_model->getMtoaTaarifaInfo($taarifa_id);
           $data['taarifa'] = $this->cro_model->getOneTaarifa($taarifa_id);
        
           $data['title'] = 'CSMIS-CRO';
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
           $data['body_one_middle'] = 'common/display/viewonetaarifa';
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

    



    public function newOffence(){
           $data['crime_type'] = $this->cro_model->getCrimeType();

           $data['title'] = 'CSMIS-CRO';
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
           $data['body_one_middle'] = 'common/form/newoffence';
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

       public function getCrimeCategory(){
           $crime_type = $this->input->post('crime_typeid');
           $data['crime_category'] = $this->cro_model->getCrimeCategory($crime_type);
           $this->load->view('common/form/crime_category',$data);
        }
        public function getVehicle() {
         $data['vehicle_category']=$this->common_model->getVehicle();
         $this->load->view('common/form/vehicle_types',$data);
           
        }
        
        public function getVehiclesubcategory() {
                           $data['idadi_settings'] = array(
                    'name'        => 'idadi',
                    'id'          => 'idadi',
                    'type'        =>  'Idadi',
                    'placeholder' => 'Idadi',
                    'class' => 'form-control'  
                );
                
                $data['mbinu_settings'] = array(
                    'name'        => 'mbinu',
                    'type'        =>  'mbinu',
                    'placeholder' => 'Mbinu',
                    'class' => 'form-control'  
                );

                $data['mahali_settings'] = array(
                    'name'        => 'mahali',
                    'id'          =>'mahali',
                    'type'        =>  'mahali',
                    'placeholder' => 'Mahali',
                    'class' => 'form-control'  
                );

                $data['sababu_settings'] = array(
                    'name'        => 'sababu',
                    'id'          =>'sababu',
                    'type'        =>  'sababu',
                    'placeholder' => 'Sababu',
                    'class' => 'form-control'  
                );
                
                $data['shule_settings'] = array(
                    'name'        => 'shule',
                    'id'          =>'shule',
                    'type'        =>  'text',
                    'placeholder' => 'Shule asomayo',
                    'class' => 'form-control'  
                 );
                
                $data['kidato_settings'] = array(
                    'name'        => 'kidato',
                    'id'          =>'kidato',
                    'type'        =>  'kidato',
                    'placeholder' => 'Kidato',
                    'class' => 'form-control'  
                 );
                
                $data['date_settings'] = array(
                    'name'        => 'date',
                    'id'          =>'date',
                    'type'        =>  'text',
                    'placeholder' => 'Tarehe ya tukio',
                    'class' => 'form-control'  
                 );
                 
                $data['aina_settings'] = array(
                    'name'        => 'aina',
                    'id'          =>'aina',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );

                $data['number_settings'] = array(
                    'name'        => 'number',
                    'id'          =>'number',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['idadi_settings'] = array(
                    'name'        => 'idadi',
                    'id'          => 'idadi',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['mmiliki_settings'] = array(
                    'name'        => 'mmiliki',
                    'id'          => 'mmiliki',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['thamaniharibika_settings'] = array(
                    'name'        => 'thamani_haribika',
                    'id'          => 'thamani_haribika',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['thamaniokolewa_settings'] = array(
                    'name'        => 'thamani_okolewa',
                    'id'          => 'thamani_okolewa',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['amount_settings'] = array(
                    'name'        => 'amount',
                    'id'          => 'amount',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['itemaffected_settings'] = array(
                    'name'        => 'item_affected',
                    'id'          => 'item_affected',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['itemokolewa_settings'] = array(
                    'name'        => 'item_okolewa',
                    'id'          => 'item_okolewa',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['mtenda_settings'] = array(
                    'name'        => 'mtenda',
                    'id'          =>'mtenda',
                    'type'        =>  'mtenda',
                    'placeholder' => '',
                    'class' => 'form-control'  
                 );
                 
                $data['mtendwa_settings'] = array(
                    'name'        => 'mtendwa',
                    'id'          => 'mtendwa',
                    'type'        => 'mtendwa',
                    'placeholder' => '',
                    'class' => 'form-control'  
                 );
                
                $data['source_settings'] = array(
                    'name'        =>'source',
                    'id'          =>'source',
                    'type'        => 'source',
                    'placeholder' => '',
                    'class' => 'form-control'  
                 );
                
                 $data['rb_settings'] = array(
                    'name'        =>'rb',
                    'id'          =>'rb',
                    'type'        => 'text',
                    //'data-mask'=>"aaa/RB/999999/".date('Y'),
                    'value'=>$this->getRBSeries(),
                    //'readonly'=>'true',
                    //'placeholder' => 'RB Namba',
                    'class' => 'form-control'  
                );

                $data['ir_settings'] = array(
                    'name'        => 'ir',
                    'id'          => 'ir',
                    'type'        => 'ir',
                    'placeholder' => 'IR Namba',
                    'data-mask'=>"aaa/IR/999999/".date('Y'),
                    'class' => 'form-control'  
                 );
                
                $data['dci_settings'] = array(
                    'name'        => 'dci',
                    'id'          => 'dci',
                    'type'        => 'dci',
                    'placeholder' => 'DCI Namba',
                    'class' => 'form-control'  
                 );
            $vehicle_categoryid= $this->input->post('vehicle_categoryid');
            $data['vehicle_categoryid'] = $this->common_model->getVehiclesubcategory($vehicle_categoryid);
            $this->load->view('common/form/vehicle_subcategory', $data);
        }
        
        public function getOtherForm(){
           $other_value = $this->input->post('other_value');
           if($other_value == 'Nyingine'){
           $this->load->view('common/form/otherForm');
           }
        }
        
        public function getMadawaForm(){
           $data['aina_madawa'] = $this->input->post('madawa_kulevya');
           $type = array(0,11);
           $data['madawa_kulevya'] = $this->common_model->getCrimesubCategory($type);
           $this->load->view('common/form/dawaForm',$data);
        }
        
        
      public function getCrimeSubCategory(){
                $crime_cat = $this->input->post('crime_categoryid');
                $data['idadi_settings'] = array(
                    'name'        => 'idadi',
                    'id'          => 'idadi',
                    'type'        =>  'Idadi',
                    'placeholder' => 'Idadi',
                    'class' => 'form-control'  
                );
                
                $data['mbinu_settings'] = array(
                    'name'        => 'mbinu',
                    'type'        =>  'mbinu',
                    'placeholder' => 'Mbinu',
                    'class' => 'form-control'  
                );

                $data['mahali_settings'] = array(
                    'name'        => 'mahali',
                    'id'          =>'mahali',
                    'type'        =>  'mahali',
                    'placeholder' => 'Mahali',
                    'class' => 'form-control'  
                );

                $data['sababu_settings'] = array(
                    'name'        => 'sababu',
                    'id'          =>'sababu',
                    'type'        =>  'sababu',
                    'placeholder' => 'Sababu',
                    'class' => 'form-control'  
                );
                
                $data['shule_settings'] = array(
                    'name'        => 'shule',
                    'id'          =>'shule',
                    'type'        =>  'text',
                    'placeholder' => 'Shule asomayo',
                    'class' => 'form-control'  
                 );
                
                $data['kidato_settings'] = array(
                    'name'        => 'kidato',
                    'id'          =>'kidato',
                    'type'        =>  'kidato',
                    'placeholder' => 'Kidato',
                    'class' => 'form-control'  
                 );
                
                $data['date_settings'] = array(
                    'name'        => 'date',
                    'id'          =>'date',
                    'type'        =>  'text',
                    'placeholder' => 'Tarehe ya tukio',
                    'class' => 'form-control'  
                 );
                 
                $data['aina_settings'] = array(
                    'name'        => 'aina',
                    'id'          =>'aina',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );

                $data['number_settings'] = array(
                    'name'        => 'number',
                    'id'          =>'number',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['idadi_settings'] = array(
                    'name'        => 'idadi',
                    'id'          => 'idadi',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['mmiliki_settings'] = array(
                    'name'        => 'mmiliki',
                    'id'          => 'mmiliki',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['thamaniharibika_settings'] = array(
                    'name'        => 'thamani_haribika',
                    'id'          => 'thamani_haribika',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['thamaniokolewa_settings'] = array(
                    'name'        => 'thamani_okolewa',
                    'id'          => 'thamani_okolewa',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['amount_settings'] = array(
                    'name'        => 'amount',
                    'id'          => 'amount',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['itemaffected_settings'] = array(
                    'name'        => 'item_affected',
                    'id'          => 'item_affected',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['itemokolewa_settings'] = array(
                    'name'        => 'item_okolewa',
                    'id'          => 'item_okolewa',
                    'type'        =>  'text',
                    'placeholder' => '',
                    'class' => 'form-control'  
                );
                 
                $data['mtenda_settings'] = array(
                    'name'        => 'mtenda',
                    'id'          =>'mtenda',
                    'type'        =>  'mtenda',
                    'placeholder' => '',
                    'class' => 'form-control'  
                 );
                 
                $data['mtendwa_settings'] = array(
                    'name'        => 'mtendwa',
                    'id'          => 'mtendwa',
                    'type'        => 'mtendwa',
                    'placeholder' => '',
                    'class' => 'form-control'  
                 );
                
                $data['source_settings'] = array(
                    'name'        =>'source',
                    'id'          =>'source',
                    'type'        => 'source',
                    'placeholder' => '',
                    'class' => 'form-control'  
                 );
                
                //
                 $data['rb_settings'] = array(
                    'name'        =>'rb',
                    'id'          =>'rb',
                    'type'        => 'text',
                    //'data-mask'=>"aaa/RB/999999/".date('Y'),
                    'value'=>$this->getRBSeries(),
                    //'readonly'=>'true',
                    //'placeholder' => 'RB Namba',
                    'class' => 'form-control'  
                );

                $data['ir_settings'] = array(
                    'name'        => 'ir',
                    'id'          => 'ir',
                    'type'        => 'text',
                    //'placeholder' => 'IR Namba',
                    //'data-mask'=>"aaa/IR/999999/".date('Y'),
                    'value'=>$this->getIRSeries(),
                    //'readonly'=>'true',
                    'class' => 'form-control'  
                 );
                
                $data['dci_settings'] = array(
                    'name'        => 'dci',
                    'id'          => 'dci',
                    'type'        => 'text',
                    'placeholder' => 'DCI Namba',
                    'class' => 'form-control'  
                 );
                                
                $data['country'] = $this->common_model->getCountry();
                
                $silaha = array(0,1,2);
                $data['silaha'] = $this->common_model->getCrimesubCategory($silaha);
                
                $sababu_kubaka_kulawiti = array(0,3);
                $data['sababu_kubaka_kulawiti'] = $this->common_model->getCrimesubCategory($sababu_kubaka_kulawiti);
          
                $njia_usafirishaji_binadamu = array(0,4);
                $data['njia_usafirishaji_binadamu'] = $this->common_model->getCrimesubCategory($njia_usafirishaji_binadamu);
                
                $sababu_kutupa_watoto = array(0,5);
                $data['sababu_kutupa_watoto'] = $this->common_model->getCrimesubCategory($sababu_kutupa_watoto);
                
                $sababu_wizi_watoto = array(0,6);
                $data['sababu_wizi_watoto'] = $this->common_model->getCrimesubCategory($sababu_wizi_watoto);
                
                $kupatikana_silaha = array(0,1);
                $data['kupatikana_silaha'] = $this->common_model->getCrimesubCategory($kupatikana_silaha);
                
                $nyara_aliyokutwa_nayo = array(0,7);
                $data['nyara_aliyokutwa_nayo'] = $this->common_model->getCrimesubCategory($nyara_aliyokutwa_nayo);
                
                $aina_bomu = array(0,8);
                $data['aina_bomu'] = $this->common_model->getCrimesubCategory($aina_bomu);
                
                $sababu_kupatikana_nyaraka = array(0,9);
                $data['sababu_kupatikana_nyaraka'] = $this->common_model->getCrimesubCategory($sababu_kupatikana_nyaraka);
                
                $aina_ya_dawa = array(0,10);
                $data['aina_ya_dawa'] = $this->common_model->getCrimesubCategory($aina_ya_dawa);
                
                $umri_mimba = array(0,12);
                $data['umri_mimba'] = $this->common_model->getCrimesubCategory($umri_mimba);
 
                $daraja_elimu = array(0,13);
                $data['daraja_elimu'] = $this->common_model->getCrimesubCategory($daraja_elimu);
                
                $aina_jeshi = array(0,14);
                $data['aina_jeshi'] = $this->common_model->getCrimesubCategory($aina_jeshi);
                
                $aina_hifadhi = array(0,15);
                $data['aina_hifadhi'] = $this->common_model->getCrimesubCategory($aina_hifadhi);
                
                $jina_hifadhi = array(0,16);
                $data['jina_hifadhi'] = $this->common_model->getCrimesubCategory($jina_hifadhi);
          //---Start Makosa dhidi ya Binadamu
           if($crime_cat == 1){
               
               $this->load->view('common/form/binadamu/mauaji',$data);
               
           }elseif($crime_cat == 2){
               
                $this->load->view('common/form/binadamu/kifo',$data);
           }
           elseif($crime_cat == 3){
               
               $this->load->view('common/form/binadamu/kubaka',$data);
               
           }elseif($crime_cat == 4){
               
                $this->load->view('common/form/binadamu/kulawiti',$data);
           }
           elseif($crime_cat == 5){
               
               $this->load->view('common/form/binadamu/kunajisi',$data);
               
           }elseif($crime_cat == 6){
               
                $this->load->view('common/form/binadamu/usafirishaji_binadamu',$data);
           }
           elseif($crime_cat == 7){
               
               $this->load->view('common/form/binadamu/kuzini_maharimu',$data);
               
           }elseif($crime_cat == 8){
               
                $this->load->view('common/form/binadamu/kutupa_watoto',$data);
           }
           elseif($crime_cat == 9){
               
               $this->load->view('common/form/binadamu/wizi_watoto',$data);
               
           }
           elseif($crime_cat == 63){
               
               $this->load->view('common/form/binadamu/shambulio',$data);
               
           }
           //---End Makosa dhidi ya Binadamu
           
            //---Start Makosa dhidi ya Maadili ya Jamii
           elseif($crime_cat == 10){
               
                $this->load->view('common/form/maadili/kupatikana_silaha',$data);
           }
           elseif($crime_cat == 11){
               
                $this->load->view('common/form/maadili/kupatikana_nyara',$data);
           }
           elseif($crime_cat == 12){
               
               $this->load->view('common/form/maadili/rushwa',$data);
               
           }elseif($crime_cat == 13){
               
                $this->load->view('common/form/maadili/kupatikana_pombemoshi',$data);
           }
           elseif($crime_cat == 14){
               
               $this->load->view('common/form/maadili/magendo',$data);
               
           }elseif($crime_cat == 15){
               
                $this->load->view('common/form/maadili/kupatikana_risasi',$data);
           }
           elseif($crime_cat == 16){
               
               $this->load->view('common/form/maadili/kupatikana_bomu',$data);
               
           }elseif($crime_cat == 17){
               
                $this->load->view('common/form/maadili/uhamiaji_haramu',$data);
           }
           elseif($crime_cat == 18){
               
               $this->load->view('common/form/maadili/nyaraka_serikali',$data);
               
           }elseif($crime_cat == 19){
               
                $this->load->view('common/form/maadili/kupatikana_dawa',$data);
           }
           elseif($crime_cat == 20){
               
               $this->load->view('common/form/maadili/ukahaba',$data);
               
           }elseif($crime_cat == 21){
               
                $this->load->view('common/form/maadili/kukataa_amrihalali',$data);
           }
           elseif($crime_cat == 22){
               
               $this->load->view('common/form/maadili/mimba_mwanafunzi',$data);
               
           }elseif($crime_cat == 23){
               
                $this->load->view('common/form/maadili/kupatikana_sare',$data);
           }
           elseif($crime_cat == 24){
               
               $this->load->view('common/form/maadili/kupigana_hadharani',$data);
               
           }elseif($crime_cat == 25){
               
                $this->load->view('common/form/maadili/kuingia_hifadhi',$data);
           }
           elseif($crime_cat == 26){
               
               $this->load->view('common/form/maadili/kutelekeza_familia',$data);
               
          }elseif($crime_cat == 27){
               
                $this->load->view('common/form/maadili/kutoataarifa_uongo',$data);
           }
           elseif($crime_cat == 28){
               
               $this->load->view('common/form/maadili/kutoroka_kambini',$data);
               
           }elseif($crime_cat == 29){
               
                $this->load->view('common/form/maadili/kutorosha_mtotoshule',$data);
           }
           elseif($crime_cat == 30){
               
               $this->load->view('common/form/maadili/kutishia_kuua',$data);
               
           }elseif($crime_cat == 31){
               
                $this->load->view('common/form/maadili/lugha_matusi',$data);
           }
           elseif($crime_cat == 32){
               
               $this->load->view('common/form/maadili/kumzuia_mtumishi',$data);
               
           }elseif($crime_cat == 33){
               
                $this->load->view('common/form/maadili/kucheza_kamari',$data);
           }
           elseif($crime_cat == 34){
               
               $this->load->view('common/form/maadili/uwindaji_haramu',$data);
               
           }elseif($crime_cat == 35){
               
               $this->load->view('common/form/maadili/kufanya_fujo',$data);
               
           }elseif($crime_cat == 36){
               
                $this->load->view('common/form/maadili/kuharibu_mali',$data);
           }
           elseif($crime_cat == 61){
               
               $this->load->view('common/form/maadili/kufyatua_risasi',$data);
               
           }
            //---End Makosa dhidi ya Maadili ya Jamii
           
           //---Start Makosa ya kuwania Mali
           elseif($crime_cat == 37){
               
                $this->load->view('common/form/mali/wizi_mifugo',$data);
           }
           elseif($crime_cat == 38){
               
                $this->load->view('common/form/mali/wizi_silaha',$data);
           }
           elseif($crime_cat == 39){
               
              $this->load->view('common/form/mali/wizi_vyombomoto',$data);
               
           }elseif($crime_cat == 40){
               
                $this->load->view('common/form/mali/wizi_mabenki',$data);
           }
           elseif($crime_cat == 41){
               
               $this->load->view('common/form/mali/wizi_serikalini',$data);
               
           }elseif($crime_cat == 42){
               
                $this->load->view('common/form/mali/wizi_mali',$data);
           }
           elseif($crime_cat == 43){
               
               $this->load->view('common/form/mali/wizi_risasi',$data);
               
           }elseif($crime_cat == 44){
               
                $this->load->view('common/form/mali/unyanganyi',$data);
                
           }elseif($crime_cat == 45){
               
                $this->load->view('common/form/mali/unganganyi_barabarakuu',$data);
           }
           elseif($crime_cat == 46){
               
                $this->load->view('common/form/mali/kuchoma_moto',$data);
           }
           elseif($crime_cat == 47){
               
               $this->load->view('common/form/mali/ajali_moto',$data);
               
           }elseif($crime_cat == 48){
               
                $this->load->view('common/form/mali/uvunjaji',$data);
           }
           elseif($crime_cat == 49){
               
               $this->load->view('common/form/mali/fedha_bandia',$data);
               
           }elseif($crime_cat == 50){
               
                $this->load->view('common/form/mali/wizi_maungoni',$data);
           }
           elseif($crime_cat == 51){
               
               $this->load->view('common/form/mali/kujaribu_kunyanganya',$data);
               
           }elseif($crime_cat == 52){
               
                $this->load->view('common/form/mali/kujipatia_deni',$data);
           }
           elseif($crime_cat == 53){
               
               $this->load->view('common/form/mali/kujipatia_fedha',$data);
               
           }elseif($crime_cat == 54){
               
                $this->load->view('common/form/mali/kujipatia_mali',$data);
           }
           elseif($crime_cat == 55){
               
               $this->load->view('common/form/mali/wizi_kuaminiana',$data);
               
           }elseif($crime_cat == 56){
               
                $this->load->view('common/form/mali/biashara_bilaleseni',$data);
           }
           //---End Makosa ya kuwania Mali
        }

        
        public function getRBSeries() {
            
            $station_initial = $this->session->userdata('station_initial'); 
            
            //select to get the last rb in the table Taarifa
            $this->db->select('rb_no');
            $this->db->from('taarifa');
            $this->db->where('date_format(date_added,"%Y")="'.date('Y').'"');
            $this->db->where('station_id',$this->session->userdata('station_id'));
            $this->db->order_by('taarifa_id DESC');
            $this->db->limit(1);
            $last = $this->db->get();
            if($last->num_rows()>0){
               // return $last;
                foreach ($last->result() as $value) {
                     $last_rb = $value->rb_no;
                }        
            }else{
                    $last_rb = '';
            }
            
            //Explode rb if !=''
            if($last_rb!= ''){
                $val = explode('/', $last_rb);
                $series = $val[2];
            }else{
                $series ='';
            }
            

            $totalseries1 = $series + 1;
            $totalseries = "0000".$totalseries1;

            $realseries = substr($totalseries, -6);
            $rb = $station_initial."/RB/".$realseries."/".date('Y');

                    return $rb;
            }


        public function getIRSeries() {
            
            $station_initial = $this->session->userdata('station_initial'); 
            
            //select to get the last rb in the table Taarifa
            $this->db->select('ir_no');
            $this->db->from('offence');
            $this->db->where('date_format(date_reported,"%Y")="'.date('Y').'"');
            $this->db->not_like('ir_no','Haijawekwa');
            $this->db->where('station_id',$this->session->userdata('station_id'));

            //$this->db->order_by('offence_no DESC');
            //$this->db->limit(1);
            $last = $this->db->get();
            if($last->num_rows()>0){
               $i =0;
                foreach ($last->result() as $value) {
                   $i++;
                     $list_ir = $value->ir_no; 
                     $val = explode('/', $list_ir);
                     $series[$i] = $val[2].'<br/>';
                     
               }
               $max_ir = max($series);
            } 

            $totalseries1 = $max_ir + 1;
            $totalseries = "0000".$totalseries1;

            $realseries = substr($totalseries, -6);
            $ir = $station_initial."/IR/".$realseries."/".date('Y');
                    return $ir;
            }
            
            
            
        
  
       public function newOffenceDo(){
           
           $data['station_id']       = $this->session->userdata('station_id');
           $data['force_no']         = $this->session->userdata('force_no');
           $data['crimetype_id']     = $this->input->post('crime_type');
           $data['crimecat_id']      = $this->input->post('crime_category');
           
           $data['vehicle_typeid']      = $this->input->post('vehicle_type');
           $data['vehicle_categoryid']  = $this->input->post('vehicle_category');
           
//           $data['mauaji_kawaida']      = $this->input->post('mauajikawaida');
//           $data['mauaji_albino']  = $this->input->post('mauajialbino');
//           $data['mauaji_vikongwe']  = $this->input->post('mauajivikongwe');
           
           
           $data['tukiostatus']      = $this->input->post('status');
           $data['idadi']            = $this->input->post('idadi');
           $data['mbinu']            = $this->input->post('mbinu');
           $data['offence_location'] = $this->input->post('mahali');
           $data['sababu']           = $this->input->post('sababu');
           $data['reactions']        = $this->input->post('silaha');
           $data['shule']            = $this->input->post('shule');
           $data['kidato']           = $this->input->post('kidato');
           $data['date_occurance']   = $this->input->post('date');
           $data['aina']             = $this->input->post('aina');
           $data['number']           = $this->input->post('number');
           $data['idadi']            = $this->input->post('idadi');
           $data['mmiliki']          = $this->input->post('mmiliki');
           $data['item_affected']    = $this->input->post('item_affected');
           $data['item_okolewa']     = $this->input->post('item_okolewa');
           $data['thamani_haribika'] = $this->input->post('thamani_haribika');
           $data['thamani_okolewa']  = $this->input->post('thamani_okolewa');
           $data['amount']           = $this->input->post('amount');
           $data['mtenda']           = $this->input->post('mtenda');
           $data['mtendwa']          = $this->input->post('mtendwa');
           $data['source']           = $this->input->post('source');
           $data['rb_no']            = $this->input->post('rb');

           $data['mengineyo']        = $this->input->post('mengineyo');
           $data['region_nbsid']     = $this->session->userdata('region_nbsid');
           $data['region_policeid']  = $this->session->userdata('region_policeid');
           $data['district_nbsid']   = $this->session->userdata('district_nbsid');
           $data['district_policeid']= $this->session->userdata('district_policeid');
           $data['ward_nbsid']       = $this->session->userdata('ward_nbsid');
           $data['ward_policeid']    = $this->session->userdata('ward_policeid');
           
           $datataarifa['rb_no']            = $this->input->post('rb');
           $datataarifa['added_by']         = $this->session->userdata('force_no');
           $datataarifa['station_id']       = $this->session->userdata('station_id');

           if($this->input->post('ir') != null)
               {
               $data['offence_statusid'] = 2;
               $data['ir_no']            = $this->input->post('ir');
               }else
               {
               $data['offence_statusid'] = 1;
               }
           $insert_offence = $this->common_model->insert($data,'offence');
           if($insert_offence){
           $insert_taarifa = $this->common_model->insert($datataarifa,'taarifa');
               redirect('cro/viewOffence');
           }
           
       }
     
       
       public function viewOffence($query_id = 0, $sort_by = 'request_id', $sort_order = 'desc', $offset = 0){
           $this->output->enable_profiler(FALSE);
           $limit = 20;
           
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
             'region_policeid' => $this->input->get('region_policeid'),
             'district_policeid' => $this->input->get('district_policeid'),
             'ward_policeid' => $this->input->get('ward_policeid')
             );
           $result = $this->cro_model->getOffence($query_array,$limit,$offset,$sort_by,$sort_order);
   
           $data['offence'] = $result['rows'];
           $data['num_offence'] = $result['num_rows'];
           $data['query_id'] = $query_id;
           $data['sort_by'] = $sort_by;
           $data['sort_order'] = $sort_order;
            
           //pagination
           $config['base_url'] = base_url().$this->uri->segment(1).'/cro/viewOffence/'.$query_id.'/'.$sort_by.'/'.$sort_order.'/';
           $config['total_rows'] =  $data['num_offence'];
           $config['per_page'] = $limit;
           $config['uri_segment'] = 7;
           $this->pagination->initialize($config);
           $data['pagination'] = $this->pagination->create_links();
            
           $data['title'] = 'CSMIS-CRO';
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
           'region_policeid' => $this->input->post('region_policeid'),
           'district_policeid' => $this->input->post('district_policeid'),
           'ward_policeid' => $this->input->post('ward_policeid')
       ); 
       
       $query_id = $this->input->save_query($query_array);
               
       redirect("cro/viewOffence/$query_id");  
    }
       
     
    
     public function viewOneOffence($offence_no){
                $data['ir_settings'] = array(
                    'name'        => 'ir',
                    'id'          => 'ir',
                    'type'        => 'text',
                    //'placeholder' => 'IR Namba',
                    //'data-mask'=>"aaa/IR/999999/".date('Y'),
                    'value'=>$this->getIRSeries(),
                    //'readonly'=>'true',
                    'class' => 'form-control'  
                 );
           //$this->output->enable_profiler(TRUE);
           
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
           $data['assignedMpelelezi']=$this->common_model->getassignedMplelezi($offence_no);
           $data['ushahidi']=$this->common_model->getUshahidi($offence_no);
           $data['taarifazamahakama']=$this->common_model->courtInfo($offence_no);
           $data['mahakama']=$this->common_model->getMahakama($offence_no);
           $data['chaguaWatuhumiwa']=$this->common_model->getWatuhumiwa($offence_no);
           $data['mhusikainfo']   =$this->common_model->getMhusikainfo($offence_no);
           $data['discussions'] = $this->common_model->getDiscussions($offence_no,$this->session->userdata('force_no'),$this->session->userdata('force_no'));
           $data['title'] = 'CSMIS-CRO';
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

       
       
       public function addMhusika(){
           $data['offence_no']       = $this->input->post('offence');
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
           
            

           $add_mhusika = $this->common_model->insert($data,'wahusika');
           
             if($add_mhusika){
    
               $data['mhusikainfo']   = $this->common_model->getMhusikainfo($this->input->post('offence'));
               $data['oneoffence']  = $this->cro_model->getOneOffence($this->input->post('offence'));
               $this->load->view('common/display/view_mhusika',$data);
    
              }

       }
       
       
       
 public function addMtoaTaarifa(){
           $data['taarifa_id']       = $this->input->post('taarifa_no');
           //$data['wahusika_typeid']  = $this->input->post('uhusika_type');
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
           
            

           $add_mtoa_taarifa = $this->common_model->insert($data,'wahusika_taarifa');
           
             if($add_mtoa_taarifa){
    
//               $data['mhusikainfo']   = $this->common_model->getMhusikainfo($this->input->post('taarifa_no'));
//               $data['oneoffence']  = $this->cro_model->getOneOffence($this->input->post('taarifa_no'));
//               $this->load->view('common/display/view_mhusika',$data);
                 redirect('cro/viewOneOffence',$data['taarifa_id']);
              }

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
               $data['oneoffence']  = $this->cro_model->getOneOffence($this->input->post('offence'));
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


  
        public function assignIR($offence_id){
        $data['offence_statusid'] = 2;
        $data['ir_no'] = $this->input->post('ir');
        $assign_ir = $this->common_model->update($data,'offence','offence_no',$offence_id);
        if($assign_ir){
            redirect('cro/viewOneOffence/'.$offence_id);
        }
    }
    
      public function transfer_to_District($offence_id){
        $data['offence_statusid'] = 3;
        $send_district = $this->common_model->update($data,'offence','offence_no',$offence_id);
        if($send_district){
            redirect('rco/viewOneOffence/'.$offence_id);
        }
    }
    
    public function LoadCourt(){
        
       // echo 'chanya';die;
      $data['offenceid']= $this->input->post('data');
      $data['controller']= $this->input->post('controller');
      $this->load->view('common/display/wardCourt',$data);
      
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
         $this->load->view('common/display/closeCourt');   
        }
    }
    public function addEvidence(){
            $offence_no=$this->input->post('offence_no');
            $description=$this->input->post('ushahidi');
            $offence_status=$this->input->post('offence_status');
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|txt|xls|odt|docx|pptx|xlsx|sql|csv|mp3|mp4|mpg|rm|vob|wmv|3g2|3gp|m4v|asf|avi|asx|flv|ogg|oga|wav|wma|wv|vox|tta|sln|raw|ra|rm|ops|msv|mpc|mmf|m4p|m4a|mpa|m3u|iff|aif|3gp|aiff|awb|amr|dvf|gsm';
            $config['max_size']    = '102400000000';
            $config['encrypt_name'] = TRUE;
                
            $this->load->library('upload');
            $this->upload->initialize($config);
               if(!$this->upload->do_upload('chosenFile'))
                {
                  $info['link']='';
                  $info['offence_no']=$offence_no;
                  $info['description']=$description;
                  $info['offence_statusid']=$offence_status;
                  $info['force_no']=$this->session->userdata('force_no');
                  $insert_evidence=$this->common_model->insert($info,'offence_evidence'); 
                  if($insert_evidence){
                    $data['ushahidi']=$this->common_model->getUshahidi($offence_no);
                    $this->load->view('common/display/view_Ushahidi',$data);
                  }
                 
                }
                else
                {
                  $data=$this->upload->data();
                  $info['link']= $data['file_name'];
                  $info['offence_no']=$offence_no;
                  $info['description']=$description;
                  $info['offence_statusid']=$offence_status;
                  $info['force_no']=$this->session->userdata('force_no');
                  $this->common_model->insert($info,'offence_evidence');
                  $data['ushahidi']=$this->common_model->getUshahidi($offence_no);
                  $this->load->view('common/display/view_Ushahidi',$data);
                
                }   
              
    }
     public function deleteEvidence(){
        $ushahidiid= $this->input->post('ushahidiid'); 
        $offence_no= $this->input->post('offence_no');
        $send_district = $this->common_model->delete('offence_evidence','id',$ushahidiid);
        
        $data['ushahidi']=$this->common_model->getUshahidi($offence_no);
        $this->load->view('common/display/view_Ushahidi',$data);
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
     public function courtTaarifa(){
      // $this->output->enable_profiler(TRUE);
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
        $data['fidia']=$amount;   
       }
       $data['infodescription']=$this->input->post('ushahidi');
       $insert_court= $this->common_model->insert($data,'courtstatus_info'); 
        if($insert_court)
        {
         $data['taarifazamahakama']=$this->common_model->courtInfo($offence_no);
         $this->load->view('common/display/view_taafazamahakama', $data);
        }   
     }
     public function checkcourtclosing(){
           $offence_no= $this->input->post('offence_no');
           $dataclosingcourt=$this->common_model->CourtClosingInfo($offence_no);
           if($dataclosingcourt){
               
            $data['offence_no']=$offence_no;
             //$data['mhusikaclosinginfo']=$this->common_model->CourtClosingInfo($offence_no);
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
//      print_r($chaguaWatuhumiwa); die();
      if($chaguaWatuhumiwa != NULL)
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
    
    public function addStatement(){
            $offence_no=$this->input->post('offence_no');
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|txt|xls|odt|docx|pptx|xlsx|sql|csv|mp3|mp4|mpg|rm|vob|wmv|3g2|3gp|m4v|asf|avi|asx|flv|ogg|oga|wav|wma|wv|vox|tta|sln|raw|ra|rm|ops|msv|mpc|mmf|m4p|m4a|mpa|m3u|iff|aif|3gp|aiff|awb|amr|dvf|gsm';
            $config['max_size']    = '102400000000';
            $config['encrypt_name'] = TRUE;
                
            $this->load->library('upload');
            $this->upload->initialize($config);
               if(!$this->upload->do_upload('chosenFile'))
                {
                 echo "Uploading failed";
                }
                else
                {
                  $data=$this->upload->data();
                  $info['minute_file']= $data['file_name'];
                  $info['offence_no']=$offence_no;
                  $info['force_no']=$this->session->userdata('force_no');
                  $this->common_model->insert($info,'offence_statement');
                  $data['statement_return']=Cro_model::getStatementUpload($offence_no);
                  $this->load->view('common/display/uploadedStatement',$data);
                
                }   
              
    }
    
    
    public function viewFullOffence($query_id = 0, $sort_by = 'request_id', $sort_order = 'desc', $offset = 0){
           $this->output->enable_profiler(FALSE);
 
           $data['fulloffence'] = $this->common_model->getFullOffence(); 
           $data['title'] = 'CSMIS-CRO';
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
           $data['body_one_middle'] = 'common/display/viewfulloffence_rb';
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
        if(!isset($isLoggedIn) || $isLoggedIn != true || $isPosition != 'cro')
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