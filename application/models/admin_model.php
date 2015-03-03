<?php

class Admin_model extends CI_Model{

public function getUsers($limit,$offset,$sort_by,$sort_order){
    $this->output->enable_profiler(FALSE);
       $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
       $sort_colums = array('fname','region_policename','district_policename','ward_policename','user_typename','userstatus_name');
       $sort_by = (in_array($sort_by, $sort_colums)) ? $sort_by : 'force_no';
        
       $this->db->SELECT('*');
       $this->db->FROM('users');

       $this->db->limit($limit, $offset);
       $this->db->join('station','users.station_id = station.station_id');
       $this->db->join('region_police', 'station.region_policeid = region_police.region_policeid');
       $this->db->join('user_types', 'users.user_typeid = user_types.user_typeid');
       $this->db->join('district_police','station.district_policeid = district_police.district_policeid');
       $this->db->join('ward_police','station.ward_policeid = ward_police.ward_policeid');
       $this->db->join('user_status','users.user_statusid = user_status.userstatus_id');
       $this->db->order_by($sort_by,$sort_order);
       $ret['rows'] = $this->db->get()->result();
       
       //count query  
       $this->db->select('COUNT(*) as count', FALSE);
       $this->db->from('users');

       $tmp = $this->db->get()->result();    
       $ret['num_rows'] = $tmp[0]->count;
 
       return $ret;    
   }
public function getnewUser_region(){
	$this->db->SELECT('*');
	$this->db->FROM('region_police');
	$query=$this->db->get();
	if($query->num_rows()>0)
	{
	 foreach($query->result() as $row)
	 {
		 $data[]=$row;
	 }
	 return $data;
	}
	else
   {
     return FALSE;

   }
	
} 
   
   public function getCrimeType($condition=''){
        $this->db->SELECT('*');
        $this->db->FROM('crime_type');
        if($condition !=''){
            $this->db->where('crimetype_id',$condition);
        }
        $query = $this->db->get();
        $data[''] = '-- Chagua kundi la kosa --';
        foreach ($query->result_array() as $row){
           $data[$row['crimetype_id']] = $row['crimetype_name'];
         }
       return $data; 
   }
   
   
   
   //adding new user 
    public function addnewUser($data){
    $this->db->insert('users', $data);   
   }
  // viewing more user information by the administrator
   
   public function getUsermoreinfo($userid){
        $this->db->SELECT('*');
        $this->db->FROM('users');
        $this->db->join('user_types', 'users.user_typeid = user_types.user_typeid');
        $this->db->join('station','users.station_id=station.station_id');
        $this->db->join('region_nbs','station.region_nbsid=region_nbs.region_nbsid');
        $this->db->join('region_police','station.region_policeid=region_police.region_policeid');
        $this->db->join('district_nbs','station.district_nbsid=district_nbs.district_nbsid');
        $this->db->join('district_police','station.district_policeid=district_police.district_policeid');
        $this->db->join('ward_nbs','station.ward_nbsid=ward_nbs.ward_nbsid');
        $this->db->join('ward_police','station.ward_policeid=ward_police.ward_policeid');
        $this->db->join('user_status','users.user_statusid = user_status.userstatus_id');
        $this->db->WHERE('users.id',$userid);
        $query = $this->db->get();
      if($query->num_rows()>0)
	{
//	 foreach($query->result() as $row)
//	 {
//		 $data[]=$row;
//	 }
	 return $query;
	}
	else
        {
         return FALSE;

        }
     }
     
     
     
      public function getPoliceposition(){
        $this->db->SELECT('*');
        $this->db->FROM('user_types');
        $query = $this->db->get();
        $data[''] = '--Select Position--';
        foreach ($query->result_array() as $row){
           $data[$row['user_typeid']] = $row['user_typename'];
       }
       return $data; 
    }
    
    public function UpdateTable($data,$table,$column_name,$column_value){
       $this->db->where($column_name,$column_value);
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
     public function select($table, $column='', $condition=''){
        $this->db->SELECT('*');
        $this->db->FROM($table);
        if($condition != ''){
            $this->db->where($column, $condition);
        }
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
