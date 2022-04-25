<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category069_model extends CI_Model
{

    public function create()
    {
        $data = array(
            'category_name_069' => $this->input->post('c_name_069'), //kiri = kolom di tabel , kanan = nama di form
            'category_description_069' => $this->input->post('descrip_069')
        );

        $this->db->insert('category_069', $data); //INSERT INTO cats069 VALUE $data
    }

    public function read($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get('category_069'); //SELECT * FROM cats069
        return $query->result(); // return as object
    }

    public function read_all()
    {
        $query = $this->db->get('category_069'); //SELECT * FROM cats069
        return $query->result(); // return as object
    }

    public function read_by($id)
    {
        $this->db->where('category_id_069', $id);
        $query = $this->db->get('category_069'); //SELECT * FROM cats069 WHERE id_069 = '$id'
        return $query->row(); // return as object
    }

    public function update($id)
    {
        $data = array(
            'category_name_069' => $this->input->post('c_name_069'), //kiri = kolom di tabel , kanan = nama di form
            'category_description_069' => $this->input->post('descrip_069')
        );
        $this->db->where('category_id_069', $id);
        $this->db->update('category_069', $data);
    }

    public function delete($id)
    {
        $this->db->where('category_id_069', $id);
        $this->db->delete('category_069');
    }
}
