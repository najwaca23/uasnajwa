<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_user extends MY_Controller {
    public function index() {
        if ($this->session->userdata('role') != 'user') {
            redirect('auth/login');
        }

        $data['content'] = '<h1 class="center-welcome-text">SELAMAT DATANG <BR> DI HALAMAN PASIEN</h1>';
        $this->load->view('templates/header');
        $this->load->view('dashboard_user', $data); // tetap tampilkan view dashboard_user
        $this->load->view('templates/footer');
    }

}
