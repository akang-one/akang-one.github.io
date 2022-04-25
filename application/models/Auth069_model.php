<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth069_model extends CI_Model
{
    public function getuser($username)
    {
        $this->db->where('username_069', $username);
        return $this->db->get('users069')->row();
    }

    public function changepass()
    {
        $this->db->set('password_069', password_hash($this->input->post('newpassword'), PASSWORD_DEFAULT));
        $this->db->where('username_069', $this->session->userdata('username'));
        return $this->db->update('users069');
    }

    public function changephoto($photo)
    {
        if ($this->session->userdata('photo') !== 'default.png')
            unlink('./uploads/users/' . $this->session->userdata('photo')); //menghapus photo yang lama

        $this->db->set('photo_069', $photo);
        $this->db->where('username_069', $this->session->userdata('username'));
        return $this->db->update('users069');
    }
}
