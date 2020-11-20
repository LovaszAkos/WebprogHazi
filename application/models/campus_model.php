<?php

class campus_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_list(){
        $this->db->select('campus, épület, hely, code');
        $this->db->from('egyetem');
        $this->db->order_by('campus','ASC');
       
        return $this->db->get()->result();
    }
    
    public function get_one($code){
        $this->db->select('*');
        $this->db->from('egyetem');
        $this->db->where('code',$code); 
        
        return $this->db->get()->row();
    }
    
    public function delete($id){
        $this->db->where('id', $id);
        
        return $this->db->delete('egyetem');
    }
    
    public function insert($campus, $code, $épület, $hely){
        $record = [
            'campus'        =>  $campus, 
            'code'          =>  $code,
            'épület'        =>  $épület,
            'hely'          =>  $hely
        ];
        
        return $this->db->insert('egyetem', $record);
    }
    
    public function update($id, $code, $campus, $épület, $hely){
        $this->db->where('id',$id);
        
        $record = [
            'code'          =>  $code,
            'campus'        =>  $campus,
            'épület'        =>  $épület, 
            'hely'          =>  $hely
        ];
        
        return $this->db->update('egyetem', $record);
    }
}
