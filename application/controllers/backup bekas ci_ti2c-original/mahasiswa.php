<?php 
	class Mahasiswa extends CI_Controller {
		// constructor
		public function __construct() {
			parent::__construct();
		}
		function index() {
			$this->load->model('mbiodata');
			$data['data_mahasiswa']=$this->mbiodata->getBiodata();
			$this->load->view('vbiodata',$data);
			echo anchor('mahasiswa/tambah','Tambah Data Mahasiswa').br(1);
			echo anchor('mahasiswa/crud','Latihan CRUD').br(1);
		}
		function tambah() {
			$this->load->view('form_mhs');
		}
		function terima() {
			$data = array ( 'nim' => $_POST['nim'], 'nama' => $_POST['nama'], 'email' => $_POST['email']);
			$this->load->model('mbiodata');
			$this->mbiodata->addBiodata($data);
			echo anchor('mahasiswa/tambah','Tambah Data Lagi?').br(1);
			echo anchor('mahasiswa','Ke Halaman Utama');
		}
        function crud() {
        	$this->load->view('Home');
        }
	}
?>