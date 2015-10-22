<?php
class Quotes_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_quotes($slug = FALSE)
				{
        if ($slug === FALSE)
        {
                $query = $this->db->get('quotes');
                return $query->result_array();
        }

        $query = $this->db->get_where('quotes', array('slug' => $slug));
        return $query->row_array();
				}


				/** This new method takes care of inserting the quotes item into the
				 * database. The third line contains a new function, url_title(). 
				 * This function - provided by the URL helper - strips down the string
				 * you pass it, replacing all spaces by dashes (-) and makes sure 
				 * everything is in lowercase characters. This leaves you with a nice 
				 * slug, perfect for creating URIs.
				 */
				public function set_quotes()
				{
				    $this->load->helper('url');

				    $slug = url_title($this->input->post('author'), 'dash', TRUE);

				    $data = array(
				        'quote' => $this->input->post('quote'),
				        'slug' => $slug,
				        'author' => $this->input->post('author')
				    );

				    return $this->db->insert('quotes', $data);
				}
}
