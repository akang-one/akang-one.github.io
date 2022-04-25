<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cats069 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) redirect('auth069/login');
        $this->load->model('Cats069_model');
        $this->load->model('Category069_model');
    }

    public function index()
    {
        $this->load->library('pagination');

        //ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $config['base_url'] = site_url('cats069/index');

        $this->db->like('name_069', $data['keyword']);
        $this->db->or_like('type_069', $data['keyword']);
        $this->db->from('cats069');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 6;

        $this->pagination->initialize($config);
        $limit = $config['per_page'];
        $start = $this->uri->segment(3) ? $this->uri->segment(3) : 0;



        $data['i'] = $start + 1;
        $data['cats'] = $this->Cats069_model->read($limit, $start, $data['keyword']);
        $data['side_active'] = "cat";
        $data['header'] = 'Cats List';
        $this->load->view('templates/header', $data);
        $this->load->view('cats/cat_list', $data);
        $this->load->view('templates/footer');
    }

    public function destroykeyword()
    {
        $this->session->unset_userdata('keyword');
        redirect('cats069');
    }

    public function add()
    {
        if ($this->input->post('submit')) {
            if ($this->Cats069_model->validation()) {
                $this->Cats069_model->create();
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Cat <strong>successfully</strong> added!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Cat added <strong>Failed!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                }
                redirect('cats069');
            }
        }
        $data['category'] = $this->Category069_model->read_all();
        $data['side_active'] = "cat";
        $data['header'] = 'Cats List';
        $this->load->view('templates/header', $data);
        $this->load->view('cats/cat_form', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        if ($this->input->post('submit')) {
            if ($this->Cats069_model->validation()) {
                $this->Cats069_model->update($id);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Cat updated <strong>successfully!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Cat updated <strong>failed!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                }
                redirect('cats069');
            }
        }
        $data['cat'] = $this->Cats069_model->read_by($id);
        $data['category'] = $this->Category069_model->read_all();
        $data['side_active'] = "cat";
        $data['header'] = 'Cats List';
        $this->load->view('templates/header', $data);
        $this->load->view('cats/cat_form', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->Cats069_model->delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Cat deleted <strong>successfully!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Cat deleted <strong>failed!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        }
        redirect('cats069');
    }

    public function sale($id)
    {
        if ($this->input->post('submit')) {
            $this->Cats069_model->sale($id);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Cat sales <strong>successfully!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Cat sales <strong>failed!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            }
            redirect('cats069');
        }
        $data['cat'] = $this->Cats069_model->read_by($id);
        $data['side_active'] = "sales";
        $data['header'] = 'Sales Report';
        $this->load->view('templates/header', $data);
        $this->load->view('cats/cat_sale_069', $data);
        $this->load->view('templates/footer');
    }

    public function sales()
    {
        if ($this->session->userdata('usertype') != 'Manager') redirect('welcome');


        $data['sales'] = $this->Cats069_model->sales();
        $data['side_active'] = "sales";
        $data['header'] = 'Sales Report';
        $this->load->view('templates/header', $data);
        $this->load->view('cats/sale_list_069', $data);
        $this->load->view('templates/footer');
    }
}
