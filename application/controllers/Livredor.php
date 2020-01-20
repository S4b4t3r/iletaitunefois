<?php
class Livredor extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Livre d'or";
        $data['livredor'] = true;
        $this->load->view('Header_view', $data);
        $this->load->view('Livredor_view');
        $this->load->view('Footer_view');
    }
}
?>