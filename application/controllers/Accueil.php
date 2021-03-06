<?php
class Accueil extends CI_Controller {
	public function index()
	{
        $data['titre'] = "Il était une fois...";
        $data['accueil'] = true;

        $this->load->model('Biblioteque_model');
        $data['all'] = $this->Biblioteque_model->getLast();

        $this->load->view('Header_view', $data);
        $this->load->view('Accueil_view');
        $this->load->view('Footer_view');
    }

    public function en()
    {
        $data['titre'] = "Il était une fois...";
        $data['accueil'] = true;

        $this->load->model('Biblioteque_model');
        $data['all'] = $this->Biblioteque_model->getLast();

        $this->load->view('en/Header_view', $data);
        $this->load->view('en/Accueil_view');
        $this->load->view('Footer_view');
    }
}