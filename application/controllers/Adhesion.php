<?php
class Adhesion extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Adhésion";
        $data['adhesion'] = true;
        $this->load->view('Header_view', $data);
        $this->load->view('Adhesion_view');
        $this->load->view('Footer_view');
    }
}
?>