<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cats069_model extends CI_Model
{

    public function create()
    {
        $data = array(
            'name_069' => $this->input->post('name_069'), //kiri = kolom di tabel , kanan = nama di form
            'type_069' => $this->input->post('type_069'),
            'gender_069' => $this->input->post('gender_069'),
            'age_069' => $this->input->post('age_069'),
            'price_069' => $this->input->post('price_069')
        );

        $this->db->insert('cats069', $data); //INSERT INTO cats069 VALUE $data
    }

    public function read_all()
    {
        $query = $this->db->get('cats069'); //SELECT * FROM cats069
        return $query->result(); // return as object
    }

    public function read($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name_069', $keyword);
            $this->db->or_like('type_069', $keyword);
        }
        $this->db->limit($limit, $start);
        $query = $this->db->get('cats069'); //SELECT * FROM cats069
        return $query->result(); // return as object
    }

    public function read_by($id)
    {
        $this->db->where('id_069', $id);
        $query = $this->db->get('cats069'); //SELECT * FROM cats069 WHERE id_069 = '$id'
        return $query->row(); // return as object
    }

    public function update($id)
    {
        $data = array(
            'name_069' => $this->input->post('name_069'), //kiri = kolom di tabel , kanan = nama di form
            'type_069' => $this->input->post('type_069'),
            'gender_069' => $this->input->post('gender_069'),
            'age_069' => $this->input->post('age_069'),
            'price_069' => $this->input->post('price_069')
        );
        $this->db->where('id_069', $id);
        $this->db->update('cats069', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_069', $id);
        $this->db->delete('cats069');
    }

    public function validation()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name_069', 'Cat name', 'required');
        $this->form_validation->set_rules('type_069', 'Cat type', 'required');
        $this->form_validation->set_rules('gender_069', 'Cat gender', 'required');
        $this->form_validation->set_rules('age_069', 'Cat age', 'required|numeric');
        $this->form_validation->set_rules('price_069', 'Cat price', 'required|numeric');

        if ($this->form_validation->run())
            return TRUE;
        else
            return FALSE;
    }

    public function sale($id)
    {
        $data = array(
            'customer_name_069' => $this->input->post('customer_name_069'), //kiri = kolom di tabel , kanan = nama di form
            'customer_address_069' => $this->input->post('customer_address_069'),
            'customer_phone_069' => $this->input->post('customer_phone_069'),
            'cat_id_069' => $id
        );

        $this->db->insert('catsales069', $data);

        $this->db->set('sold_069', '1');
        $this->db->where('id_069', $id);
        $this->db->update('cats069');
    }

    public function sales()
    {
        $this->db->select('*');
        $this->db->from('catsales069 as b');
        $this->db->join('cats069 as a ', 'b.cat_id_069 = a.id_069');
        $query = $this->db->get(); //SELECT * FROM cats069 JOIN catsales069 
        return $query->result(); // return as object
    }
}
