<?php

class Beranda_m extends CI_Model
{
	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('tb_slider');
		$return = $this->db->where('id_slider', '1')->get();
		if ($return->num_rows() > 0) {
			return $return->result();
		} else {
			return false;
		}
	}
	public function getAll1()
	{
		$this->db->select('*');
		$this->db->from('tb_slider');
		$return = $this->db->where('id_slider !=', '1')->get();
		if ($return->num_rows() > 0) {
			return $return->result();
		} else {
			return false;
		}
	}

	public function getAll2()
	{
		return $this->db->get('tb_tentang');
	}
}
