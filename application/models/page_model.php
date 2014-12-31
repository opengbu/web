<?php
class Page_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        public function get_page($pagename = FALSE)
        {
	if ($pagename === FALSE)
	{
		$query = $this->db->get('pagedata');
		return $query->result_array();
	}

	$query = $this->db->get_where('pagedata', array('id' => $pagename));
	return $query->row_array();
        }
}