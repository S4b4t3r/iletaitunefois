<?php
class Notreassociation extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Notre association";
        $data['association'] = true;
        $this->load->view('Header_view', $data);
        $this->load->view('Notreassociation_view');
        $this->load->view('Footer_view');
    }
}
?>