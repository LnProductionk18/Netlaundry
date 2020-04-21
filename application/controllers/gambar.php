<?php 
	
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class gambar extends CI_Controller
	{
		public function __construct()
	{ //method ini akan selalu dijalankan
		parent::__construct();
		$this->load->helper('url'); //load helper url CI
		$this->load->model('m_gbr'); // load model bukuModel yang akan digunakan untuk proses database
	}
	
		public function index()
		{
			#echo "<script>alert('Selamat Datang Home Page Website Netlaundry!');(-1);</script>";
			// $paket['paket1']=$this->m_laundry->show_paket1();
			// $paket['paket2']=$this->m_laundry->show_paket2();
			// $paket['paket3']=$this->m_laundry->show_paket3();
			$data['gambar'] = $this->m_gbr->view();
			$this->load->view('wow',$data);
		}
		public function tambah()
	  	{
		    $data = array();
		    
		    if($this->input->post('submit'))
		    { // Jika user menekan tombol Submit (Simpan) pada form
		      // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
		      $upload = $this->m_gbr->upload();
		      
		      if($upload['result'] == "success")
		      { // Jika proses upload sukses
		         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
		        $this->m_gbr->save($upload);
		        
		        redirect('gambar'); // Redirect kembali ke halaman awal / halaman view data
		      }
		      else
		      { // Jika proses upload gagal
		        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		      }
		    }
		    $this->load->view('wow', $data);
		}
	}

?>