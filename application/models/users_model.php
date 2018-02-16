<?php
class users_model extends CI_model{
  	public function register_user($user){
    	$this->db->insert('user', $user);
  	}
  	public function login_user($email,$pass){
	    $this->db->select('*');
	    $this->db->from('user');
	    $this->db->where('UserEmail',$email);
	    $this->db->where('UserPass',$pass);
	    if($query=$this->db->get()){
	      	return $query->row_array();
	    }
	    else{
	      	return false;
	    }
  	}
  	public function email_check($email){
	    $this->db->select('*');
	    $this->db->from('user');
	    $this->db->where('UserEmail',$email);
	    $query=$this->db->get();
	    if($query->num_rows()>0){
	     	return false;
	    }
	    else{
	      	return true;
	    }
  	} 
}
?>