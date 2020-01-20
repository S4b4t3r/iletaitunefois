<?php
class Programme extends CI_Controller{
    public function index()
    {
        $data['titre'] = "Il était une fois... - Programme du mois";
        $data['programme'] = true;
        $this->load->view('Header_view', $data);
        $this->load->view('Programme_view');
        $this->load->view('Footer_view');
    }
}
?>