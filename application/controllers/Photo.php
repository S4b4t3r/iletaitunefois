<?php
class Photo extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Galerie photo";
        $this->load->view('Header_view', $data);
        $this->load->view('Photo_view');
        $this->load->view('Footer_view');
    }
}
?>