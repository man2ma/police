<?php

class Dossierno_model extends CI_Model{
    public function getOdder($hqinternalstatus_no) {
        $this->db->SELECT('*');
        $this->db->FROM('offence');
        $this->db->WHERE_NOT_IN('dossier_no',array('Haijawekwa'));
        $this->db->WHERE('hqinternalstatus_no',$hqinternalstatus_no);
        $query= $this->db->get();
        if($query->num_rows()>0)
        {
            return $query;
        }
       else 
       {
            return FALSE;
        }
      
    }

}   
  
?>

