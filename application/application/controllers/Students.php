<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$user =  $this->session->userdata('user');
		if( empty($user) )
			redirect('login','refresh');

		$this->load->model('students_model','Students');
	}

	public function index()
	{
		$header_data['title'] = "Students: View Student List";

		$students = array();

		$condition = array('sex'=>'F','course'=>'BSIT');

		// $rs = $this->Students->read($condition);
		$rs = $this->Students->read();

		foreach($rs as $r){
			$info = array(
						'idno' => $r['idno'],
						'lastname' => $r['lname'],
						'firstname' => $r['fname'],
						'middlename' => $r['mname'],
						'course' => $r['course'],
						'sex' => $r['sex']
						);
			$students[] = $info;
		}

		$data['students'] = $students;

		$this->load->view('include/header',$header_data);
		$this->load->view('students/view_students',$data);
		$this->load->view('include/footer');
	}

	public function search(){

		// print_r($_GET);

		$where = array('lastname'=>$_GET['search']);

		$this->load->model('students_model');

		// $data = $this->students_model->read();

		$data = $_GET;
		$rs = array(	'idno'=>'12-004-001','lastname'=>'bituonan','firstname'=>'butch',
						'middlename'=>'ross','course'=>'mit','sex'=>'m'
					);
		$data[] = $rs;

		// print_r($data);
		// exit;

		echo json_encode($data);
	}

	public function add_student(){

		$data = array();

		if( $_SERVER['REQUEST_METHOD']=='POST'){
			//form was submitted
			// Array ( [idno] => [lname] => [fname] => [mname] => [course] => BSIT )

			$validate = array (
				array('field'=>'idno','label'=>'ID No','rules'=>'trim|required|min_length[2]'),
				array('field'=>'lname','label'=>'Apelyido','rules'=>'trim|required|min_length[2]'),
				array('field'=>'fname','label'=>'Given Name','rules'=>'trim|required|min_length[2]'),
				//array('field'=>'email','label'=>'Email Address','rules'=>'trim|required|is_unique[students.email]|valid_email|min_length[10]'),
			);

			$this->form_validation->set_rules($validate);

			if ($this->form_validation->run()===FALSE){

				$data['errors'] = validation_errors();

			}else{
				// check for duplicate

				// save the record
				$record = array(
								'idno'=>$_POST['idno'],
								'lname'=>$_POST['lname'],
								'fname'=>$_POST['fname'],
								'mname'=>$_POST['mname'],
								'sex'=>$_POST['sex'],
								'course'=>$_POST['course'],
							);

				$last_id = $this->Students->create($record);

				$data['saved']=TRUE;
			}

		}

		$header_data['title'] = "Students: New Student";


		$this->load->view('include/header',$header_data);
		$this->load->view('students/new_student',$data);
		$this->load->view('include/footer');

	}

	public function profile($id){
		// echo "Display student profile with ID=$id";

		//call the model
		$student = $this->Students->read(array('idno'=>$id));

		if( count($student)>0 ){
			//find the student record
			//load the view
			$header_data['title'] = "Students: View Student Profile";
			$data['student'] = $student;

			$this->load->view('include/header',$header_data);
			$this->load->view('students/profile',$data);
			$this->load->view('include/footer');
		}
		else{
			redirect('students','refresh');
		}
	}

	public function newstudent(){
		echo "new student";
	}
}
