<?php
class Home extends CI_Controller {

        public function index()
		{
	        $data['title'] = 'Home'; // Capitalize the first letter

	        $this->load->view('templates/header', $data);
	        $this->load->view('home', $data);
	        $this->load->view('templates/footer', $data);
		}

		public function save() {
		
			$name = ($this->input->post('name'));
			$email = ($this->input->post('email'));
			$message = ($this->input->post('message'));

			$user = array (
				'Name' => $name,
				'Email' => $email,
				'Message' => $message
			);

			$userInfo = $this->home_model->addUser($user);
			$data['prompt'] = "";
			if($userInfo) {
				$data['prompt'] = "Message successfully sent!";
			}
			$query = $this->home_model->getUser();

			if($query) {
				$data['User'] = $query;
			}
			$this->load->view('home.php', $data);
		}

			

}
?>