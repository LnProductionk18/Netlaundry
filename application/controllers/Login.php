<?php  
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Login extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_laundry');
		}
		public function index()
		{
			#echo "<script>alert('Selamat Datang Home Page Website Netlaundry!');(-1);</script>";
			$paket['paket1']=$this->m_laundry->show_paket1();
			$paket['paket2']=$this->m_laundry->show_paket2();
			$paket['paket3']=$this->m_laundry->show_paket3();
			$this->load->view('netlaundry',$paket);
		}

		public function cek_login() 
		{
			$data = array('username' => $this->input->post('username', TRUE),
							'password' => md5($this->input->post('password', TRUE))
				);
			$this->load->model('m_laundry'); // load model_user
			$hasil = $this->m_laundry->cek_user($data);
			if ($hasil->num_rows() == 1) 
			{
				foreach ($hasil->result() as $sess) 
				{
					$sess_data['logged_in'] = 'Sudah Loggin';
					$sess_data['uid'] = $sess->uid;
					$sess_data['name'] = $sess->name;
					$sess_data['username'] = $sess->username;
					$sess_data['level'] = $sess->level;
					$this->session->set_userdata($sess_data);
				}
				if ($this->session->userdata('level')=='admin')
				{
					redirect('admin/admin');
				}
				elseif ($this->session->userdata('level')=='member') 
				{
					redirect('users/users');
				}		
			}
			else
		 	{
				echo "<script>alert('Gagal login: Cek username & password!');history.go(-1);</script>";
			}
		}

		function daftar()
		{
			$this->load->view('signup');
		}

		function simpan_daftar()
		{			
			$uid 			=$this->input->post('uid');
			$name 			=$this->input->post('name');
			$username 	 	=$this->input->post('username');
			$password 		=md5($this->input->post('password'));
			$level 			=$this->input->post('level');
			$this->m_laundry->simpan_akun($uid,$name,$username,$password,$level);
			redirect('login');
		}
		
	}
?>