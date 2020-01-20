<?php
class Activites extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Activités";
        $data['activites'] = true;
        $this->load->view('Header_view', $data);
        $this->load->view('Activites_view');
        $this->load->view('Footer_view');
    }
}
?>