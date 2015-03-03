<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Home_model extends CI_Model{
    
     public function getUserInfo($number,$password){
        $this->db->select('users.*, user_types.*, station.*, region_nbs.region_nbsid, region_nbs.region_nbsname, region_police.region_policeid, region_police.region_policename,
                district_police.district_policename, district_police.district_policeid, district_nbs.district_nbsname, district_nbs.district_nbsid,
                ward_police.ward_policename, ward_police.ward_policeid, ward_nbs.ward_nbsname, ward_nbs.ward_nbsid
        ');    
                
        $this->db->WHERE('force_no',$number);
        $this->db->WHERE('password', $password);
        $this->db->WHERE('users.user_statusid', 1);
        $this->db->from('users');
        $this->db->join('station','users.station_id = station.station_id');
        $this->db->join('region_nbs', 'station.region_nbsid = region_nbs.region_nbsid');
        $this->db->join('region_police', 'station.region_policeid = region_police.region_policeid');
        $this->db->join('district_nbs', 'station.district_nbsid = district_nbs.district_nbsid');
        $this->db->join('district_police', 'station.district_policeid = district_police.district_policeid');
        $this->db->join('ward_nbs', 'station.ward_nbsid = ward_nbs.ward_nbsid','LEFT');
        $this->db->join('ward_police', 'station.ward_policeid = ward_police.ward_policeid');
        $this->db->join('user_types', 'users.user_typeid = user_types.user_typeid');
 
        
        $query = $this->db->get();
        
        if($query->num_rows() == 1){
            foreach ($query->result() as $row){
                $data[] = $row;
            }
            
            return $data;
          }
        }
        
        
      public function checkUser($number, $password){
        $this->db->select('*');
        $this->db->WHERE('force_no',$number);
        $this->db->WHERE('password', $password);
        $this->db->WHERE('user_statusid', 1);
        $this->db->from('users');
        $query = $this->db->get();
        
        if($query->num_rows() == 1 ){
            return TRUE;
        }
        else {
           return FALSE;
          }
        }

      


}
?>
