<?php
defined ('BASEPATH') OR exit('No direct script access allowed');
class HelloWorld extends CI_Controller {
    Public function index()
    {
        $this->load->view('hello_world');
    }
}