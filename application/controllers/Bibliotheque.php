<?php
class Bibliotheque extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Bibliothèque";
        $this->load->view('Header_view', $data);
        $this->load->view('Bibliotheque_view');
        $this->load->view('Footer_view');
    }
}
?>