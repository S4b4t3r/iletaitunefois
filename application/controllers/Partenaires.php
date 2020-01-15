<?php
class Partenaires extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Partenaires";
        $this->load->view('Header_view', $data);
        $this->load->view('Partenaires_view');
        $this->load->view('Footer_view');
    }
}
?>