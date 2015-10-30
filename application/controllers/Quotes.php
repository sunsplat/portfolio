<?php
class Quotes extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('quotes_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['quotes'] = $this->quotes_model->get_quotes();
                $data['title'] = 'Quotes';

                $this->load->view('templates/header', $data);
                $this->load->view('templates/snippets/modal.php', $data);
                $this->load->view('pages/quotes', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
                $data['quotes_item'] = $this->quotes_model->get_quotes($slug);

                if (empty($data['quotes_item']))
        {
                show_404();
        }

        $data['author'] = $data['quotes_item']['author'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/snippets/modal.php', $data);
        $this->load->view('quotes/index', $data);
        $this->load->view('templates/footer');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Submit a quote.';

            $this->form_validation->set_rules('author', 'Author', 'required');
            $this->form_validation->set_rules('quote', 'Quote', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('quotes/create');
                $this->load->view('templates/snippets/modal.php', $data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->quotes_model->set_quotes();
                $this->load->view('quotes/success');
            }
        }

        public function get_random_quote() 
        {
            $this->load->modal('quotes_model');
            $data['quotes'] = $this->quotes_model->get_quotes();
            
        }
}