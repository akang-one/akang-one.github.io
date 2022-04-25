<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User069_model extends CI_Model
{

    public function create()
    {

        $data = array(
            'username_069' => $this->input->post('username_069'), //kiri = kolom di tabel , kanan = nama di form
            'usertype_069' => $this->input->post('usertype_069'),
            'fullname_069' => $this->input->post('fullname_069'),
            'password_069' => password_hash($this->input->post('usertype_069'), PASSWORD_DEFAULT)
        );

        $this->db->insert('users069', $data); //INSERT INTO cats069 VALUE $data
    }

    public function read()
    {
        $query = $this->db->get('users069'); //SELECT * FROM cats069
        return $query->result(); // return as object
    }

    public function read_by($id)
    {
        $this->db->where('userid_069', $id);
        $query = $this->db->get('users069'); //SELECT * FROM cats069 WHERE id_069 = '$id'
        return $query->row(); // return as object
    }

    public function update($id)
    {
        $data = array(
            'username_069' => $this->input->post('username_069'), //kiri = kolom di tabel , kanan = nama di form
            'password_069' => $this->input->post('password_069'),
            'usertype_069' => $this->input->post('usertype_069'),
            'fullname_069' => $this->input->post('fullname_069')
        );
        $this->db->where('userid_069', $id);
        $this->db->update('users069', $data);
    }

    public function delete($id)
    {
        $this->db->where('userid_069', $id);
        $this->db->delete('users069');
    }

    public function resetpass($id, $usertype)
    {
        $this->db->set('password_069', password_hash($usertype, PASSWORD_DEFAULT));
        $this->db->where('userid_069', $id);
        return $this->db->update('users069');
    }
}
