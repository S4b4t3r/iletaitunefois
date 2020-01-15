<?php
class Creches extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Crèches";
        $this->load->view('Header_view', $data);
        $this->load->view('Creches_view');
        $this->load->view('Footer_view');
    }
}
?>