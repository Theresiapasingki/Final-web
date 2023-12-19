<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

    private $table = 'halaman';
    // public $lang = '';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('crud_mahasiswabaru');
    }

    public function index()
    {
        $queryAllMahasiswa = $this->crud_mahasiswabaru->getDataMahasiswa();
	
        $wrapper_data = array(
            'title' => 'Beranda Departemen Sistem Perkapalan',
            'mahasiswa' => $queryAllMahasiswa,
            'isi' => 'homepage/home/landing_#id' 
        );
    
        $this->load->view('homepage/_layout/wrapper', $wrapper_data); 
        
    }

    public function halaman_tambah() 
	{
		$this->load->view('homepage/home/tambahkan');
	}

	public function halaman_edit()
	{
		$queryMahasiswaDetail = $this->crud_mahasiswabaru->getDataMahasiswaDetail();
		$DATA = array('queryMhsDetail' => $queryMahasiswaDetail);
		$this->load->view('homepage/home/edit', $DATA);
	}

	public function fungsiTambah()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');

		$ArrInsert = array(
			'nim' => $nim,
			'nama' => $nama,
			'jurusan' => $jurusan
		);

		$this->crud_mahasiswabaru->insertDataMahasiswa($ArrInsert);
		redirect(base_url(''));

	}

	public function fungsiEdit()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');

		$ArrUpdate = array(
			'nama' => $nama,
			'jurusan' => $jurusan
		);

		$this->crud_mahasiswabaru->updateDataMahasiswa($nim, $ArrUpdate);
		redirect(base_url(''));

	}

	public function fungsiDelete($nim)
	{
		$this->crud_mahasiswabaru->deleteDataMahasiswa($nim);
		redirect(base_url(''));
	}

    public function service()
    {

        $data = array(  'title'     => 'Beranda Departemen Sistem Perkapalan',
                        'isi'       => 'homepage/service/index');
        $this->load->view('homepage/_layout/wrapper', $data);
    }

    public function faq()
    {

        $data = array(  'title'     => 'Beranda Departemen Sistem Perkapalan',
                        'isi'       => 'homepage/faq/index');
        $this->load->view('homepage/_layout/wrapper', $data);
    }

    public function getconnected()
    {

        $data = array(  'title'     => 'Beranda Departemen Sistem Perkapalan',
                        'isi'       => 'homepage/getconnected/index');
        $this->load->view('homepage/_layout/wrapper', $data);
    }


    
}
