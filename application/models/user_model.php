<?php
class user_model extends CI_model{
  	public function register_user($user){
    	$this->db->insert('user', $user);
  	}
  	public function login_user($email,$pass){
	    $this->db->select('*');
	    $this->db->from('user');
	    $this->db->where('user_email',$email);
	    $this->db->where('user_pass',$pass);
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
	    $this->db->where('user_email',$email);
	    $query=$this->db->get();
	    if($query->num_rows()>0){
	     	return false;
	    }
	    else{
	      	return true;
	    }
  	}
    public function getuser(){
      $query=$this->db->get('user');
      return $result = $query->result();
    }

    public function gettenantinfo(){
      $query=$this->db->get('tenant');
      return $query->result_array();
    }

    public function read($condition=null){
  		$this->db->select('*');
  		$this->db->from('tenant');
		  if( isset($condition) ) $this->db->where($condition);

  		$query=$this->db->get();

  		return $query->result_array();
    }
}
?>
