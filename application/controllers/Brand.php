<?php
class Brand extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url","security"));
        $this->load->library(array("session","form_validation"));
        $this->load->model("BrandModel");
		$this->load->database();
        
    }
    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['brands']=$this->BrandModel->viewBrands();
        $this->load->view("Brand/Brandview",$data);
        $this->load->view("footer");
    }

    public function addBrand(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->form_validation->set_rules("brand_Name","Brand Name","required|trim");

        if($this->form_validation->run()==true){
            $add_brand=array(
				"brand_Name"=>$this->input->post("brand_Name"),
			);
			
			$add_brand=xss_clean($add_brand);
			$status=$this->BrandModel->addBrand($add_brand);			
				if($status==true)
				{
						$this->session->set_tempdata("add_success","Brand Added Successfully",2);
						redirect(base_url()."Brand/addBrand");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Brand",2);
						redirect(base_url()."Brand/addBrand");
				}
        }else {
            $this->load->view("Brand/addbrandView");
        }
        
        $this->load->view("footer");
    }

    function brandExist(){
        $brand_Name=$this->input->post("brand_Name");
		$result=$this->db->query("select * from brand where brand_Name='$brand_Name'");
		if($result->num_rows()>0)
		{
			echo json_encode("Brand Name Already entered"); 
		}
		else
		{
			echo "true"; 
		}
    }
}
?>