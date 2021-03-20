<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo_view extends CI_Controller {
    public function index(){
        $this->load->view('headerview');
        $this->load->view('contentview');
        $this->load->view('footerview');
    }
}

?>