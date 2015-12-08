<?php
class Pages_model extends CI_Model 
{

    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

    /** For retrieving portfolio elements from database.
		 *
		 * @since November 21, 2015
		 */
    public function get_portfolio($link = FALSE)
		{
	    	if ($link === FALSE) 
	    	{
	    		$query = $this->db->get('portfolio');
	    		return $query->result_array();
	    	}

	    	$query = $this->db->get_where('portfolio', array('link' => $link));
	    	return $query->row_array();
        
		}

		public function set_portfolio()
		{
			$link = url_title($this->input->post('link'));

			$data = array(
				'project_name' => $this->input->post('project_name'),
				'link' => $link,
				'source' => $this->input->post('source'),
				'image_url' => $img_url->input->post('image_url'),
				'thumbnail' => $this->input->post('thumbnail'),
				'technologies' => $this->input->post('technologies')
				);

			return $this->db->insert('portfolio', $data);
		}

		/** For saving the contact info into the database
		 *
		 * @since November 21, 2015
		 */
		public function set_contact($message)
		{

		    $this->db->insert('contact', $message);
		}

}
