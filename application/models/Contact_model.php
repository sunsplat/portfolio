<?php
class Contact_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }

        public function get_contact($slug = FALSE)
		{
	    	if ($slug === FALSE)
        	{
                $query = $this->db->get('contact');
                return $query->result_array();
        	}

	        $query = $this->db->get_where('contact', array('slug' => $slug));
	        return $query->row_array();
		}


		/** This new method takes care of inserting the news item into the
		 * database. The third line contains a new function, url_title(). 
		 * This function - provided by the URL helper - strips down the string
		 * you pass it, replacing all spaces by dashes (-) and makes sure 
		 * everything is in lowercase characters. This leaves you with a nice 
		 * slug, perfect for creating URIs.
		 */
		public function set_contact($message)
		{
		    $this->load->helper('url');

		    //$slug = url_title($this->input->post('name'), 'dash', TRUE);

		    // $data = array(
		    //     'name' => $this->input->post('name'),
		    //     'slug' => $slug,
		    //     'email' => $this->input->post('email'),
		    //     'message' => $this->input->post('message')
		    // );

		    $this->db->insert('contact', $message);
		}

}
