<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_Auth');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Terlogout Otomatis Karena Sudah Login Sebelumnya</div>');
            redirect('auth');
        } else {
            $this->form_validation->set_rules('username', 'Username', 'required|trim');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = 'Manager Login';
                $this->load->view('auth/login', $data);
            } else {
                $this->_login();
            }
        }
    }


    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $found = $this->M_Auth->login($username, $password);
        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($found) {
            if ($user['password'] == $password) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('manager');
                } else {
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth');
            }
        } else {
            // usernya ga ada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak ada. Silahkan register</div>');
            redirect('auth');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout berhasil!</div>');
        redirect('auth');
    }
}
