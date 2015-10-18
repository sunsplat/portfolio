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
                var_dump($_POST);
                var_dump($_POST['name']);

                $name = $_POST['name'];
                $email = $_POST['email'];
                $mg = $_POST['msg'];

                $cleanName = filter_var(FILTER_SANITIZE_STRING, $name);
                $cleanEmail = filter_var(FILTER_SANITIZE_EMAIL, $email);
                $cleanMsg = filter_var(FILTER_SANITIZE_STRING, $msg);

                $message - array(
                        'name'    => $cleanMsg,
                        'email'   => $cleanEmail,
                        'message' => $cleanMsg
                );

                $this->contact_model->set_contact($message);

                // $this->form_validation->set_rules('name', 'Name', 'required');
                // $this->form_validation->set_rules('email', 'Email', 'required');
                // $this->form_validation->set_rules('message', 'Message', 'required');

                // if ($this->form_validation->run() == FALSE)
                // {
                //         echo validation_errors();
                // }
                // else
                // {

                //         $this->contact_model->set_contact();
                //         $this->load->view('contact/success');
                // }
                // $this->contact_model->set_contact();
                //         $this->load->view('contact/success');

        }

}
?>