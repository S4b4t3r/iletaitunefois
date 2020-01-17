<?php
class Newsletter extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Newsletter";
        $this->load->view('Header_view', $data);
        $this->load->view('Newsletter_view');
        $this->load->view('Footer_view');
    }
}
?>