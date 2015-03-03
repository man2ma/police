<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Common_model extends CI_Model{
    
    public function insert($data,$tableName){
        $this->db->insert($tableName,$data);
        $query = $this->db->affected_rows();
        if($query == 1)
        {
            return true;
        }
        else{
            return false;
        } 
    }
    
    
     public function select($table, $column='', $condition='',$order_by=''){
        $this->db->SELECT('*');
        $this->db->FROM($table);
        if($condition != ''){
            $this->db->where($column, $condition);
        }
        if($order_by != ''){
            $this->db->order_by($order_by, 'DESC');
        }
        $query = $this->db->get();
        if($query->num_rows()>0){
        return $query;
        }
        else {
            return FALSE;
            }
    }
    
    
    
    public function update($data,$table,$column_label,$column_value){
       $this->db->where($column_label,$column_value);
       $this->db->update($table,$data);
       $num = $this->db->affected_rows();
        if($num == 1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
     }
     
    
    public function delete($table,$column_label,$condition){
       $this->db->WHERE($column_label,$condition);
       $this->db->DELETE($table);
       $query = $this->db->affected_rows();
       if($query == 1){
           return TRUE;
       }else{
           return FALSE;
       }
    }


     public function getPoliceDistricts($region_id){
        $this->db->SELECT('district_police.*,region_police.*');
        $this->db->FROM('district_police');
        $this->db->where('district_police.region_policeid', $region_id);
        $this->db->join('region_police','region_police.region_policeid=district_police.region_policeid');
        $query = $this->db->get();
        if($query->num_rows()>0){
        return $query;
        }
        else {
            return FALSE;
            }
       }
       
       
       
      public function getPoliceWard($district_id){
        $this->db->SELECT('ward_police.*,district_police.*');
        $this->db->FROM('ward_police');
        $this->db->where('ward_police.district_policeid', $district_id);
        $this->db->join('district_police','district_police.district_policeid=ward_police.district_policeid');
        $query = $this->db->get();
        if($query->num_rows()>0){
        return $query;
        }
        else {
            return FALSE;
            }
       }
      
      
    
       
public function getPoliceStations($limit,$offset,$sort_by,$sort_order){
       $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
       $sort_colums = array('station_id','region_policename','district_policename','ward_policename','station_name');
       $sort_by = (in_array($sort_by, $sort_colums)) ? $sort_by : 'station_id';
        
       $this->db->SELECT('station.*,ward_police.*,district_police.*,region_police.*');
       $this->db->FROM('station');
       $this->db->limit($limit, $offset);
       $this->db->join('district_police','station.district_policeid = district_police.district_policeid');
       $this->db->join('region_police', 'station.region_policeid = region_police.region_policeid');
       $this->db->join('ward_police','station.ward_policeid = ward_police.ward_policeid');

       $this->db->order_by($sort_by,$sort_order);
       $ret['rows'] = $this->db->get()->result();
       
       //count query  
       $this->db->select('COUNT(*) as count', FALSE);
       $this->db->from('station');

       $tmp = $this->db->get()->result();    
       $ret['num_rows'] = $tmp[0]->count;
 
       return $ret;    
   }
   
   
      public function getComboPolisiRegions($region_nbs=''){
        $this->db->SELECT('*');
        $this->db->FROM('region_police');
        if($region_nbs != ''){
            $this->db->where('region_nbsid',$region_nbs);
        }
        $query = $this->db->get();
        $data[''] = '--Chagua Mkoa--';
        foreach ($query->result_array() as $row){
           $data[$row['region_policeid']] = $row['region_policename'];
       }
       return $data; 
    }

   
      public function getComboNbsRegions(){
        $this->db->SELECT('*');
        $this->db->FROM('region_nbs');
        $query = $this->db->get();
        foreach ($query->result_array() as $row){
           $data[$row['region_nbsid']] = $row['region_nbsname'];
       }
       return $data; 
    }
    

    
      public function getComboPolisiDistricts($region_police=''){
        $this->db->SELECT('*');
        $this->db->FROM('district_police');
        if($region_police != ''){
            $this->db->where('region_policeid',$region_police);
        }
        $query = $this->db->get();
        $data[''] = '--Chagua Wilaya--';
        foreach ($query->result_array() as $row){
           $data[$row['district_policeid']] = $row['district_policename'];
       }
       return $data; 
    }
    
     
     public function getComboNbsDistricts(){
        $this->db->SELECT('*');
        $this->db->FROM('district_nbs');
        $query = $this->db->get();
        foreach ($query->result_array() as $row){
           $data[$row['district_nbsid']] = $row['district_nbsname'];
       }
       return $data; 
    }
 
     public function getComboNbsWards(){
        $this->db->SELECT('*');
        $this->db->FROM('ward_nbs');
        $query = $this->db->get();
        $data[''] = '--Chagua Kata--';
        foreach ($query->result_array() as $row){
           $data[$row['ward_nbsid']] = $row['ward_nbsname'];
        }
        return $data;
     }

    public function getComboPolisiStation($ward_policeid){
        $this->db->SELECT('*');
        $this->db->FROM('station');
        $this->db->WHERE('ward_policeid',$ward_policeid);
        $query = $this->db->get();
       $data[''] = '--Chagua Kituo--';
        foreach ($query->result_array() as $row){
           $data[$row['station_id']] = $row['station_name'];
       }
       return $data; 
    }
    
    
    public function getComboNewuserPosition(){
      $this->db->SELECT('*');
        $this->db->FROM('user_types');
        $query = $this->db->get();
        $data[''] = '--Chagua Cheo--';
        foreach ($query->result_array() as $row){
         $data[$row['user_typeid']] = $row['user_typename'];
       }
       return $data;    
    }   
    public function getComboPolisiWards(){
        $this->db->SELECT('*');
        $this->db->FROM('ward_police');
        $query = $this->db->get();
        $data[''] = '--Chagua Ward--';
        foreach ($query->result_array() as $row){
           $data[$row['ward_policeid']] = $row['ward_policename'];
       }
       return $data; 
    }
    
    
        public function getComboPolisiWardsByID($district_id){
        $this->db->SELECT('*');
        $this->db->FROM('ward_police');
        //$this->db->where('district_policeid',$district_id);
        $query = $this->db->get();
        $data[''] = '--Chagua Ward--';
        foreach ($query->result_array() as $row){
           $data[$row['ward_policeid']] = $row['ward_policename'];
       }
       return $data; 
    }

    

    public function getComboStationType(){
        $this->db->SELECT('*');
        $this->db->FROM('station_type');
        $query = $this->db->get();
        $data[''] = '--Chagua Aina ya kituo--';
        foreach ($query->result_array() as $row){
           $data[$row['station_typeid']] = $row['station_typename'];
       }
       return $data; 
    }
    
     public function getComboStationClass(){
        $this->db->SELECT('*');
        $this->db->FROM('station_class');
        $query = $this->db->get();
        $data[''] = '--Chagua Daraja la kituo--';
        foreach ($query->result_array() as $row){
           $data[$row['station_classid']] = $row['station_classname'];
       }
       return $data; 
    }
    
   public function getCrimesubCategory($type){
        $this->db->SELECT('*');
        $this->db->FROM('crime_subcategory');
        $this->db->WHERE_IN('crimesubcat_typeid',$type);
        $this->db->order_by('crimesubcat_typeid','DESC');
        $query = $this->db->get();
        $data[''] = '--Chagua--';
        foreach ($query->result_array() as $row){
           $data[$row['crimesubcat_name']] = $row['crimesubcat_name'];
       }
       return $data; 
    }
    
    
   
    
    
     public function getCountry(){
        $this->db->SELECT('*');
        $this->db->FROM('country');
        $query = $this->db->get();
        $data[''] = '--Chagua Nchi--';
        foreach ($query->result_array() as $row){
           $data[$row['short_name']] = $row['short_name'];
       }
       return $data; 
    }
    
     public function getOffenceStatus(){
        $this->db->SELECT('*');
        $this->db->FROM('offence_status');
        $query = $this->db->get();
        $data[''] = '--Hatua ilipo--';
        foreach ($query->result_array() as $row){
           $data[$row['offence_statusid']] = $row['offence_statusname'];
       }
       return $data; 
    }
    
    
    public function getCrimeType(){
        $this->db->SELECT('*');
        $this->db->FROM('crime_type');
        $query = $this->db->get();
        $data[''] = '-- Kundi la kosa --';
        foreach ($query->result_array() as $row){
           $data[$row['crimetype_id']] = $row['crimetype_name'];
         }
       return $data; 
   }
      public function getreportCrimeType(){
        $this->db->SELECT('*');
        $this->db->FROM('crime_type');
        $query = $this->db->get();
       if($query->num_rows()>0){
           return $query;
       }else{
           
       return FALSE;
       
       }
      
   }
   
   
     public function getCrimeCategory(){
        $this->db->SELECT('*');
        $this->db->FROM('crime_category');
        $query = $this->db->get();
        $data[''] = '--Kosa lenyewe--';
        foreach ($query->result_array() as $row){
           $data[$row['crimecat_id']] = $row['crimecat_name'];
         }
       return $data; 
   }
   
   
    public function getCrimeCategoryById($type){
        $this->db->SELECT('*');
        $this->db->FROM('crime_category');
        $this->db->where('crimetype_id',$type);
        $query = $this->db->get();
        $data[''] = '--Makosa yote--';
        foreach ($query->result_array() as $row){
           $data[$row['crimecat_id']] = $row['crimecat_name'];
         }
       return $data; 
   }
    
    public function getreportCrimeCategory($crimetype_id){
        $this->db->SELECT('*');
        $this->db->FROM('crime_category');
        $this->db->WHERE('crimetype_id',$crimetype_id);
        $query = $this->db->get();
       if($query->num_rows()>0){
           return $query;
       }else{
           
       return FALSE;
       
       }
   }
   
    public function getSex($value=''){
        $this->db->SELECT('*');
        $this->db->FROM('sex');
        $query = $this->db->get();
        if($value == ''){
         $data[''] = '--Chagua Jinsi--';
         foreach ($query->result_array() as $row){
           $data[$row['sex_id']] = $row['sex_name'];
           }
          return $data; 
        }else{
            return $query;
        }
   }

   
   
   public function getNationality($value=''){
        $this->db->SELECT('*');
        $this->db->FROM('nationality');
        $query = $this->db->get();
        if($value == ''){
        $data[''] = '--Chagua Utaifa--';
        foreach ($query->result_array() as $row){
           $data[$row['nationality_id']] = $row['nationality_name'];
         }
       return $data; 
        }else{
            return $query;
        }
   }
 
   
   public function getTribe($value =''){
        $this->db->SELECT('*');
        $this->db->FROM('tribes');
        $query = $this->db->get();
        if($value ==''){
            $data[''] = '--Chagua Kabila--';
            foreach ($query->result_array() as $row){
               $data[$row['tribe_id']] = $row['tribe_name'];
             }
             return $data; 
        }else{
            return $query;
        }
   }
   
   
   
   public function getReligion($value=''){
        $this->db->SELECT('*');
        $this->db->FROM('religion');
        $query = $this->db->get();
        if($value == ''){
        $data[''] = '--Chagua Dini--';
        foreach ($query->result_array() as $row){
           $data[$row['religion_id']] = $row['religion_name'];
         }
         return $data; 
        }else{
            return $query;
        }
   }
   
   
   public function getMaritalStatus($value =''){
        $this->db->SELECT('*');
        $this->db->FROM('marital_status');
        $query = $this->db->get();
        if($value == ''){
          $data[''] = '--Hali ya Ndoa--';
        foreach ($query->result_array() as $row){
           $data[$row['marital_statusid']] = $row['marital_statusname'];
         }
       return $data; 
        }else{
            return $query;
        }
   }
   
   public function getEducation($value =''){
        $this->db->SELECT('*');
        $this->db->FROM('education');
        $query = $this->db->get();
        if($value == ''){
        $data[''] = '--Kiwango cha Elimu--';
        foreach ($query->result_array() as $row){
           $data[$row['education_id']] = $row['education_level'];
         }
         return $data; 
        }else{
            return $query;
        }
   }
   

   
 
   
    public function getOccupation($value=''){
        $this->db->SELECT('*');
        $this->db->FROM('occupation');
        $query = $this->db->get();
        if($value == ''){
        $data[''] = '--Kazi Afanyayo--';
        foreach ($query->result_array() as $row){
           $data[$row['occupation_id']] = $row['occupation_name'];
         }
         return $data; 
        }else{
            return $query;
        }
   }
   
   
   public function getIDType($value =''){
        $this->db->SELECT('*');
        $this->db->FROM('type_id');
        $query = $this->db->get();
        if($value ==''){
        $data[''] = '--Chagua Kitambulisho--';
        foreach ($query->result_array() as $row){
           $data[$row['type_id']] = $row['type_name'];
         }
         return $data; 
        }else{
            return $query;
        }
   }
   
   public function getWahusika($value=''){
        $this->db->SELECT('*');
        $this->db->FROM('wahusika_type');
        $query = $this->db->get();
        if($value ==''){
        $data[''] = '--Aina ya Uhusika--';
        foreach ($query->result_array() as $row){
           $data[$row['wahusika_typeid']] = $row['wahusika_typename'];
         }
         return $data; 
        }else{
            return $query;
        }
   }   
    public function getVehicle($value=''){
        $this->db->SELECT('*');
        $this->db->FROM('vehicle_type');
        $query = $this->db->get();
        if($value ==''){
        $data[''] = '--Chombo cha Moto--';
        foreach ($query->result_array() as $row){
           $data[$row['vehicle_typeId']] = $row['vehicle_name'];
         }
         return $data; 
        }else{
            return $query;
        }
   } 
   public function getVehiclesubcategory($vehicle_categoryid){
        $this->db->SELECT('*');
        $this->db->FROM('vehicle_subcategory');
        $this->db->WHERE('vehiclesub_typeid',$vehicle_categoryid);
        $query = $this->db->get();
        if($query->num_rows()>0){
        foreach ($query->result_array() as $row){
           $data[$row['vehicle_subcategId']] = $row['vehicle_subcategname'];
         }
         return $data; 
        }
        else{
            return FALSE;
        }
      

   }    
   
   
   
   
   public function getMtoaTaarifaInfo($taarifa_id){
       $this->db->SELECT('*');
       $this->db->FROM('wahusika_taarifa');
       $this->db->WHERE('wahusika_taarifa.taarifa_id',$taarifa_id);
       //$this->db->JOIN('offence','offence.offence_no = wahusika.offence_no');
       $this->db->JOIN('religion','wahusika_taarifa.religion_id = religion.religion_id');
       $this->db->JOIN('education','wahusika_taarifa.education_id = education.education_id');
       $this->db->JOIN('nationality','wahusika_taarifa.nationality_id = nationality.nationality_id');
       $this->db->JOIN('type_id','wahusika_taarifa.id_type = type_id.type_id');
       $this->db->JOIN('occupation','wahusika_taarifa.occupation_id = occupation.occupation_id');
       $this->db->JOIN('sex','wahusika_taarifa.sex = sex.sex_id');
       $this->db->JOIN('marital_status','wahusika_taarifa.maritalstatus_id = marital_status.marital_statusid');
       $this->db->JOIN('tribes','wahusika_taarifa.tribe_id = tribes.tribe_id');
       $complainantinfo = $this->db->get();
       
       if($complainantinfo->num_rows()>0){
           return $complainantinfo;
       }else{
       return FALSE;
       }
}




public function getMhusikainfo($offence_no){
       $this->db->SELECT('*');
       $this->db->FROM('wahusika');
       $this->db->WHERE('wahusika.offence_no',$offence_no);
       $this->db->JOIN('offence','offence.offence_no = wahusika.offence_no');
       $this->db->JOIN('religion','wahusika.religion_id = religion.religion_id');
       $this->db->JOIN('education','wahusika.education_id = education.education_id');
       $this->db->JOIN('wahusika_type','wahusika.wahusika_typeid = wahusika_type.wahusika_typeid');
       $this->db->JOIN('occupation','wahusika.occupation_id = occupation.occupation_id');
       $this->db->JOIN('sex','wahusika.sex = sex.sex_id');
       $this->db->JOIN('marital_status','wahusika.maritalstatus_id = marital_status.marital_statusid');
       $this->db->JOIN('tribes','wahusika.tribe_id = tribes.tribe_id');
       $complainantinfo = $this->db->get();
       
       if($complainantinfo->num_rows()>0){
           return $complainantinfo;
       }else{
       return FALSE;
       }
}
       
       
       
       
     public function getSpecificMhusikainfo($wahusika_id){
       $this->db->SELECT('*');
       $this->db->FROM('wahusika');
       $this->db->WHERE('wahusika.wahusika_id',$wahusika_id);
       $this->db->JOIN('offence','offence.offence_no = wahusika.offence_no');
       $this->db->JOIN('religion','wahusika.religion_id = religion.religion_id');
       $this->db->JOIN('education','wahusika.education_id = education.education_id');
       $this->db->JOIN('nationality','wahusika.nationality_id = nationality.nationality_id');
       $this->db->JOIN('type_id','wahusika.id_type = type_id.type_id');
       $this->db->JOIN('wahusika_type','wahusika.wahusika_typeid = wahusika_type.wahusika_typeid');
       $this->db->JOIN('occupation','wahusika.occupation_id = occupation.occupation_id');
       $this->db->JOIN('sex','wahusika.sex = sex.sex_id');
       $this->db->JOIN('marital_status','wahusika.maritalstatus_id = marital_status.marital_statusid');
       $this->db->JOIN('tribes','wahusika.tribe_id = tribes.tribe_id');
       $complainantinfo = $this->db->get();
       
       if($complainantinfo->num_rows()>0){
           return $complainantinfo;
       }else{
       return FALSE;
       }      
   }
    public function getSelectInvestigators(){
        $station=$this->session->userdata('station_id');
        $district=$this->session->userdata('district_policeid');
        $region=$this->session->userdata('region_policeid');
        $userid=$this->session->userdata('force_no');
        $this->db->select('*');
        $this->db->FROM('users');
        $this->db->join('station','users.station_id=station.station_id');
        $this->db->join('district_police', 'station.district_policeid = district_police.district_policeid');
        $this->db->join('region_police', 'station.region_policeid = region_police.region_policeid');
        $this->db->join('ward_police', 'station.ward_policeid = ward_police.ward_policeid');
        $this->db->WHERE_NOT_IN('force_no',$userid);
        if($this->session->userdata('controller')=='ocs'){
              $this->db->WHERE('users.station_id',$station);
        }
        elseif($this->session->userdata('controller')=='ocd'||$this->session->userdata('controller')=='occid'){
            $this->db->WHERE('district_police.district_policeid',$district);
        }
        elseif($this->session->userdata('controller')=='rpc'){
            $this->db->WHERE('region_police.region_policeid',$region);
        }
         elseif($this->session->userdata('controller')=='rco'){
            $this->db->WHERE('region_police.region_policeid',$region);
        }
        $query = $this->db->get();
        $data[''] = '-- Chagua Mpelelezi --';
        foreach ($query->result_array() as $row){
        $data[$row['force_no']] = $row['fname'].' '.$row['lname'];
       }
       return $data;    
    }
    
     public function getassignedMplelezi($offence_no){
       $station=$this->session->userdata('station_id');
       $district=$this->session->userdata('district_policeid');
       $region=$this->session->userdata('region_policeid');
       $force_no=$this->session->userdata('force_no');  
       $this->db->SELECT('*');
       $this->db->FROM('investigatorinfo');
       $this->db->WHERE('offence_no', $offence_no);
        if($this->session->userdata('controller')=='cro'){
            $this->db->WHERE('force_no',$force_no);    
        }
       $query = $this->db->get();
        if($query->num_rows()>0){
        return $query;
        }
        else {
              return FALSE;
             }
      }
      

      public function getUshahidi($offence_no){
       $userid=$this->session->userdata('force_no');
       $this->db->SELECT('*');
       $this->db->FROM('offence_evidence');
       $this->db->WHERE('offence_no',$offence_no);
       if($this->session->userdata('controller')=='cro')
       {
          $this->db->WHERE('force_no', $userid);   
       }
       $query = $this->db->get();
        if($query->num_rows()>0){
        return $query;
        }
        else {
              return FALSE;
             }
      }
       public function getWapelelezi($offence_no){
       $station=$this->session->userdata('station_id');
       $district=$this->session->userdata('district_policeid');
       $region=$this->session->userdata('region_policeid');
       $force_no=$this->session->userdata('force_no');
     
       $this->db->SELECT('offence.*,investigatorinfo.*,users.*');
       $this->db->FROM('offence');
       $this->db->JOIN('investigatorinfo','investigatorinfo.offence_no=offence.offence_no');
       $this->db->JOIN('users','users.force_no=investigatorinfo.force_no');
       $this->db->WHERE('offence.offence_no', $offence_no);
       if($this->session->userdata('controller')=='ocs'){
             $this->db->WHERE('users.station_id',$station);
             $this->db->WHERE('investigatorinfo.allocator_no',$force_no);
        }
        
        elseif($this->session->userdata('controller')=='ocd'||$this->session->userdata('controller')=='occid'){
            $this->db->WHERE('offence.district_policeid',$district);
        }
        elseif($this->session->userdata('controller')=='rpc'){
            $this->db->WHERE('offence.region_policeid',$region);
        }
         elseif($this->session->userdata('controller')=='rco'){
            $this->db->WHERE('offence.region_policeid',$region);
        }
         elseif($this->session->userdata('controller')=='hq'){
            //$this->db->WHERE('offence.region_policeid',$region);
        }
             elseif($this->session->userdata('controller')=='csuhqx'){
            //$this->db->WHERE('offence.region_policeid',$region);
        }
        elseif($this->session->userdata('controller')=='csuhqy'){
            //$this->db->WHERE('offence.region_policeid',$region);
        }
        elseif($this->session->userdata('controller')=='csuhqz'){
            //$this->db->WHERE('offence.region_policeid',$region);
        }
        elseif($this->session->userdata('controller')=='dpp'){
            //$this->db->WHERE('offence.region_policeid',$region);
        }
       $query = $this->db->get();
        if($query->num_rows()>0){
        return $query;
        }
        else {
              return FALSE;
             }
      }
      
     public function courtInfo($offence_no){
       $station=$this->session->userdata('station_id');
       $district=$this->session->userdata('district_policeid');
       $region=$this->session->userdata('region_policeid');
       $force_no=$this->session->userdata('force_no');
       $this->db->SELECT('*');
       $this->db->FROM('courtstatus_info');
       $this->db->JOIN('offence','offence.offence_no=courtstatus_info.offence_no');
       $this->db->JOIN('taarifazakimahakama','taarifazakimahakama.id=courtstatus_info.taarifa_id');
       $this->db->JOIN('hatuazakimahakama','hatuazakimahakama.id=courtstatus_info.court_hatuaid','LEFT');
       $this->db->JOIN('athabu','athabu.id=courtstatus_info.athabu_id','LEFT');
       $this->db->JOIN('courtinfo','courtinfo.courtlevel_id=courtstatus_info.court_levelid');
       $this->db->JOIN('wahusika','wahusika.wahusika_id=courtstatus_info.wahusika_id');
       $this->db->WHERE('courtinfo.offence_no', $offence_no);
       if($this->session->userdata('controller')=='cro'){
          $this->db->WHERE('offence.station_id', $station); 
          $this->db->WHERE('courtstatus_info.courtforce_no',$force_no);
        }
        
        
       $query = $this->db->get();
        if($query->num_rows()>0){
        return $query;
        }
        else {
              return FALSE;
             }
      }
  
      public function getWatuhumiwa($offence_no){
        $this->db->SELECT('*');
        $this->db->FROM('wahusika');
        $this->db->WHERE('offence_no', $offence_no);
        $this->db->WHERE('wahusika_typeid',2);
        $query = $this->db->get();
        $data[''] = '-- Chagua Watuhumiwa --';
        foreach ($query->result_array() as $row){
        $data[$row['wahusika_id']] = $row['fname'].' '.$row['lname'].' '.'( aka '.$row['nickname'].')';
       }
       return $data; 
        
        
   }
    public function getWatuhumiwaClosing($offence_no){
        $this->db->SELECT('*');
        $this->db->FROM('wahusika');
        $this->db->WHERE('offence_no', $offence_no);
        $this->db->WHERE('wahusika_typeid',2);
       $query = $this->db->get();
        if($query->num_rows()>0){
        return $query;
        }
        else {
              return FALSE;
             }
      }   

     public function getMahakama($offence_no){
        //$offence_status=$this->session->userdata('offence_statusid');
        $this->db->SELECT('*');
        $this->db->FROM('courtinfo');
        $this->db->WHERE('offence_no', $offence_no);
        //$this->db->WHERE('courtlevel_id',$offence_status);
        $query = $this->db->get();
        $data[''] = '-- Chagua Mahakama --';
        foreach ($query->result_array() as $row){
        $data[$row['courtlevel_id']] = $row['courtname'];
       }
       return $data; 
        
        
   }
   public function CourtClosingInfo($offence_no){
        $this->db->SELECT('*');
        $this->db->FROM('courtstatus_info');
        $this->db->WHERE('offence_no', $offence_no);
        $this->db->ORDER_BY('courtinfo_id', 'desc');
        $this->db->LIMIT(1);
        $query = $this->db->get();
        if($query->num_rows()>0){
        return $query;
        }
        else {
              return FALSE;
             }
       
   }
  public function CourtwahusikaClosing($offence_no){
        $this->db->SELECT('*');
        $this->db->FROM('courtstatus_info');
        $this->db->JOIN('wahusika','wahusika.wahusika_id=courtstatus_info.wahusika_id');
        $this->db->JOIN('hatuazakimahakama','hatuazakimahakama.id=courtstatus_info.taarifa_id');
        $this->db->JOIN('athabu','athabu.athabu_id=courtstatus_info.athabu_id');
        $this->db->WHERE('courtstatus_info.offence_no', $offence_no);
        $this->db->GROUP_BY('courtstatus_info.athabu_id','desc');
        $query = $this->db->get();
        if($query->num_rows()>0){
        return $query;
        }
        else {
              return FALSE;
             }
       
   }  
  
   
      public function getPoliceRegion(){
        $this->db->SELECT('*');
        $this->db->FROM('region_police');
        $this->db->ORDER_BY('region_policename');
        $query=$this->db->get();
        if($query->num_rows()>0){
           return $query;
       }else{
           
       return FALSE;
       
       }
      }
   
    public function getPoliceDistrict(){
        $this->db->SELECT('*');
        $this->db->FROM('region_police');
        $this->db->ORDER_BY('region_policename');
        $query=$this->db->get();
        if($query->num_rows()>0){
           return $query;
       }else{
           
       return FALSE;
       
       }
      }
      
      
   public function getReportpolicestations(){
        $district_policeid=$this->session->userdata('district_policeid');
        $this->db->SELECT('*');
        $this->db->FROM('station');
        $this->db->WHERE('district_policeid',$district_policeid);
        $this->db->ORDER_BY('station_name');
        $query=$this->db->get();
        if($query->num_rows()>0){
           return $query;
       }else{
           
       return FALSE;
       
       }
      }
      
     public function getReportpolicedistrict(){
        $region_policeid=$this->session->userdata('region_policeid');
 
        $this->db->SELECT('*');
        $this->db->FROM('district_police');
        $this->db->WHERE('region_policeid',$region_policeid);
        $this->db->ORDER_BY('district_policename');
        $query=$this->db->get();
        if($query->num_rows()>0){
           return $query;
       }else{
           
       return FALSE;
       
       }
      }

   
   
   public function reportMchanganuo($fromdate,$todate){
      $query = $this->db->query("SELECT * FROM mchanganuo_view WHERE fulldate BETWEEN '".$fromdate."' AND '".$todate."'");
       
      if($query->num_rows()>0){
          return $query;
      }  else {
          return FALSE;
      }
   }
   
   public function getreportMchanganyikoData($crimetype_id,$cat_id,$fromdate,$todate){
      $this->db->SELECT('*');
      $this->db->FROM('mchanganuo_view');
      $this->db->WHERE('crimetype_id',$crimetype_id);
      $this->db->WHERE('crimecat_id',$cat_id);
      $this->db->WHERE('fulldate >=',$fromdate);
      $this->db->WHERE('fulldate <=',$todate);
      $query = $this->db->get();
      if($query->num_rows()>0){
          return $query;
      }  else {
          return FALSE;
      }
   }
   
   
    public function reportCrimeCategory($crimetype_id,$cat_id,$fromdate,$todate){
      $this->db->SELECT('*');
      $this->db->FROM('mchanganuo_view');
      $this->db->WHERE('crimetype_id',$crimetype_id);
      //if($cat_id !=''){
          $this->db->WHERE_IN('crimecat_id',$cat_id);
      //}
      $this->db->WHERE('fulldate >=',$fromdate);
      $this->db->WHERE('fulldate <=',$todate);
      $query = $this->db->get();
      if($query->num_rows()>0){
          return $query;
      }  else {
          return FALSE;
      }
   }
   
   
  
  public function getreportMajaorcrimeData($crimetype_id,$levelid,$fromdate,$todate,$tukiostatus){
      
      $this->db->SELECT('*');
      $this->db->FROM('mchanganuo_view');
      $this->db->WHERE('crimetype_id',$crimetype_id);
      $this->db->WHERE('tukiostatus',$tukiostatus);
      if($this->session->userdata('controller')=='ocs'){
        $this->db->WHERE('station_id',$levelid);
      }
      if($this->session->userdata('controller')=='ocd'||$this->session->userdata('controller')=='occid'){
         $this->db->WHERE('station_id',$levelid);
      }
      if($this->session->userdata('controller')=='hq'||$this->session->userdata('controller')=='igp'||$this->session->userdata('controller')=='dci'){
        $this->db->WHERE('region_policeid',$levelid);
      }
      
      $this->db->WHERE('fulldate >=',$fromdate);
      $this->db->WHERE('fulldate <=',$todate);
      $query = $this->db->get();
      if($query->num_rows()>0){
          return $query;
      }  else {
          return FALSE;
      }   
  
   }  
   
   
   
   
   public function getFullOffence() {
       $this->db->SELECT('*');
       $this->db->FROM('offence');
       $this->db->where('offence.station_id', $this->session->userdata('station_id'));
       $this->db->JOIN('crime_type','crime_type.crimetype_id=offence.crimetype_id');
       $this->db->JOIN('crime_category','crime_category.crimecat_id=offence.crimecat_id');
       $this->db->JOIN('offence_status','offence.offence_statusid=offence_status.offence_statusid');
       $this->db->JOIN('region_police','region_police.region_policeid=offence.region_policeid');
       $this->db->JOIN('district_police','district_police.district_policeid=offence.district_policeid');
       $this->db->JOIN('ward_police','ward_police.ward_policeid=offence.ward_policeid');
       
       $this->db->JOIN('wahusika','offence.offence_no = wahusika.offence_no');
       $this->db->JOIN('religion','wahusika.religion_id = religion.religion_id');
       $this->db->JOIN('education','wahusika.education_id = education.education_id');
       $this->db->JOIN('wahusika_type','wahusika.wahusika_typeid = wahusika_type.wahusika_typeid');
       $this->db->JOIN('occupation','wahusika.occupation_id = occupation.occupation_id');
       $this->db->JOIN('sex','wahusika.sex = sex.sex_id');
       $this->db->JOIN('marital_status','wahusika.maritalstatus_id = marital_status.marital_statusid');
       $this->db->JOIN('tribes','wahusika.tribe_id = tribes.tribe_id');
       $this->db->JOIN('nationality','nationality.nationality_id = wahusika.nationality_id');
       $this->db->JOIN('offence_statement','offence_statement.offence_no = offence.offence_no', 'LEFT');
       
       $this->db->order_by('offence.offence_no DESC');
          $query = $this->db->get();
          if($query->num_rows()>0){
              return $query;
          }  else {
              return FALSE;
          }   
   }
   
   
     public function getComboUsersForDisc(){
        $user_typeid = $this->session->userdata('usertype_id');
        $station = $this->session->userdata('station_id');
        
        $this->db->SELECT('*');
        $this->db->FROM('users');
        $this->db->join('user_types','user_types.user_typeid=users.user_typeid');
        if($user_typeid == '1'){
            $this->db->where_in('users.user_typeid',array(1,2));
            $this->db->where('station_id',$station);
            
        }
        if($user_typeid == '2'){
            $this->db->where_in('users.user_typeid',array(1,2,3,4,5,6,7,12,14));
            
        }
        if($user_typeid == '3' || $user_typeid == '4'){
            $this->db->where_in('users.user_typeid',array(2,3,4,5,6,7,12,14));
            
        }
        if($user_typeid == '5' || $user_typeid == '6'){
            $this->db->where_in('users.user_typeid',array(7,12,13,14));
            
        }  
        if($user_typeid == '7'){
            $this->db->where_in('users.user_typeid',array(2,3,4,5,6,7,12,13,14));
            
        } 
        $this->db->where_not_in('force_no',$this->session->userdata('force_no'));
        $this->db->where_not_in('users.user_typeid',8);
        $query = $this->db->get();
        $data[''] = '--Tuma kwa--';
        foreach ($query->result_array() as $row){
           $data[$row['force_no']] = $row['fname'].' '.$row['lname'].' - '.$row['user_typename'];
       }
       return $data; 
    }  
   
    
    
    public function getDiscussions($offence_no,$sender_id,$receiver_id) {
        $this->db->select('discussions.*,users.fname AS senderfname,users.lname AS senderlname,u.fname AS receiverfname, u.lname AS receiverlname');
        $this->db->from('discussions');
        $this->db->join('users','users.force_no=discussions.sender_id');
        $this->db->join('users AS u','u.force_no=discussions.receiver_id');
        $this->db->where('sender_id',$sender_id);
        $this->db->or_where('receiver_id',$receiver_id);
        $this->db->where('offence_no',$offence_no);
        
        $query = $this->db->get();
          if($query->num_rows()>0){
              return $query;
          }  else {
              return FALSE;
          } 
    }
 
}
       
?>
