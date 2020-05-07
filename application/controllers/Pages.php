<?php
class Pages extends CI_Controller{
    public function view($page_name = 'home'){
        if(!file_exists(APPPATH.'views/pages/'.$page_name.'.php')){
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('pages/'. $page_name);
        $this->load->view('templates/footer');
    }
}
