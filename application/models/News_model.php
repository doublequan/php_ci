<?php
class News_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_news($id = -1)
	{
		if ($id === -1)
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('news', array('id' => $id));
		return $query->row_array();
	}

	public function set_news()
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'), 'dash', TRUE);

		//echo 'from set_new() : ';
		//echo $this->input->post('title');
		//echo urldecode($this->input->post('title'));

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);

		return $this->db->insert('news', $data);
	}

	public function del_news($id)
	{
		//to do
	}

}