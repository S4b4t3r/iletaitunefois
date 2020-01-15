<?php
class Reglement extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Règlement";
        $this->load->view('Header_view', $data);
        $this->load->view('Reglement_view');
        $this->load->view('Footer_view');
    }
}
?>