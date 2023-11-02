<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

  public  function query_validasi_username($username){
    	$result = $this->db->query("SELECT * FROM user_pengguna WHERE username='$username'");
        return $result;
    }

   public function query_validasi_password($username,$password){
    	$result = $this->db->query("SELECT * FROM user_pengguna WHERE username='$username' AND password ='$password'");
        return $result;
    }

    public function insertData($data) {
        $this->db->insert('user_pengguna', $data);
        return true;
    }


} 
