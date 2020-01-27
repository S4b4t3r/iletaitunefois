<?php
class Bibliotheque extends CI_Controller {

    public function index()
    {
        redirect(base_url().'Bibliotheque/page/1');
    }

    public function page($n = 1)
    {
        $data['titre'] = "Il était une fois... - Bibliothèque";
        $data['bibliotheque'] = true;

        $keywords = (isset($_GET['k'])?$_GET['k']:'');
        $language = (isset($_GET['l'])?$_GET['l']:'');

        $this->load->model('Biblioteque_model');
        $data['all'] = $this->Biblioteque_model->getByKeywords(addslashes($keywords), $language, $n);

        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'Bibliotheque/page/';
        $config['total_rows'] =  count($this->Biblioteque_model->getByKeywordsAll(addslashes($keywords), $language));
        $config['per_page'] = 6;
        $config['use_page_numbers'] = TRUE;
        $config['first_link'] = '< 1';
        $config['last_link'] = ceil($config['total_rows']/6).' >';
        $config['suffix'] = "?k=$keywords&l=$language";

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('Header_view', $data);
        $this->load->view('Bibliotheque_view', $data);
        $this->load->view('Footer_view');
    }
}
?>