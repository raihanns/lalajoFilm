<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Auth extends CI_model
{
    public function login($email)
    {
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            // usernya ada
            return true;
        } else {
            return false;
        }
    }

    public function insertUser($data)
    {
        return $this->db->insert('user', $data);
    }
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function editUser($id)
    {
        $data = [
            'nama_depan' => $this->input->post('namadepan', true),
            'nama_belakang' => $this->input->post('namabelakang', true),
            'email' => $this->input->post('email', true),
            'password' => $this->input->post('password')
        ];
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function getUserById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('user')->row_array();
    }

    public function insertAppointment($data)
    {
        return $this->db->insert('appoitment', $data);
    }
}
