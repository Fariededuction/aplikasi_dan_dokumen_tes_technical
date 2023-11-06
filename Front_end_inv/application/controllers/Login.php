<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
        $this->load->model('Login_model');
	
    }

    public function index(){
        if($this->session->userdata('logged') !=TRUE){
            $this->load->view('View_login');
        }else{
            $url=base_url('Dashboard');
            redirect($url);
        };

    }

    public function autentikasi(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
                
        $validasi_username = $this->Login_model->query_validasi_username($username);
        if($validasi_username->num_rows() > 0){
            $validate_ps=$this->Login_model->query_validasi_password($username,$password);
            if($validate_ps->num_rows() > 0){
                $x = $validate_ps->row_array();
                if($x['status_pengolahan']=='1'){
                    $this->session->set_userdata('logged',TRUE);
                    $this->session->set_userdata('username',$username);
                    $id=$x['id_pengguna'];
                    if($x['role_id']=='1'){ //Administrator
                        $name = $x['username'];
                        $this->session->set_userdata('access','Administrator');
                        $this->session->set_userdata('id_pengguna',$id);
                        $this->session->set_userdata('name',$name);
                        redirect('Dashboard');

                    }else if($x['role_id']=='2'){ //Pengolah biasa
                        $name = $x['username'];
                        $this->session->set_userdata('access','User');
                        $this->session->set_userdata('id_user',$id);
                        $this->session->set_userdata('name',$name);
                        redirect('Dashboard');

                    }
                }else{
                    $url=base_url('login');
                    echo $this->session->set_flashdata('msg','<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
                    <h3>Uupps!</h3>
                    <p>Akun kamu telah di blokir. Silahkan hubungi admin.</p>');
                    redirect($url);
                }
            }else{
                $url=base_url('login');
                echo $this->session->set_flashdata('msg','<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
                    <h3>Uupps!</h3>
                    <p>Password yang kamu masukan salah.</p>');
                redirect($url);
            }

        }else{
            $url=base_url('login');
            echo $this->session->set_flashdata('msg','<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
            <h3>Uupps!</h3>
            <p>Username yang kamu masukan salah.</p>');
            redirect($url);
        }

    }

   public function logout(){
        $this->session->sess_destroy();
        $url=base_url('login');
        redirect($url);
    }

    public function register(){
        $this->load->view('View_register');

    }

    public function tambah_data_register() {
        
        $this->load->model('Login_model');

      
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        // $status_pengolahan = $this->input->post('status_pengolahan');
        // $role_id = $this->input->post('role_id');

       
        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => md5($password), // Hash the password
            'email' => $email,
            'status_pengolahan' => 1,
            'role_id' => 1,
        );
      
        if ($this->Login_model->insertData($data)) {
           
            redirect('Login'); 
        } else {
            echo "Failed to insert data";
        }
    }



    }



