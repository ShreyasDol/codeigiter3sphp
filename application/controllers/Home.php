<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->model('blog_m', 'm');

    }

    public function index()
    {
        $data['blogs'] = $this->m->getBlog();
        $this->load->view('home/header');
        $this->load->view('home/index', $data);
        $this->load->view('home/footer');
    }

    public function submit()
    {
        $result = $this->m->submit();

    }


    public function delete($id)
    {
        $result = $this->m->delete($id);

    }

    public function edit($id){
        $data['home'] = $this->m->getBlogById($id);
        $this->load->view('home/header');
        $this->load->view('home/edit', $data);
        $this->load->view('home/footer');
    }
    public  function  update(){
        $result = $this->m->update();
        redirect(base_url('home/index'));
    }
}




