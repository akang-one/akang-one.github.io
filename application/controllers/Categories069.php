<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories069 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) redirect('auth069/login');
        $this->load->model('Category069_model');
    }

    public function index()
    {
        $this->load->library('pagination');

        // config pagination
        $config['base_url'] = site_url('categories069/index');
        $config['total_rows'] = $this->db->count_all('category_069');
        $config['per_page'] = 5;



        //initialize pagination
        $this->pagination->initialize($config);
        $limit = $config['per_page'];
        $start = $this->uri->segment(3) ? $this->uri->segment(3) : 0;

        $data['i'] = $start + 1;
        $data['categories'] = $this->Category069_model->read($limit, $start);
        $data['side_active'] = "category";
        $data['header'] = 'Categories List';
        $this->load->view('templates/header', $data);
        $this->load->view('categories/list', $data);
        $this->load->view('templates/footer');
    }


    public function add()
    {
        if ($this->input->post('submit')) {
            $this->Category069_model->create();
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Categories <strong>successfully</strong> added!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Categories added <strong>Failed!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            }
            redirect('categories069');
        }

        $data['side_active'] = "category";
        $data['header'] = 'Categories List';
        $this->load->view('templates/header', $data);
        $this->load->view('categories/form');
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        if ($this->input->post('submit')) {
            $this->Category069_model->update($id);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Categories updated <strong>successfully!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Categories updated <strong>failed!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            }
            redirect('categories069');
        }
        $data['cate'] = $this->Category069_model->read_by($id);
        $data['side_active'] = "category";
        $data['header'] = 'Categories List';
        $this->load->view('templates/header', $data);
        $this->load->view('categories/form', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->Category069_model->delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Categories deleted <strong>successfully!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Categories deleted <strong>failed!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        }
        redirect('categories069');
    }
}
