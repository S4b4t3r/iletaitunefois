<?php
class Languematernelle extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Langue Maternelle";
        $data['languematernelle'] = true;
        $this->load->view('Header_view', $data);
        $this->load->view('LangueMaternelle_view');
        $this->load->view('Footer_view');
    }
}
?>