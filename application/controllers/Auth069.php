<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth069 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth069_model');
    }

    public function login()
    {
        if ($this->input->post('login') && $this->validation('login')) {
            $login = $this->Auth069_model->getuser($this->input->post('username'));
            if ($login != NULL) {
                if (password_verify($this->input->post('password'), $login->password_069)) {
                    $data = array(
                        'username' => $login->username_069,
                        'usertype' => $login->usertype_069,
                        'fullname' => $login->fullname_069,
                        'photo' => $login->photo_069
                    );
                    $this->session->set_userdata($data);
                    redirect('welcome');
                }
            }
            $this->session->set_flashdata('msg', '<p style="color:red">Invalid username or password !!!</p>');
        }
        $this->load->view('auth069/form_login_069');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth069/login');
    }

    public function changepass()
    {
        if (!$this->session->userdata('username')) redirect('auth069/login');
        if ($this->input->post('change') && $this->validation('change')) {
            $change = $this->Auth069_model->getuser($this->session->userdata('username'));
            if (password_verify($this->input->post('oldpassword'), $change->password_069)) {
                if ($this->Auth069_model->changepass())
                    $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Password<strong>successfully</strong> changed!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                else
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password change <strong>failed!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Wrong</strong> old password!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            }
        }

        $data['side_active'] = "";
        $data['header'] = 'Change User';
        $this->load->view('templates/header', $data);
        $this->load->view('auth069/form_password_069');
        $this->load->view('templates/footer');
    }


    public function forgetpassword()
    {
        $this->load->model('User069_model');

        if ($this->input->post('reset') && $this->validation('reset')) {

            $reset = $this->Auth069_model->getuser($this->input->post('username'));
            if (isset($reset->username_069)) {
                if ($this->User069_model->resetpass($reset->userid_069, $reset->usertype_069))
                    $this->session->set_flashdata('msg', '<p style="color:green">Password successfully reset</p>');
                else
                    $this->session->set_flashdata('msg', '<p style="color:red">Reset password failed</p>');
            } else {
                $this->session->set_flashdata('msg', '<p style="color:red">Username not found</p>');
            }
        }

        $this->load->view('auth069/form_lupa_password_069');
    }

    public function changephoto()
    {
        if (!$this->session->userdata('username')) redirect('auth069/login');
        $data['error'] = '';
        if ($this->input->post('upload')) {
            if ($this->upload()) { //jika sukses upload
                $this->Auth069_model->changephoto($this->upload->data('file_name')); //ubah data poto di database
                $this->session->set_userdata('photo', $this->upload->data('file_name')); //update data session
                $this->session->set_flashdata('msg', '<p style="color:green">Photo successfully changed</p>'); //pesan sukses
            } else $data['error'] = $this->upload->display_errors(); //jika gagal upload
        }
        $data['side_active'] = "";
        $data['header'] = 'Change User';
        $this->load->view('templates/header', $data);
        $this->load->view('auth069/form_photo_069', $data);
        $this->load->view('templates/footer');
    }

    private function upload()
    {
        $config['upload_path'] = './uploads/users/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = 512;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);
        return $this->upload->do_upload('photo');
    }

    private function validation($type)
    {
        $this->load->library('form_validation');

        if ($type == 'login') {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
        } elseif ($type == 'change') {
            $this->form_validation->set_rules('oldpassword', 'Old Password', 'required');
            $this->form_validation->set_rules('newpassword', 'New Password', 'required');
        } else {
            $this->form_validation->set_rules('username', 'Username', 'required');
        }

        if ($this->form_validation->run())
            return TRUE;
        else
            return FALSE;
    }
}
