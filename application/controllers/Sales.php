<?php
class Sales extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper("url");
    }
    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
         $this->load->view("Salesview");
         //$this->load->view("footer");
    }
}
?>