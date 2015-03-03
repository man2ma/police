<?php

class Cro_model extends CI_Model{

   public function getCrimeType($condition=''){
        $this->db->SELECT('*');
        $this->db->FROM('crime_type');
        if($condition !=''){
            $this->db->where('crimetype_id',$condition);
        }
        $query = $this->db->get();
        $data[''] = '-- Chagua Aina ya kosa --';
        foreach ($query->result_array() as $row){
           $data[$row['crimetype_id']] = $row['crimetype_name'];
         }
       return $data; 
   }
   
   
   
    public function getCrimeCategory($condition=''){
        $this->db->SELECT('*');
        $this->db->FROM('crime_category');
        if($condition !=''){
            $this->db->where('crimetype_id',$condition);
        }
        $query = $this->db->get();
        $data[''] = '-- Chagua Kipengele cha kosa --';
        foreach ($query->result_array() as $row){
           $data[$row['crimecat_id']] = $row['crimecat_name'];
         }
       return $data; 
   }
   
   
   public function getOffenceSearch($search){
		$this->db->select('rb_no, ir_no');
		$whereCondition = array('rb_no' =>$search);
		$this->db->where($whereCondition);
		$this->db->from('offence');
		$query = $this->db->get();
		return $query->result();
      }
      
      
public function getTaarifa($query_array,$limit,$offset,$sort_by,$sort_order){
       $user_id          = $this->session->userdata('user_id');
       $police_station   = $this->session->userdata('station_id');
 
       
       $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
       $sort_colums = array('taarifa_id','rb_no','date_added','date_occured','region_policename','district_policename','ward_policename');
       $sort_by = (in_array($sort_by, $sort_colums)) ? $sort_by : 'taarifa_id';
        
       $this->db->SELECT('taarifa.*,station.*,ward_police.*,district_police.*,region_police.*');
       $this->db->FROM('taarifa');
       $this->db->where('taarifa.station_id',$police_station);
       $this->db->where('taarifa.is_taarifa',1);
       $this->db->limit($limit, $offset);
       $this->db->JOIN('station','station.station_id=taarifa.station_id');
       $this->db->JOIN('region_police','region_police.region_policeid=station.region_policeid');
       $this->db->JOIN('district_police','district_police.district_policeid=station.district_policeid');
       $this->db->JOIN('ward_police','ward_police.ward_policeid=station.ward_policeid');
       $this->db->order_by($sort_by,$sort_order);
       $ret['rows'] = $this->db->get()->result();
       
       //count query  
       $this->db->select('COUNT(*) as count', FALSE);
       $this->db->from('taarifa');
       $this->db->where('taarifa.station_id',$police_station);
       $this->db->where('taarifa.is_taarifa',1);
       $tmp = $this->db->get()->result();    
       $ret['num_rows'] = $tmp[0]->count;
       
       return $ret;   
   }
   
   
   
   
   

