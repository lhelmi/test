<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ali extends CI_Controller
{

    public function index()
    {
        $this->load->view('welcome_message');
    }
}
