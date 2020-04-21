<?php  

	class Users extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			#$this->load->model('m_perpus');
			$this->load->model('m_laundry');
			if ($this->session->userdata('username')=="")
			{
				redirect('login');
			}
			$this->load->helper('text');
		}
		#=======================================================================================================================================#
		#functions for  transaksi
		public function index() 
		{
			if ($this->session->userdata('level')=="member")
			{	
				#echo "<script>alert('Selamat Datang!');(-1);</script>";
				$user['name'] = $this->session->userdata('name');
				/*$kasir['kasir']=$this->m_laundry->show_transaksi();
				$kasir['paket']=$this->m_laundry->show_paket();
				$kasir['sttsbju']=$this->m_laundry->show_sttsbju();
				$kasir['sttsbyr']=$this->m_laundry->show_sttsbyr();*/
				$user['show_cucibarumasuk']=$this->m_laundry->show_cucibarumasuk();
				$user['show_cucidalamproses']=$this->m_laundry->show_cucidalamproses();
				$user['show_cuciselesai']=$this->m_laundry->show_cuciselesai();
				/*$kasir['show_sudahbayar']=$this->m_laundry->show_sudahbayar();
				$kasir['show_belumbayar']=$this->m_laundry->show_belumbayar();*/
				$user['kasir']=$this->m_laundry->show_transaksi();
				$this->load->view('users/v_user',$user);
			}
			else
			{
				echo "<script>alert('Anda Tidak memiliki akses pada laman ini!');history.go(-1);</script>";
				#redirect('login');
			}
		}


		public function logout()
	 	{
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('level');
			session_destroy();
			redirect('login');
		}

	}


?>