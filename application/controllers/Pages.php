<?php
class Pages extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pages_model');
                $this->load->helper('form');
                $this->load->library('form_validation');
        }

        public function view($page = 'home')
	   {
                if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
                {
                        show_404();
                }

                $data['title'] = 'Ellen Sun | ' . ucfirst($page); // Capitalize the first letter

                $this->load->view('templates/header', $data);
                $this->load->view('templates/snippets/modal.php', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer', $data);

        }
        /** 
         * For saving name, email, and message input from contact form modal.
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
                    $this->view();
                    echo '<script type="text/javascript"> alert('. validation_errors() .'); </script>';
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

                    $this->pages_model->set_contact($message);

                    //$this->session->set_flashdata('msg', 'Message sent.');
                    redirect('pages/view');
                }
        }

        public function portfolio()
        {
        
            $this->load->model('pages_model');
            $data['portfolio'] = $this->pages_model->get_portfolio();
            $data['title'] = 'Portfolio';

            $this->load->view('templates/header', $data);
            $this->load->view('pages/portfolio', $data);
            $this->load->view('templates/snippets/thumbnails.php', $data);
            $this->load->view('templates/footer'); 
        }

}
?>