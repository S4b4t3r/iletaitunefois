<?php
class Accueil extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois...";
        $this->load->view('Header_view', $data);
        $this->load->view('Accueil_view');
        $this->load->view('Footer_view');
    }
}