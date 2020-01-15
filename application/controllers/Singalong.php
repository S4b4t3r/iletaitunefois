<?php
class Singalong extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Crèches";
        $this->load->view('Header_view', $data);
        $this->load->view('singalong_view');
        $this->load->view('Footer_view');
    }
}
?>