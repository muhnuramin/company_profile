<?php

defined('BASEPATH') or die('No direct script access allowed!');



class M_galeri extends CI_Model

{

    private $table = 'tb_galeri';



    public function galeri($id = '')

    {

        $this->db->select('*')

            ->from($this->table);



        if ($id) {

            $this->db->where('id_galeri', $id);
        }



        return $this->db->get();
    }



    public function insert($data = array())

    {

        return $this->db->insert($this->table, $data);
    }



    public function delete($id)

    {

        $this->db->where('id_galeri', $id);

        return $this->db->delete($this->table);
    }



    public function update($id, $data = array())

    {

        $this->db->set($data);

        $this->db->where('id_galeri', $id);

        return $this->db->update($this->table);
    }
    public function getAllGalery()
    {
        $this->db->select('*');
        $this->db->from('tb_galeri');
        $this->db->join('tb_album', 'tb_album.id_album=tb_galeri.nama_album');
        $this->db->limit(3);
        $return = $this->db->get('');
        return $return->result();
    }
}
