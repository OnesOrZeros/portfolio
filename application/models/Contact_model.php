<?php
    class Contact_model extends CI_Model{
        public function _construct(){
            $this->load->database();
        }

        public function add_contact(){
    
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message')
                
            );
    
            return $this->db->insert('contact', $data);
        }
    
    }