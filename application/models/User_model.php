<?php
    class User_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_users($username = FALSE, $limit = 0, $offset = 0, $sort = '', $sort_field = '', $search_term = '', $search_field = ''){
            if($username === FALSE){
                if ($sort != '' and $sort_field != ''){
                    $this->db->order_by($sort_field.' '.$sort);
                }
                if ($search_field != '' and $search_term != ''){
                    $this->db->like($search_field, $search_term);
                }

                $query = $this->db->get('users', $limit, $offset);
                return $query->result_array();
            }

            $query = $this->db->get_where('users', array('username' => $username));
            return $query->row_array();
        }

        public function get_number_of_users(){
            return $this->db->count_all('users');
        }

        public function create_user(){
            $data = array(
                'username' => $this->input->post('username'),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'introduction' => $this->input->post('introduction'),
            );

            return $this->db->insert('users', $data);
        }

        public function edit_user(){
            $data = array(
                'username' => $this->input->post('username'),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'introduction' => $this->input->post('introduction'),
            );
            $this->db->set($data);
            $this->db->where('id', $this->input->post('id'));
            return $this->db->update('users', $data);
        }

        public function delete_user($username){
            return $this->db->delete('users', array('username' => $username));
        }
    }
