<?php
class Pages extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->load->model('contact_model');
        }

        public function view($page = 'home')
	{
                if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
                {
                        // Whoops, we don't have a page for that!
                        show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter


                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer', $data);

        }
        /** 
         * This create function was copied from Contact.php controller
         * 
         * @since Oct.17.2015
         */
        public function create() 
        {

                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('message', 'Message', 'required');
                var_dump($_POST);
                exit;
                if ($this->form_validation->run() == FALSE)
                {
                        echo validation_errors();
                }
                else
                {

                        $this->contact_model->set_contact();
                        $this->load->view('contact/success');
                }


        }

        public function update() {

        }

}
?>