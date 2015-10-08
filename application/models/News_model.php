<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_news($slug = FALSE)
				{
        if ($slug === FALSE)
        {
                $query = $this->db->get('news');
                return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
				}


				/** This new method takes care of inserting the news item into the
				 * database. The third line contains a new function, url_title(). 
				 * This function - provided by the URL helper - strips down the string
				 * you pass it, replacing all spaces by dashes (-) and makes sure 
				 * everything is in lowercase characters. This leaves you with a nice 
				 * slug, perfect for creating URIs.
				 */
				public function set_news()
				{
				    $this->load->helper('url');

				    $slug = url_title($this->input->post('title'), 'dash', TRUE);

				    $data = array(
				        'title' => $this->input->post('title'),
				        'slug' => $slug,
				        'text' => $this->input->post('text')
				    );

				    return $this->db->insert('news', $data);
				}
}
