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
                
                // var_dump($_POST['name']);
                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('message', 'Message', 'required');
                /* trim() will cut down preceding and trailing white spaces */
                
                //var_dump($this->input->post($message);

                if ($this->form_validation->run() == FALSE)
                {
                    echo validation_errors();
                } 
                else 
                {
                    $name = trim($this->input->post('name'));
                    $email = trim($this->input->post('email'));
                    $msg = trim($this->input->post('message'));

                    $cleanName = filter_var($name, FILTER_SANITIZE_STRING);
                    $cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
                    $cleanMsg = filter_var($msg, FILTER_SANITIZE_STRING);

                    $message = array(
                            'name'    => $cleanName,
                            'email'   => $cleanEmail,
                            'message' => $cleanMsg
                    );

                    $this->contact_model->set_contact($message);

                }

                //         $this->contact_model->set_contact();
                //         $this->load->view('contact/success');
                // }
                // $this->contact_model->set_contact();
                //         $this->load->view('contact/success');

        }

}
?>