<?php
class Stock extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper("url");
    }

    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("Stockview");
       // $this->load->view("footer");
    }

    // public function Brand(){
    //     $this->load->view("header");
    //     $this->load->view("tabheader");
    //     $this->load->view("Stock/Brand/Brandview");
    //     $this->load->view("footer");
    // }

    public function Category(){
        se$this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("Stock/Category/Categoryview");
        $this->load->view("footer");
    }
}
?>