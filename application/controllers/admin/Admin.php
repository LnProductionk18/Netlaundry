<?php  
	class Admin extends CI_Controller
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
			if ($this->session->userdata('level')=="admin")
			{	
				#echo "<script>alert('Selamat Datang!');(-1);</script>";
				$kasir['name'] = $this->session->userdata('name');
				$kasir['kasir']=$this->m_laundry->show_transaksi();
				$kasir['paket']=$this->m_laundry->show_paket();
				$kasir['sttsbju']=$this->m_laundry->show_sttsbju();
				$kasir['sttsbyr']=$this->m_laundry->show_sttsbyr();
				$kasir['show_cucibarumasuk']=$this->m_laundry->show_cucibarumasuk();
				$kasir['show_cucidalamproses']=$this->m_laundry->show_cucidalamproses();
				$kasir['show_cuciselesai']=$this->m_laundry->show_cuciselesai();
				$kasir['show_sudahbayar']=$this->m_laundry->show_sudahbayar();
				$kasir['show_belumbayar']=$this->m_laundry->show_belumbayar();
				$this->load->view('admin/v_laundry',$kasir);
			}
			else
			{
				echo "<script>alert('Anda Tidak memiliki akses pada laman ini!');history.go(-1);</script>";
				#redirect('login');
			}
		}
		function simpan_transaksi()
		{
			$id 		=$this->input->post('id');
			$nama_pel	=$this->input->post('nama_pel');
			$notel_pel	=$this->input->post('notel_pel');
			$tgl_masuk	=$this->input->post('tgl_masuk');
			$tgl_keluar	=$this->input->post('tgl_keluar');
			$des_baju	=$this->input->post('des_baju');
			$des_paket	=$this->input->post('des_paket');
			$berat		=$this->input->post('berat');
			$tot_bayar	=$this->input->post('tot_bayar');
			$des_bayar	=$this->input->post('des_bayar');
			$pengambilan	=$this->input->post('pengambilan');
			$this->m_laundry->simpan_transaksi($id, $nama_pel, $notel_pel, $tgl_masuk, $tgl_keluar, $des_baju, $des_paket, $berat, $tot_bayar, $des_bayar, $pengambilan);
			redirect('admin/admin');
		}
		function edit_transaksi()
		{
			$id 		=$this->input->post('id');
			$nama_pel	=$this->input->post('nama_pel');
			$notel_pel	=$this->input->post('notel_pel');
			$tgl_masuk	=$this->input->post('tgl_masuk');
			$tgl_keluar	=$this->input->post('tgl_keluar');
			$des_baju	=$this->input->post('des_baju');
			$des_paket	=$this->input->post('des_paket');
			$berat		=$this->input->post('berat');
			$tot_bayar	=$this->input->post('tot_bayar');
			$des_bayar	=$this->input->post('des_bayar');
			$pengambilan	=$this->input->post('pengambilan');
			$this->m_laundry->edit_transaksi($id, $nama_pel, $notel_pel, $tgl_masuk, $tgl_keluar, $des_baju, $des_paket, $berat, $tot_bayar, $des_bayar, $pengambilan);
			redirect('admin/admin');
		}
		function hapus_transaksi()
		{
			$id=$this->input->post('id');
			$this->m_laundry->hapus_transaksi($id);
			redirect('admin/admin');
		}

		// public function export()
		// {
		// 	 $data = array( 'title' => 'Laporan Harian Laundry',
		// 	 'print' => $this->m_laundry->show_transaksi());
		// 	 $this->load->view('admin/v_laporan_laundry',$data);
		// }

		// public function export_excelbuku()
		// {
		// 	 $data = array( 'title' => 'Laporan Data Buku',
		// 	 'user' => $this->m_laundry->listingbuku());
		// 	 $this->load->view('admin/v_laporan_buku',$data);
		// }
		#End of functions transaksi
		#=======================================================================================================================================#

		#=======================================================================================================================================#
		#functios of paket
		function indexpaket()
		{
			if ($this->session->userdata('level')=="admin")
			{
				$paket['name'] = $this->session->userdata('name');
				$paket['paket']=$this->m_laundry->show_paket();
				$this->load->view('admin/v_paket',$paket);				
			}
			else
			{
				echo "<script>alert('Anda Tidak memiliki akses pada laman ini!');history.go(-1);</script>";
			}
		}

		function simpan_paket()
		{
			$id_paket	=$this->input->post('id_paket');
			$des_paket	=$this->input->post('des_paket');
			$harga		=$this->input->post('harga');
			$this->m_laundry->simpan_paket($id_paket, $des_paket, $harga);
			redirect('admin/admin/indexpaket');
		}

		function edit_paket()
		{
			$id_paket	=$this->input->post('id_paket');
			$des_paket	=$this->input->post('des_paket');
			$harga		=$this->input->post('harga');
			$this->m_laundry->edit_paket($id_paket, $des_paket, $harga);
			redirect('admin/admin/indexpaket');
		}

		function hapus_paket()
		{
			$id_paket=$this->input->post('id_paket');
			$this->m_laundry->hapus_paket($id_paket);
			redirect('admin/admin/indexpaket');
		}
		#End of functions paket
		#=======================================================================================================================================#

		#=======================================================================================================================================#
		#functions of status baju

		function indexstbaju()
		{
			if ($this->session->userdata('level')=="admin")
			{
				$baju['name'] = $this->session->userdata('name');
				$baju['stbaju']=$this->m_laundry->show_sttsbju();
				$this->load->view('admin/v_sttsbaju',$baju);
			}
			else
			{
				echo "<script>alert('Anda Tidak memiliki akses pada laman ini!');history.go(-1);</script>";
			}
		}

		function simpan_stbaju()
		{
			$id_status_baju	=$this->input->post('id_status_baju');
			$des_baju		=$this->input->post('des_baju');
			$this->m_laundry->simpan_stbaju($id_status_baju, $des_baju);
			redirect('admin/admin/indexstbaju');
		}

		function edit_stbaju()
		{
			$id_status_baju	=$this->input->post('id_status_baju');
			$des_baju		=$this->input->post('des_baju');
			$this->m_laundry->edit_stbaju($id_status_baju, $des_baju);
			redirect('admin/admin/indexstbaju');
		}

		function hapus_stbaju()
		{
			$id_status_baju =$this->input->post('id_status_baju');
			$this->m_laundry->hapus_stbaju($id_status_baju);
			redirect('admin/admin/indexstbaju');
		}
		#End of functions status baju
		#=======================================================================================================================================#

		#=======================================================================================================================================#
		#functions of status bayar

		function indexstbyr()
		{
			if ($this->session->userdata('level')=="admin")
			{
				$bayar['name'] = $this->session->userdata('name');
				$bayar['stbyr']=$this->m_laundry->show_sttsbyr();
				$this->load->view('admin/v_sttsbayar',$bayar);
			}
			else
			{
				echo "<script>alert('Anda Tidak memiliki akses pada laman ini!');history.go(-1);</script>";
			}
		}

		function simpan_stbyr()
		{
			$id_status_bayar	=$this->input->post('id_status_bayar');
			$des_bayar			=$this->input->post('des_bayar');
			$this->m_laundry->simpan_stbyr($id_status_bayar, $des_bayar);
			redirect('admin/admin/indexstbyr');
		}

		function edit_stbyr()
		{
			$id_status_bayar	=$this->input->post('id_status_bayar');
			$des_bayar			=$this->input->post('des_bayar');
			$this->m_laundry->edit_stbyr($id_status_bayar, $des_bayar);
			redirect('admin/admin/indexstbyr');
		}

		function hapus_stbyr()
		{
			$id_status_bayar	=$this->input->post('id_status_bayar');
			$this->m_laundry->hapus_stbyr($id_status_bayar);
			redirect('admin/admin/indexstbyr');
		}
		#End of functions status bayar
		#=======================================================================================================================================#

		#=======================================================================================================================================#
		#akun functions


		function indexakunptgs()
		{	
			
			if ($this->session->userdata('level')=="admin")
			{
				$ptgs['name'] = $this->session->userdata('name');
				$ptgs['ptgs']=$this->m_laundry->show_akunptgs();
				$ptgs['akunadmin']=$this->m_laundry->akunadmin();
				$ptgs['akunusers']=$this->m_laundry->akunusers();
				$this->load->view('admin/v_akun',$ptgs);
			}
			else
			{
				echo "<script>alert('Anda Tidak memiliki akses pada laman ini!');history.go(-1);</script>";
			}
			
		}


		function simpan_akun()
		{
			#$lvl="member";
			$uid 			=$this->input->post('uid');
			$name 			=$this->input->post('name');
			$username 	 	=$this->input->post('username');
			$password 		=md5($this->input->post('password'));
			$level 			=$this->input->post('level');
			$this->m_laundry->simpan_akun($uid,$name,$username,$password,$level);
			redirect('admin/admin/indexakunptgs');
		}

		function edit_akun()
		{
			$uid 			=$this->input->post('uid');
			$name 			=$this->input->post('name');
			$username 	 	=$this->input->post('username');
			$password 		=md5($this->input->post('password'));
			$level 			=$this->input->post('level');
			$this->m_laundry->edit_akun($uid,$name,$username,$password,$level);
			redirect('admin/admin/indexakunptgs');
		}
		function hapus_akun()
		{
			$uid=$this->input->post('uid');
			$this->m_laundry->hapus_akun($uid);
			redirect('admin/admin//indexakunptgs');
		}

		#end of akun functions
		#=======================================================================================================================================#





 	public function export()
  {
   
      // Load plugin PHPExcel nya
      include APPPATH.'third_party/PHPExcel/PHPExcel.php';

      // Panggil class PHPExcel nya
      $excel = new PHPExcel();

      // Settingan awal fil excel
      $excel->getProperties()->setCreator('Latihan CodeIgniter')
                   ->setLastModifiedBy('Latihan CodeIgniter')
                   ->setTitle("Data Pelanggan")
                   ->setSubject("Pelanggan")
                   ->setDescription("Laporan Semua Data Pelanggan")
                   ->setKeywords("Data Pelanggan");

      // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
      $style_col = array(
        'font' => array('bold' => true), // Set font nya jadi bold
        'alignment' => array(
          'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
          'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders' => array(
          'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
          'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
          'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
          'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
      );

        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = array(
          'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );

      $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA PELANGGAN"); // Set kolom A1 dengan tulisan "DATA SISWA"
      $excel->getActiveSheet()->mergeCells('A1:L1'); // Set Merge Cell pada kolom A1 sampai L1
      $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
      $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
      $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "ID PELANGGAN"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA PELANGGAN"); // Set kolom C3 dengan tulisan "NAMA"
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "NOTEL PELANGGAN"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "TANGGAL MASUK"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "TANGGAL KELUAR"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "STATUS CUCIAN"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('H3', "PAKET"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('I3', "BERAT"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('J3', "TOTAL BAYAR"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('K3', "STATUS PEMBAYARAN"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('L3', "PENGAMBILAN"); // Set kolom E3 dengan tulisan "ALAMAT"
    //$excel->setActiveSheetIndex(0)->setCellValue('M3', "KONFIRMASI"); // Set kolom E3 dengan tulisan "ALAMAT"

    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
    //excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);

    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    //$this->load->model("model_toko");
    $toko = $this->m_laundry->view();

    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($toko as $data)
    { // Lakukan looping pada variabel pelanggan
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->id);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_pel);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->notel_pel);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->tgl_masuk);
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->tgl_keluar);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->des_baju);
      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->des_paket);
      $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->berat);
      $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->tot_bayar);
      $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->des_bayar);
      $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->pengambilan);
      //$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->konfirmasi);

      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
      //$excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);

      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }

    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(25); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(25); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(25); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(25); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(25); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('I')->setWidth(5); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('J')->setWidth(10); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('K')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('L')->setWidth(25); // Set width kolom E
    //$excel->getActiveSheet()->getColumnDimension('M')->setWidth(20); // Set width kolom E

    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Laporan Data Pelanggan");
    $excel->setActiveSheetIndex(0);

    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Data Pelanggan.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');

    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
 
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