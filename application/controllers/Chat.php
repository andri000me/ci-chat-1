<?php

class Chat extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $data   = [     'nama'  => $this->session->userdata('nama'),
                        'akses' => $this->session->userdata('akses'),
                        'title' =>  'Halaman Utama'
                    ];
        // $data['nama'] = $this->session->userdata('nama');
        $this->load->view('v_home', $data);
    }

}