<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['form']);
        $this->load->helper(['url']);
        
    }

    public function index()
    {
        //echo " Welcome to Gurudev worlds !";
       $this->load->view('admin_login');
		 // $this->load->view('admin_login');
	    // This My first contribution 
      
    }
}
?>
