<?php

class articles extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('articles_modele');
    }

    public function index() {
        $data['articles'] = $this->articles_modele->get_articles();
        $data['title'] = 'Liste des articles';
  


        $this->load->view('templates/header', $data);
        $this->load->view('articles/index', $data);
        $this->load->view('templates/footer');
    }


    public function view($slug) {


        if (empty($data['article']))
        {
                show_404();
        }

        $data['title'] = $data['article']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('articles/view', $data);
        $this->load->view('templates/footer');
}
}
