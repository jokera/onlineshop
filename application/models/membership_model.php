<?php

class Membership_model extends CI_Model {

    function validate() {

        ///Validates the login credentials
       //  $this -> db -> select('username, password');
         //$this -> db -> from('membership');

        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('membership');
        if ($query->num_rows == 1){
            return true;
        }
    }

}