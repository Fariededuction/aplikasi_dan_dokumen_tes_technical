<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function validateUser($username, $password) {
        // Query the user database to validate the user
        $query = $this->db->get_where('user_pengguna', array('username' => $username,'password' =>$password));

        if ($query->num_rows() > 0) {
            $user = $query->row();

            // Validate the password (you should hash passwords securely)
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }

        return null; // User not found or invalid credentials
    }
}