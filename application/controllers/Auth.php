<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    // go to login pages 
    public function login()
    {
        $this->load->view('template/auth/header.php');
        $this->load->view('auth/login.php');
        $this->load->view('template/auth/footer.php');
    }

    // go to register pages
    public function register()
    {
        $this->load->view('template/auth/header.php');
        $this->load->view('auth/register.php');
        $this->load->view('template/auth/footer.php');
    }

    // go to register pages
    public function check_register(){
        
    }

    // check login
    public function check_login()
    {

    }


}
