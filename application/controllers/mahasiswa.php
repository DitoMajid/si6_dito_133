<?php
defined ('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
    Public function index()
    {
        $data['nama'] = 'Dito Athallah Majid';
        $data['nim'] = '201401133';
        $data['kom'] = 'C';
        $this->load->view('mahasiswa_view',$data);
    }
}