<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

    public function __construct()
	{
		parent::__construct();
		$this->load->database();

		
		
		$this->spd_db = $this->load->database('default',TRUE);
	}

    public function createProduct($data) {
        $this->db->set($data);
        // Insert the new product into the database
        $this->db->insert('inventory', $data);

        // Check if the insertion was successful
        if ($this->db->affected_rows() > 0) {
            return ['message' => 'Product created successfully'];
        } else {
            return ['error' => 'Failed to create the product'];
        }
    }

    public function getAllProducts() {
        // Fetch all products from the database
        $query = $this->db->get('inventory');
        return $query->result_array();
    }

    public function updateProduct($id, $data) {
        $this->db->set($data);
        // Update the product in the database
        $this->db->where('id_barang', $id);
        $this->db->update('inventory', $data);

        // Check if the update was successful
        if ($this->db->affected_rows() > 0) {
            return ['message' => 'Product updated successfully'];
        } else {
            return ['error' => 'Failed to update the product'];
        }
    }

    public function deleteProduct($id) {
        // Delete the product from the database
        $this->db->where('id_barang', $id);
        $this->db->delete('inventory');

        // Check if the deletion was successful
        if ($this->db->affected_rows() > 0) {
            return ['message' => 'Product deleted successfully'];
        } else {
            return ['error' => 'Failed to delete the product'];
        }
    }

    public function count_all()
	{
		$this->spd_db->from('inventory');
		return $this->spd_db->count_all_results();
	}
}