<?php

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('M_log');
    }

    public function index(){
        $data['title']  = 'Halaman Login';
        $this->load->view('v_login', $data);
    }

    public function cek_login(){
            $user   = $this->input->post('user');
            $pass   = $this->input->post('pass');    
            $enkrip = md5($pass);

            $data = array(
                        'user'  => $user,
                        'pass'  => $pass,
                        'status'=> TRUE);

            $cek = $this->M_log->login($data);

            if($cek->num_rows() > 0){
                $data['akun']   = $this->M_log->cek_login($user, $pass);
                 
                foreach($data['akun'] as $r){
                   $sesi['user']    = $user;
                   $sesi['status']  = $r->status;
                   $sesi['nama']    = $r->nama;
                   $sesi['akses']   = $r->akses;
                   $sesi['status']  = TRUE;

                   $this->session->set_userdata($sesi);

                   if($r->status != 1){
                        echo " <link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
                        <script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
                        <script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
                        <script type='text/javascript'>
                        setTimeout(function () {  
                        swal({
                            title: 'Login Gagal',
                            text: 'Status Akun Anda Tidak Aktif',
                            type: 'error',
                            timer: 4000,
                            showConfirmButton: false
                        });  
                        },10); 
                        window.setTimeout(function(){ 
                        window.location.href='".base_url()."';	
                        } ,2100); 
                        </script>";
                   }else{
                        echo " <link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
                        <script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
                        <script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
                        <script type='text/javascript'>
                        setTimeout(function () {  
                        swal({
                            title: 'Login Sukses',
                            text:  'Selamat Datang ".$r->nama."',
                            type: 'success',
                            timer: 4000,
                            showConfirmButton: false
                        });  
                        },10); 
                        window.setTimeout(function(){ 
                        window.location.href='".base_url('chat')."';	
                        } ,2100); 
                        </script>";
                   }
                }
            }else{
                echo "  <link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
                        <script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
                        <script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
                        <script type='text/javascript'>
                        setTimeout(function () {  
                        swal({
                            title: 'Login Gagal',
                            text: 'Periksa Username dan Password Anda Kembali',
                            type: 'error',
                            timer: 10000,
                            showConfirmButton: false
                        });  
                        },10); 
                        window.setTimeout(function(){ 
                        window.location.href='".base_url()."';	
                        } ,2100); 
                        </script>";
            }
            
    }

    public function logout(){
        $this->session->unset_userdata('user');
        session_destroy();
            echo "  <link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
                        <script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
                        <script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
                        <script type='text/javascript'>
                        setTimeout(function () {  
                        swal({
                            title: 'Berhasil Keluar',
                            text: 'Da daaaa',
                            type: 'success',
                            timer: 10000,
                            showConfirmButton: false
                        });  
                        },10); 
                        window.setTimeout(function(){ 
                        window.location.href='".base_url()."';	
                        } ,2100); 
                        </script>";
    }

    public function v_register(){
        $data['title']  = 'Halaman Registrasi';
        $this->load->view('v_register', $data);
    }



}