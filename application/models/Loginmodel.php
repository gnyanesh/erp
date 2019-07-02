<?php
class Loginmodel extends CI_Model
{
	private  $sid;

    public function __construct() {

     parent::__construct();

        $this->sid=$this->session->userdata('id');

    }

    

    public function getLoggedInUserData()

    {   

        $result=$this->db->query("select *from admin where id=$this->sid");

        return $result->row_object();

    }

	

	

	public function checkData($uname)

	{

		$result=$this->db->query("select * from users where username='$uname'");

		

		if($result->num_rows()>0)

		{

			return $result->row_object();

		}

		else

		{

			return false; 

		}

	}

	

	public function updatePassword($npwd)

    {

       

        $this->db->query("update admin set password='$npwd' where id=$this->sid");

        if($this->db->affected_rows()>0)

        {

            return true;

        }

        else

        {

            return false;

        }

    }
}
?>