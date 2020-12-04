<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->model('M_login', 'm_login');
    }


    public function index()
    {
        $this->load->view('main');
    }
}
        
    /* End of file  LoginController.php */
