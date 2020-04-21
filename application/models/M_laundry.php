<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_laundry extends CI_Model
	{
		#=======================================================================================================================================#
		#functions of show paket di page netlaundry (modal)
		public function show_paket1()
		{
			$show = $this->db->query("SELECT * FROM paket WHERE id_paket='netln01'");
			return $show;
		}

		public function show_paket2()
		{
			$show = $this->db->query("SELECT * FROM paket WHERE id_paket='netln02'");
			return $show;
		}
		public function show_paket3()
		{
			$show = $this->db->query("SELECT * FROM paket WHERE id_paket='netln03'");
			return $show;
		}
		#End functions of show paket di page netlaundry (modal)
		#=======================================================================================================================================#
		#=======================================================================================================================================#
		#functions of transaksi
		/*function show_transaksi()
		{
			$show = $this->db->query("SELECT * FROM kasir");
			return $show;
		}*/
		/*function show_pinjam()
		{
			$show = $this->db->query("SELECT p.id, m.nim, m.nama, p.judul, p.tgl_pinjam, p.tgl_kembali, 
				p.petugas, p.alasan FROM t_pinjam p, t_mahasiswa m WHERE p.nim=m.nim");
			return $show;
		}*/
		public function listingbuku() 
		{
			$this->db->select('*');
			$this->db->from('paket');
			$query = $this->db->get();
			return $query->result();
		}

		public function view()
		{
			return $this->db->get('kasir')->result(); // Tampilkan semua data yang ada di tabel toko
		}


		function show_transaksi()
		{
			$show =$this->db->query("SELECT l.id, l.nama_pel, l.notel_pel, l.tgl_masuk, l.tgl_keluar, 
				l.des_baju, p.des_paket, p.harga, l.berat, l.tot_bayar, l.des_bayar, l.pengambilan FROM kasir l, paket p WHERE l.des_paket=p.des_paket");
			return $show;
		}

		function show_cucibarumasuk()
		{
			$show =$this->db->query("SELECT l.id, l.nama_pel, l.notel_pel, l.tgl_masuk, l.tgl_keluar, 
				l.des_baju, p.des_paket, p.harga, l.berat, l.tot_bayar, l.des_bayar, l.pengambilan FROM kasir l, paket p WHERE l.des_paket=p.des_paket AND des_baju='Baru Masuk'");
			return $show;
		}

		function show_cucidalamproses()
		{
			$show =$this->db->query("SELECT l.id, l.nama_pel, l.notel_pel, l.tgl_masuk, l.tgl_keluar, 
				l.des_baju, p.des_paket, p.harga, l.berat, l.tot_bayar, l.des_bayar, l.pengambilan FROM kasir l, paket p WHERE l.des_paket=p.des_paket AND des_baju='Dalam Proses'");
			return $show;
		}

		function show_cuciselesai()
		{
			$show =$this->db->query("SELECT l.id, l.nama_pel, l.notel_pel, l.tgl_masuk, l.tgl_keluar, 
				l.des_baju, p.des_paket, p.harga, l.berat, l.tot_bayar, l.des_bayar, l.pengambilan FROM kasir l, paket p WHERE l.des_paket=p.des_paket AND des_baju='Selesai (Dapat Diambil)'");
			return $show;
		}

		function show_sudahbayar()
		{
			$show =$this->db->query("SELECT l.id, l.nama_pel, l.notel_pel, l.tgl_masuk, l.tgl_keluar, 
				l.des_baju, p.des_paket, p.harga, l.berat, l.tot_bayar, l.des_bayar, l.pengambilan FROM kasir l, paket p WHERE l.des_paket=p.des_paket
				AND des_bayar='Lunas'");
			return $show;
		}

		function show_belumbayar()
		{
			$show =$this->db->query("SELECT l.id, l.nama_pel, l.notel_pel, l.tgl_masuk, l.tgl_keluar, 
				l.des_baju, p.des_paket, p.harga, l.berat, l.tot_bayar, l.des_bayar, l.pengambilan FROM kasir l, paket p WHERE l.des_paket=p.des_paket
				AND des_bayar='Belum Bayar'");
			return $show;
		}
		#=======================================================================================================================================#
		#digunakan untuk menampilkan data peminjam(gabungan) dan data masing" table
		public function show_paket()
		{
			$show = $this->db->query("SELECT * FROM paket");
			return $show;
		}
		public function show_sttsbju()
		{
			$show = $this->db->query("SELECT * FROM status_baju");
			return $show;
		}
		public function show_sttsbyr()
		{
			$show = $this->db->query("SELECT * FROM status_bayar");
			return $show;
		}
		public function show_akunptgs()
		{
			$show=$this->db->query("SELECT * FROM login_session");
			return $show;
		}

		public function akunadmin()
		{
			$show=$this->db->query("SELECT * FROM login_session WHERE level='admin'");
			return $show;
		}

		public function akunusers()
		{
			$show=$this->db->query("SELECT * FROM login_session WHERE level='member'");
			return $show;
		}
		#=======================================================================================================================================#
		function simpan_transaksi($id, $nama_pel, $notel_pel, $tgl_masuk, $tgl_keluar, $des_baju, $des_paket, $berat, $tot_bayar, $des_bayar, $pengambilan)
		{
			$save = $this->db->query("INSERT INTO kasir (id, nama_pel, notel_pel, tgl_masuk, tgl_keluar, des_baju, des_paket, berat, tot_bayar, des_bayar, pengambilan)
			 VALUES('$id', '$nama_pel', '$notel_pel', '$tgl_masuk', '$tgl_keluar', '$des_baju', '$des_paket', '$berat', '$tot_bayar', '$des_bayar', '$pengambilan')");
			return $save;
		}
		function edit_transaksi($id, $nama_pel, $notel_pel, $tgl_masuk, $tgl_keluar, $des_baju, $des_paket, $berat, $tot_bayar, $des_bayar, $pengambilan)
		{
			$change=$this->db->query("UPDATE kasir SET nama_pel='$nama_pel', notel_pel='$notel_pel', tgl_masuk='$tgl_masuk', tgl_keluar='$tgl_keluar',des_baju='$des_baju', des_paket='$des_paket', berat='$berat', tot_bayar='$tot_bayar',des_bayar='$des_bayar', pengambilan='$pengambilan' WHERE id='$id'");
			return $change;
		}
		function hapus_transaksi($id)
		{
			$delete = $this->db->query("DELETE FROM kasir WHERE id='$id'");
			return $delete;
		}
		#End of functions transaksi
		#=======================================================================================================================================#

		#=======================================================================================================================================#
		#functions of paket
		function simpan_paket($id_paket, $des_paket, $harga)
		{
			$save=$this->db->query("INSERT INTO paket (id_paket, des_paket, harga)
			 VALUES ('$id_paket', '$des_paket', '$harga')");
			return $save;
		}

		function edit_paket($id_paket, $des_paket, $harga)
		{
			$change=$this->db->query("UPDATE paket SET des_paket='$des_paket',harga='$harga' WHERE id_paket='$id_paket'");
			return $change;
		}

		function hapus_paket($id_paket)
		{
			$erase=$this->db->query("DELETE FROM paket WHERE id_paket='$id_paket'");
			return $erase;
		}
		#End of functions paket
		#=======================================================================================================================================#

		#=======================================================================================================================================#
		#functions of status baju
		function simpan_stbaju($id_status_baju, $des_baju)
		{
			$save=$this->db->query("INSERT INTO status_baju (id_status_baju, des_baju)
			 VALUES ('$id_status_baju', '$des_baju')");
			return $save;
		}

		function edit_stbaju($id_status_baju, $des_baju)
		{
			$change=$this->db->query("UPDATE status_baju SET des_baju='$des_baju' WHERE id_status_baju='$id_status_baju'");
			return $change;
		}

		function hapus_stbaju($id_status_baju)
		{
			$erase=$this->db->query("DELETE FROM status_baju WHERE id_status_baju='$id_status_baju'");
			return $erase;
		}
		#End of functions status baju
		#=======================================================================================================================================#

		#=======================================================================================================================================#
		#functions of status bayar
		function simpan_stbyr($id_status_bayar, $des_bayar)
		{
			$save=$this->db->query("INSERT INTO status_bayar (id_status_bayar, des_bayar)
			 VALUES ('$id_status_bayar', '$des_bayar')");
			return $save;
		}

		function edit_stbyr($id_status_bayar, $des_bayar)
		{
			$change=$this->db->query("UPDATE status_bayar SET des_bayar='$des_bayar' WHERE id_status_bayar='$id_status_bayar'");
			return $change;
		}

		function hapus_stbyr($id_status_bayar)
		{
			$erase=$this->db->query("DELETE FROM status_bayar WHERE id_status_bayar='$id_status_bayar'");
			return $erase;
		}
		#End of functions status bayar
		#=======================================================================================================================================#


		#=======================================================================================================================================#
		#akun functions


		function simpan_akun($uid,$name,$username,$password,$level)
		{
			$save=$this->db->query("INSERT INTO login_session (uid, name, username, password, level)
			 VALUES ('$uid', '$name','$username', '$password', '$level')");
			return $save;
		}
		function edit_akun($uid,$name,$username,$password,$level)
		{
			$hasil=$this->db->query("UPDATE login_session SET name='$name', username='$username',password='$password',level='$level' WHERE uid='$uid'");
			return $hsl;
		}
		function hapus_akun($uid)
		{
			$hasil=$this->db->query("DELETE FROM login_session WHERE uid='$uid'");
			return $hasil;
		}

		#end of akun functions
		#=======================================================================================================================================#

		public function cek_user($data)
		{
			$query = $this->db->get_where('login_session', $data);
			return $query;
		}

	}
?>