<?php
class appointment_model extends CI_Model{
	private $table = "appointment";
	public function __construct(){
		parent:: __construct();
	}
	public function read_appoint(){
		$this->db->select("*");
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function create($data){
		$this->db->insert($this->table,$data);
		return TRUE;
	}
	public function update($id){
		$data = array(
			'name'=>$this->input->post('name'),
			'section'=>$this->input->post('section'),
			'ign'=>$this->input->post('ign')
		);
		if($id==0){
			return $this->db->insert('league',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('league',$data);
		}
	}
}