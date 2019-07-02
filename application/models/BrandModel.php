<?php
class BrandModel extends CI_Model {

    public function addBrand($add_brand)
	{
		$this->db->insert("brand",$add_brand);
		if($this->db->affected_rows()>0) {
		    return true; 
		}else{
		return false; 

		}

    }

    public function viewBrands()
	{
			$this->db->select("*");
		   $this->db->from("brand");
		   $query = $this->db->get();        
		   return $query->result();	
	} 

}
?>



