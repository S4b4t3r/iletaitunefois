<?php
class Aide extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Aide";
        $this->load->view('Header_view', $data);
        $this->load->view('Aide_view');
        $this->load->view('Footer_view');
    }
}
?>