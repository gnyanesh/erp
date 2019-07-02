<?php
class Retailer extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper("url");
    }
    public function index(){
        $this->load->view("header");
        $this->load->view("retailer_view");
         $this->load->view("Salesview");
         $this->load->view("footer");
    }
}
?>