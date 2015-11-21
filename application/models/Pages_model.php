<?php
class Pages_model extends CI_Model 
{

    public function __construct()
    {
        $this->load->database();
    }

    /** For retrieving portfolio elements from database.
		 *
		 * @since November 21, 2015
		 */
    public function get_portfolio($slug = FALSE)
		{
	    	if ($slug === FALSE)
        	{
                $query = $this->db->get('portfolio');
                return $query->result_array();
        	}

	        $query = $this->db->get_where('portfolio', array('slug' => $slug));
	        return $query->row_array();
		}


		/** For saving the contact info into the database
		 *
		 * @since November 21, 2015
		 */
		public function set_contact($message)
		{
		    $this->load->helper('url');

		    $this->db->insert('contact', $message);
		}

}
