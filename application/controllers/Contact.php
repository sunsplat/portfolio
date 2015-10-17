<?php
class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['contact'] = $this->contact_model->get_contact();
        $data['title'] = 'Contact archive';

        $this->load->view('templates/header', $data);
        $this->load->view('contact/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL)
    {
        $data['contact_item'] = $this->contact_model->get_contact($slug);

        if (empty($data['contact_item']))
        {
            show_404();
        }

        $data['title'] = $data['contact_item']['name'];

        $this->load->view('templates/header', $data);
        $this->load->view('contact/view', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {   
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Add your contact info';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('contact/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->contact_model->set_contact();
            $this->load->view('contact/success');
        }
    }


}