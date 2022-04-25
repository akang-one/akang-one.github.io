<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users069 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) redirect('auth069/login');
        if ($this->session->userdata('usertype') != 'Manager') redirect('welcome');
        $this->load->model('User069_model');
    }

    public function index()
    {
        $data['users'] = $this->User069_model->read();
        $data['side_active'] = "user";
        $data['header'] = 'Manage User';
        $this->load->view('templates/header', $data);
        $this->load->view('users/user_list', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        if ($this->input->post('submit')) {
            $this->User069_model->create();
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                User <strong>successfully</strong> added!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            User added <strong>failed!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            }
            redirect('users069');
        }
        $data['side_active'] = "user";
        $data['header'] = 'Manage User';
        $this->load->view('templates/header', $data);
        $this->load->view('users/user_form');
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        if ($this->input->post('submit')) {
            $this->User069_model->update($id);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                User updated <strong>successfully!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                User updated <strong>failed!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            }
            redirect('users069');
        }
        $data['user'] = $this->User069_model->read_by($id);
        $data['side_active'] = "user";
        $data['header'] = 'Manage User';
        $this->load->view('templates/header', $data);
        $this->load->view('users/user_form', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->User069_model->delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            User deleted <strong>successfully!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            User deleted <strong>failed!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        }
        redirect('users069');
    }

    public function resetpassword($id, $usertype)
    {

        $this->User069_model->resetpass($id, $usertype);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Reset password <strong>successfully!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Reset password <strong>failed!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        }
        redirect('users069');
    }
}
