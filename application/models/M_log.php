<?php 

class M_log extends CI_Model {

    function __construct(){
        parent::__construct();

        $this->load->database();
    }

    public function login($data){
        $data = $this->db->get_where('users', $data);
        return $data;
    }

    public function cek_login($user, $pass){
        $data = $this->db->query("SELECT * FROM `users` WHERE user='$user' AND pass='$pass' AND status=TRUE");
        return $data->result();
    }

}