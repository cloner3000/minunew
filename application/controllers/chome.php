<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chome extends CI_Controller{

  public function __construct() {
    parent::__construct();
    $this->load->model('Home_m');
		$this->load->helper(array('url','html','form'));
  }

  public function index()
  {
    $data['title'] = 'MADRASAH IBTIDAIYAH NAHDLATUL ULAMA 2';
    $data['taglineuni'] = 'LEMBAGA PENDIDIKAN MA’ARIF CAB. BANYUWANGI';
    $data['alamat'] = 'Jl. Sumber Urip Kaliboyo Kradenan Purwoharjo Banyuwangi Jawa Timur';
    $data['artbycat'] = $this->Home_m->getartikel();
    $data['artbycat1'] = $this->Home_m->getartikel1();
    $data['artbycat2'] = $this->Home_m->getartikel2();

    $data['halaman'] = 'pages/vmainhome';
    $this->load->view('pages/vhome', $data);

  }

}