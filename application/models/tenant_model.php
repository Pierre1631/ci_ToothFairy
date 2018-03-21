<?php
class tenant_model extends CI_model{
	public function register_user($user){
    	$this->db->insert('user', $user);
  	}
  	public function getTenantProfile($id, $pass){
	    $this->db->select('*');
	    $this->db->from('tenant');
	    $this->db->where('TenantEmail',$id);
	    $this->db->where('TenantPass',$pass);
	    $query=$this->db->get();
	    return $query->row_array();
  	}
	public function getInfo($id)
	{	
		$this->db->select('*');
		$this->db->from('tenant');
		$this->db->where('TenantEmail',$id);
		$query=$this->db->get();
		return $query->row_array();

	}
	public function getWebName($id)
	{
		$this->db->select('*');
		$this->db->from('website');
		$this->db->where('TenantID',$id);
		$query=$this->db->get();
		return $query->row_array();
	}
	
	public function update_info($id,$data){
		$this->db->where('TenantEmail',$id);
		$this->db->update('tenant',$data);
		return TRUE;
	}
}
?>
