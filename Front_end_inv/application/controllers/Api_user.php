<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_user extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
		$this->load->model('UserModel');
    }



	public function api_user1() {
		$this->output
			->set_header("Access-Control-Allow-Origin: http://localhost:3000")
			->set_header("Access-Control-Allow-Methods: GET, POST, OPTIONS")
			->set_header("Access-Control-Allow-Headers: Content-Type")
			->set_header("Access-Control-Max-Age: 3600")
			->set_header("Access-Control-Allow-Credentials: true")
			->set_header("Content-Type: application/json; charset=UTF-8");
		$query = $this->db->query('SELECT * FROM public."user_pengguna"')->result();
	//	$query = $this->db->query('select * from user_pengguna')->result();
		$data = [];
	
		foreach ($query as $row) { 
			$data[] = [
				"status" => "success",
				"id_user" => $row->id_user,
				"nama" => $row->nama,
				"username" => $row->username,
				"password" => $row->password,
				// Add more fields as needed
			];
		}
	
		header('Content-Type: application/json');
		echo json_encode(["Data_reklame" => $data]);
	}

	public function api_post() {
		
		// Set CORS headers
		$this->output
			->set_header("Access-Control-Allow-Origin: http://localhost:3000")
			->set_header("Access-Control-Allow-Methods: GET, POST, OPTIONS")
			->set_header("Access-Control-Allow-Headers: Content-Type")
			->set_header("Access-Control-Max-Age: 3600")
			->set_header("Access-Control-Allow-Credentials: true")
			->set_header("Content-Type: application/json; charset=UTF-8");
	
	//Mengirim atau menambah data kontak baru
	$body = json_decode($this->input->raw_input_stream, true);
    //$name = $body['nama'];
	$data = array(
		
		'nama'      => $body['nama'],
		'username'  => $body['username'],
		'password'  => $body['password'],
		'email'     => $body['email']
	);
	
	$insert = $this->db->insert('user_pengguna', $data);
	
	if ($insert) {
		// Send a success response
		$response = [
			'status' => 'success',
			'test' => $this->input->raw_input_stream,
			'test2' => $this->input->post(),
			'test3' => $body,
			'message' => 'Data inserted successfully'
		];
	} else {
		// Send an error response
		$response = [
			'status' => 'fail',
			'message' => 'Failed to insert data'
		];
	}
	
	// Set the response content type
	$this->output->set_content_type('application/json');
	
	// Send the JSON response
	$this->output->set_output(json_encode($response));
	
	
	}


	public function api_post2() {
		// Set CORS headers
		$this->output
			->set_header("Access-Control-Allow-Origin: http://localhost:3000")
			->set_header("Access-Control-Allow-Methods: GET, POST, OPTIONS")
			->set_header("Access-Control-Allow-Headers: Content-Type")
			->set_header("Access-Control-Max-Age: 3600")
			->set_header("Access-Control-Allow-Credentials: true")
			->set_header("Content-Type: application/json; charset=UTF-8");
	
		// Mengirim atau menambah data kontak baru
		$body = json_decode($this->input->raw_input_stream, true);
	
		// Check if the required fields exist
		if (isset($body['nama']) && isset($body['username']) && isset($body['password']) && isset($body['email'])) {
			$data = array(
				'nama' => $body['inama'],
				'username' => $body['username'],
				'password' => $body['password'],
				'email' => $body['email']
			);
	
			$insert = $this->db->insert('user_pengguna', $data);
	
			if ($insert) {
				// Send a success response
				$response = [
					'status' => 'success',
					'test' => $this->input->raw_input_stream,
					'test2' => $this->input->post(),
					'test3' => $body,
					'message' => 'Data inserted successfully'
				];
			} else {
				// Send an error response
				$response = [
					'status' => 'fail',
					'message' => 'Failed to insert data'
				];
			}
		} else {
			// Fields are missing in the JSON body
			$response = [
				'status' => 'fail',
				'message' => 'Required fields are missing'
			];
		}
	
		// Set the response content type
		$this->output->set_content_type('application/json');
	
		// Send the JSON response
		$this->output->set_output(json_encode($response));
	}

	public function api_post3($username) {
        $password = $this->input->post('password'); // Assuming you're using POST to send the password

        // Add your authentication logic here.
        // Check if the provided username and password are valid.

        // Example: Check in the database
        $user = $this->UserModel->validateUser($username, $password);

        if ($user && password_verify($password, $user->password)) {
            // Authentication successful
            $response = array(
                'username' => $user->username,
                'role' => $user->role
            );
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));
        } else {
            // Authentication failed
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(401) // Unauthorized status code
                ->set_output(json_encode(array('error' => 'Invalid username or password')));
        }
    }


}
