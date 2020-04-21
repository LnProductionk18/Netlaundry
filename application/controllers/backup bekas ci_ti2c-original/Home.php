<?php
class Home extends CI_Controller {
	public function index() {
		$this->load->model("ArtikelModel");
		$data = array(
			"toko" => $this->ArtikelModel->get()
		);
		$this->load->view("template/header");
		$this->load->view("EditView", $data);
		$this->load->view("template/footer");
	}

	public function tampil() {
		$this->load->model("ArtikelModel");
		$data = array(
			"toko" => $this->ArtikelModel->get()
		);
		$this->load->view("template/header");
		$this->load->view("HomeView", $data);
		$this->load->view("template/footer");
	}

	public function detail($id) {
		$this->load->view("template/header");
		$this->load->model("ArtikelModel");
		$data = array(
			"toko" => $this->ArtikelModel->detail($id)
		);
		$this->load->view("DetailView", $data);
		$this->load->view("template/footer");
	}

	public function tambah() {
		$this->load->view("template/header");
		$this->load->model("ArtikelModel");
		if($this->input->method() == "post") {
			$insert = $this->ArtikelModel->tambah(array(
				'nama' => $this->input->post("nama"),
				'alamat' => $this->input->post("alamat"),
				'deskripsi' => $this->input->post("deskripsi"),
				'no_telp' => $this->input->post("no_telp"),
				'tanggal' => date("Y-m-d H:i:s"),
				'image_location' => $this->_uploadImage()
			));
			if ($insert) { ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin: 0;">
					Sukses tambah toko/jasa.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php
				redirect();
			}
			else { ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin: 0;">
					Gagal tambah toko/jasa.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php
				redirect();
			}
		}
		$this->load->view('FormView');
		$this->load->view("template/footer");
	}

	public function ubah($id = 0) {
			$this->load->view("template/header");
			$this->load->model("ArtikelModel");
			$data = array(
					'toko' => $this->ArtikelModel->detail($id)
			);
			if($this->input->method() == "post") {
					$insert = $this->ArtikelModel->ubah(array(
						'nama' => $this->input->post("nama"),
						'alamat' => $this->input->post("alamat"),
						'deskripsi' => $this->input->post("deskripsi"),
						'no_telp' => $this->input->post("no_telp"),
						'tanggal' => date("Y-m-d H:i:s"),
						'image_location' => $this->_uploadImage()
					), $id);

					if ($insert) { ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin: 0;">
							Sukses ubah toko/jasa.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php
						redirect();
					}
					else { ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin: 0;">
							Gagal ubah toko/jasa.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php
						redirect();
					}
			}
			$this->load->view("FormView", $data);
			$this->load->view("template/footer");
	}

	public function hapus($id) {
			$this->load->view("template/header");
			$this->load->model("ArtikelModel");
			$hapus = $this->ArtikelModel->hapus($id);
			if ($hapus) { ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin: 0;">
					Sukses hapus toko/jasa.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php
				redirect();
			}
			else { ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin: 0;">
					Gagal hapus toko/jasa.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php
				redirect();
			}
			$this->load->view("template/footer");

		 // echo '<meta http-equiv="refresh" content="0;url=../../../">';

	}

	private function _uploadImage()
	{
    $config['upload_path']          = './pic/';
    $config['allowed_types']        = 'jpeg|jpg|png';
		$config['file_name']						= $this->input->post("nama");
    $config['overwrite']						= true;
    $config['max_size']             = 5120; // 5MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image_location')) {
        return "pic/".$this->upload->data("file_name");
    }

    return "pic/magazine1.png";
	}

}
?>
