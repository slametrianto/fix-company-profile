<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {

        $data['title'] = 'PT.Payung Anak Bangsa';

        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('user/about');
        $this->load->view('user/clients');
        $this->load->view('user/services');
        $this->load->view('user/portfolio');
        $this->load->view('user/index');
        $this->load->view('user/contact');
        $this->load->view('templates/footer');
    }
}
