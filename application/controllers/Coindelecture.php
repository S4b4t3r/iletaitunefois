<?php
class Coindelecture extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois... - Coin de lecture";
        $this->load->view('Header_view', $data);
        $this->load->view('Coindelecture_view');
        $this->load->view('Footer_view');
    }
}
?>