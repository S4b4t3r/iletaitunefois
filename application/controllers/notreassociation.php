<?php
class notreassociation extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Notre association";
        $data['association'] = true;
        $this->load->view('Header_view', $data);
        $this->load->view('notreassociation_view');
        $this->load->view('Footer_view');
    }
}
?>