<?php
    class Users extends CI_Controller{
        public function create(){

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('users/create');
                $this->load->view('templates/footer');
            } else {
                $this->user_model->create_user();
                redirect('users');
            }

        }

        public function edit($username){
            if($this->form_validation->run() === FALSE){
                $data['user'] = $this->user_model->get_users($username);
                if (!$data['user']){
                    show_404();
                } else {
                    $this->load->view('templates/header');
                    $this->load->view('users/edit', $data);
                    $this->load->view('templates/footer');
                }
            } else {
                $this->user_model->edit_user();
                redirect('users');
            }
        }

        public function delete($username){
            $this->user_model->delete_user($username);
            redirect('users');
        }

        public function view_all(){
            $config['first_url'] = base_url().'users/page/1?'.$this->input->server('QUERY_STRING');
            $config['per_page'] = 5;
            $config['reuse_query_string'] = TRUE;
            $offset = 0;
            $page_number = $this->uri->segment(3);
            if($page_number > 1){
                $offset = ($page_number - 1) * $config['per_page'];
            }
            $sort = $this->input->get('sort');
            $sort_field = $this->input->get('sort_field');
            $search_term = $this->input->get('search_term');
            $search_field = $this->input->get('search_field');
            $data['users'] = $this->user_model->get_users(FALSE, $config['per_page'], $offset, $sort, $sort_field, $search_term, $search_field);
            $config['base_url'] = base_url('users/page/');
            $config['total_rows'] = $this->user_model->get_number_of_users();
            $config['use_page_numbers'] = TRUE;


            $this->pagination->initialize($config);

            $this->load->view('templates/header');
            $this->load->view('users/view_all', $data);
            $this->load->view('templates/footer');
        }

        public function view($username = NULL){
            $data['user'] = $this->user_model->get_users($username);
            if(empty($data['user'])){
                show_404();
            }

            $this->load->view('templates/header');
            $this->load->view('users/view', $data);
            $this->load->view('templates/footer');

        }

        public function is_unique_username_except_id(){
            $field_value = $this->input->post('username');
            $query = $this->db->get_where('users', array('username' => $field_value));
            if ($query->num_rows() == 0){
                return TRUE;
            } else{
                if ($this->input->post('id') == $query->row_array()['id']){
                    return TRUE;
                }
                $this->form_validation->set_message('is_unique_username_except_id', 'A megadott felhasználónév már használatban van!');
                return FALSE;
            }
        }

        public function is_unique_email_except_id(){
            $field_value = $this->input->post('email');
            $query = $this->db->get_where('users', array('email' => $field_value));
            if ($query->num_rows() == 0){
                return TRUE;
            } else{
                if ($this->input->post('id') == $query->row_array()['id']){
                    return TRUE;
                }
                $this->form_validation->set_message('is_unique_email_except_id', 'A megadott E-mail cím már használatban van!');
                return FALSE;
            }
        }
    }
