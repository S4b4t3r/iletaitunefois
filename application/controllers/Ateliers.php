<?php
class Ateliers extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Crèches";
        $this->load->view('Header_view', $data);
        $this->load->view('Ateliers_view');
        $this->load->view('Footer_view');
    }
}
?>