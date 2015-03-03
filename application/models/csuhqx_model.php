<?php

class Csuhqx_model extends CI_Model{


   public function getOffence($query_array,$limit,$offset,$sort_by,$sort_order){
       $user_id= $this->session->userdata('user_id');

       $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
       $sort_colums = array('offence_no','rb_no','ir_no','offence_statusid','tukiostatus','date_reported','date_occurance','offence_location','crimetype_name','crimecat_name');
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
       if(strlen($query_array['hqinternalstatus_no'])){
           $this->db->where('offence.hqinternalstatus_no', $query_array['hqinternalstatus_no']);    
       } 
      
       $this->db->limit($limit, $offset);
       $this->db->JOIN('crime_type','crime_type.crimetype_id=offence.crimetype_id');
       $this->db->JOIN('crime_category','crime_category.crimecat_id=offence.crimecat_id');
       $this->db->JOIN('offence_status','offence.offence_statusid=offence_status.offence_statusid');
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
       if(strlen($query_array['hqinternalstatus_no'])){
           $this->db->where('offence.hqinternalstatus_no', $query_array['hqinternalstatus_no']);    
       } 
       $tmp = $this->db->get()->result();    
       $ret['num_rows'] = $tmp[0]->count;
       
       return $ret;   
   }
   
   
   
}
?>

