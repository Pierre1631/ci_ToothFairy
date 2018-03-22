	<?php
class tenant_model extends CI_model{
	public function register_user($user){
    	$this->db->insert('tenant', $user);
  	}
  	public function getTenantProfile($email, $pass){
	    $this->db->select('*');
	    $this->db->from('tenant');
	    $this->db->where('tenant_email',$email);
	    $this->db->where('tenant_pass',$pass);
	    $query=$this->db->get();
	    return $query->row_array();
  	}
	public function getInfo($email)
	{
		$this->db->select('*');
		$this->db->from('tenant');
		$this->db->where('tenant_email',$email);
		$query=$this->db->get();
		return $query->row_array();

	}
	public function email_check($email){
		$this->db->select('*');
		$this->db->from('tenant');
		$this->db->where('tenant_email',$email);
		$query=$this->db->get();
		if($query->num_rows()>0){
			return false;
		}
		else{
				return true;
		}
	}
	public function getWebName($id)
	{
		$this->db->select('*');
		$this->db->from('website');
		$this->db->where('tenant_id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	public function update_info($email,$data){
		$this->db->where('tenant_email',$email);
		$this->db->update('tenant',$data);
		return TRUE;
	}
	public function get_Info(){
		$this->db->select('*');
		$this->db->from('tenant');
		$this->db->where('tenant_email',$_SESSION['user']);
		$query=$this->db->get();
		return $query->row_array();
	}
}
?>