      public function getOffence($query_array,$limit,$offset,$sort_by,$sort_order){
       $user_id          = $this->session->userdata('user_id');
       $police_station   = $this->session->userdata('station_id');
 
       
       $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
       $sort_colums = array('offence_no','rb_no','ir_no','offence_statusid','tukiostatus','date_reported','date_occurance','offence_location','crimetype_name','crimecat_name','region_policename','district_policename','ward_policename');
       $sort_by = (in_array($sort_by, $sort_colums)) ? $sort_by : 'offence_no';
        
       $this->db->SELECT('*');
       $this->db->FROM('offence');

       if(strlen($query_array['crimetype_id'])){
           $this->db->where('offence.crimetype_id', $query_array['crimetype_id']);    
       }
       if(strlen($query_array['crimecat_id'])){
           $this->db->where('offence.crimecat_id', $query_array['crimecat_id']);    
       }
       if(strlen($query_array['offence_statusid'])){
           $this->db->where('offence.offence_statusid', $query_array['offence_statusid']);    
       }  
       if(strlen($query_array['region_policeid'])){
           $this->db->where('offence.region_policeid', $query_array['region_policeid']);    
       } 
       if(strlen($query_array['district_policeid'])){
           $this->db->where('offence.district_policeid', $query_array['district_policeid']);    
       }      
       if(strlen($query_array['ward_policeid'])){
           $this->db->where('offence.ward_policeid', $query_array['ward_policeid']);    
       }
       $this->db->where('offence.station_id',$police_station);
       
       
       $this->db->limit($limit, $offset);
       $this->db->JOIN('crime_type','crime_type.crimetype_id=offence.crimetype_id');
       $this->db->JOIN('crime_category','crime_category.crimecat_id=offence.crimecat_id');
       $this->db->JOIN('offence_status','offence.offence_statusid=offence_status.offence_statusid');
       $this->db->JOIN('region_police','region_police.region_policeid=offence.region_policeid');
       $this->db->JOIN('district_police','district_police.district_policeid=offence.district_policeid');
       $this->db->JOIN('ward_police','ward_police.ward_policeid=offence.ward_policeid');
       $this->db->order_by($sort_by,$sort_order);
       $ret['rows'] = $this->db->get()->result();
       
       //count query  
       $this->db->select('COUNT(*) as count', FALSE);
       $this->db->from('offence');
       if(strlen($query_array['crimetype_id'])){
           $this->db->where('offence.crimetype_id', $query_array['crimetype_id']);    
       }
       if(strlen($query_array['crimecat_id'])){
           $this->db->where('offence.crimecat_id', $query_array['crimecat_id']);    
       }
       if(strlen($query_array['offence_statusid'])){
           $this->db->where('offence.offence_statusid', $query_array['offence_statusid']);    
       }  
       if(strlen($query_array['region_policeid'])){
           $this->db->where('offence.region_policeid', $query_array['region_policeid']);    
       } 
       if(strlen($query_array['district_policeid'])){
           $this->db->where('offence.district_policeid', $query_array['district_policeid']);    
       }      
       if(strlen($query_array['ward_policeid'])){
           $this->db->where('offence.ward_policeid', $query_array['ward_policeid']);    
       }
       $this->db->where('offence.station_id',$police_station);
       //$this->db->where('offence.station_id',$police_station);
       $tmp = $this->db->get()->result();    
       $ret['num_rows'] = $tmp[0]->count;
       
       return $ret;   
   }
   
   
   
   
   public function getOneOffence($offence_no){
       $this->db->SELECT('offence.*,crime_type.*,crime_category.*,offence_status.*,s.*,district_police.*, ward_police.*,region_police.*');
       $this->db->FROM('offence');
       $this->db->JOIN('crime_type','crime_type.crimetype_id=offence.crimetype_id');
       $this->db->JOIN('crime_category','crime_category.crimecat_id=offence.crimecat_id');
       $this->db->JOIN('offence_status','offence.offence_statusid=offence_status.offence_statusid');
       $this->db->JOIN('station AS s','s.station_id=offence.station_id');
       //$this->db->JOIN('investigatorinfo','offence.offence_no=investigatorinfo.offence_no','LEFT');
       //$this->db->JOIN('users','investigatorinfo.force_no=users.force_no','LEFT');
       //$this->db->JOIN('station AS st','st.region_policeid=region_police.region_policeid');
       //$this->db->JOIN('station','station.district_policeid=district_police.district_policeid');
       //$this->db->JOIN('station','station.ward_policeid=ward_police.ward_policeid');
       $this->db->JOIN('region_police','offence.region_policeid=region_police.region_policeid','LEFT');
       $this->db->JOIN('district_police','offence.district_policeid = district_police.district_policeid','LEFT');
       $this->db->JOIN('ward_police','offence.ward_policeid = ward_police.ward_policeid','LEFT');
       $this->db->WHERE('offence.offence_no', $offence_no);
       $query = $this->db->get();
        if($query->num_rows()>0){
        return $query;
        }
        else {
              return FALSE;
             }
      }
      
      public function getStatementUpload($offence_no){
          $this->db->SELECT('*');
          $this->db->FROM('offence_statement');
          $this->db->WHERE('offence_no',$offence_no);
          $query=$this->db->get();
          if($query->num_rows()>0){
              return $query;
          }
          else{
              return FALSE;
          }
      }
     

   public function getOneTaarifa($taarifa_id){
       $this->db->SELECT('*');
       $this->db->FROM('taarifa');
       $this->db->JOIN('station','taarifa.station_id=station.station_id');
       $this->db->JOIN('region_police','station.region_policeid=region_police.region_policeid','LEFT');
       $this->db->JOIN('district_police','station.district_policeid = district_police.district_policeid','LEFT');
       $this->db->JOIN('ward_police','station.ward_policeid = ward_police.ward_policeid','LEFT');
       $this->db->WHERE('taarifa.taarifa_id', $taarifa_id);
       $this->db->WHERE('taarifa.is_taarifa', 1);
       $query = $this->db->get();
        if($query->num_rows()>0){
        return $query;
        }
        else {
              return FALSE;
             }
      }

}

?>
