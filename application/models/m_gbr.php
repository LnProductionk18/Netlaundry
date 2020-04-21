<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
	class m_gbr extends CI_Model
	{
		public function upload()
	  	{
		    $config['upload_path'] = './seno/'; /*ini adalah nama file penyimpanan gambar pada local file*/
		    $config['allowed_types'] = 'jpg|png|jpeg|mp4';
		   			# $config['max_size']  = '2048' #= sama saja dengan 2 MB;
		   	$config['max_size']  = '50000000000';
		    $config['remove_space'] = TRUE;
		  
		    $this->load->library('upload', $config); // Load konfigurasi uploadnya
		    if($this->upload->do_upload('input_gambar'))
		    { // Lakukan upload dan Cek jika proses upload berhasil
		      // Jika berhasil :
		      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
		      return $return;	
		    }
		    else
		    {
		      // Jika gagal :
		      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		      return $return;
		    }
		  }
	  
	  // Fungsi untuk menyimpan data ke database
	  public function save($upload)
	  {
	    $data = array(
	      'deskripsi'=>$this->input->post('input_deskripsi'),
	      'nama_file' => $upload['file']['file_name'],
	      'ukuran_file' => $upload['file']['file_size'],
	      'tipe_file' => $upload['file']['file_type']
	    );
	    
	    $this->db->insert('gambar', $data);
	  }
	public function view()
	{
	    return $this->db->get('gambar')->result();
	    // $b=$this->db->query("SELECT * FROM gambar");
	    // return $b;
	}
	}


?>