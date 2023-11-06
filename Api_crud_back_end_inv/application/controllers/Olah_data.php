<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olah_data extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the model (e.g., Products_model) for database operations
        $this->load->model('Produk_model');
    }

	public function index()
	{
		$this->load->view('View_olah_data');
	}

    public function createProduct() {
        $this->output
            ->set_header("Access-Control-Allow-Origin: http://localhost:3000")
            ->set_header("Access-Control-Allow-Methods: GET, POST, OPTIONS")
            ->set_header("Access-Control-Allow-Headers: Content-Type")
            ->set_header("Access-Control-Max-Age: 3600")
            ->set_header("Access-Control-Allow-Credentials: true")
            ->set_header("Content-Type: application/json; charset=UTF-8");
    
       
        $body = json_decode($this->input->raw_input_stream, true);
    
        
        $username = $this->session->userdata('name');
        $id_akun_input = $this->session->userdata('id_pengguna');
      
        $ip_entry = $this->input->ip_address();
    
        $data = array(
            'nama_barang' => $body['nama_barang'],
            'jumlah_barang' => $body['jumlah_barang'],
            'jenis_barang' => $body['jenis_barang'],
            'harga_barang' => $body['harga_barang'],
            'user_entry' => $username,
            'ip_entry' => $ip_entry,
            'id_akun_input' => $id_akun_input,
        );
    
        
        $result = $this->Produk_model->createProduct($data);
    
        if ($result) {
           
            $response = [
                'status' => 'success',
                'message' => 'Data inserted successfully'
            ];
        } else {
           
            $response = [
                'status' => 'fail',
                'message' => 'Failed to insert data'
            ];
        }
    
        $this->output->set_content_type('application/json');
    
        // Send the JSON response
        $this->output->set_output(json_encode($response));
    }

    
    public function readProducts() {
        // Fetch all products from the database
        $products = $this->Produk_model->getAllProducts();
    
        // Return a response (e.g., JSON)
        $this->output->set_output(json_encode($products));
    }
    
    public function updateProduct($id) {
        $this->output
            ->set_header("Access-Control-Allow-Origin: http://localhost:3000")
            ->set_header("Access-Control-Allow-Methods: PUT, OPTIONS")
            ->set_header("Access-Control-Allow-Headers: Content-Type")
            ->set_header("Access-Control-Max-Age: 3600")
            ->set_header("Access-Control-Allow-Credentials: true")
            ->set_header("Content-Type: application/json; charset=UTF-8");
    
        // Mengambil data yang dikirimkan dalam format JSON
        $body1 = json_decode($this->input->raw_input_stream, true);
    
        // Data to update
        $data = array(
            'nama_barang' => $body1['nama_barang'],
            'jumlah_barang' => $body1['jumlah_barang'],
            'jenis_barang' => $body1['jenis_barang'],
            'harga_barang' => $body1['harga_barang'],
        );
    
        // Call the updateProduct method from the model
        $result = $this->Produk_model->updateProduct($id, $data);
    
        if ($result) {
            // Send a success response
            $response = [
                'status' => 'success',
                'test' => $this->input->raw_input_stream,
                'test2' => $this->input->post(),
                'test3' => $body1,
                'message' => 'Data update successfully'
            ];
        } else {
            // Send an error response
            $response = [
                'status' => 'fail',
                'message' => 'Failed to update data'
            ];
        }

        $this->output->set_content_type('application/json');
	
        // Send the JSON response
        $this->output->set_output(json_encode($response));
    }
    
    public function deleteProduct($id) {
        $this->output
        ->set_header("Access-Control-Allow-Origin: http://localhost:3000")
        ->set_header("Access-Control-Allow-Methods: PUT, OPTIONS")
        ->set_header("Access-Control-Allow-Headers: Content-Type")
        ->set_header("Access-Control-Max-Age: 3600")
        ->set_header("Access-Control-Allow-Credentials: true")
        ->set_header("Content-Type: application/json; charset=UTF-8");
        // Delete the product from the database
        $result = $this->Produk_model->deleteProduct($id);
    
        // Return a response (e.g., JSON)
        $this->output->set_output(json_encode($result));
    }
}
