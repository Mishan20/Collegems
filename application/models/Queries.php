<?php
    class Queries extends CI_Model{

        public function getRoles() {
            $roles = $this -> db -> get('tbl_roles');
            if($roles -> num_rows() > 0){
                return $roles -> result();
            }
            
        }
    }
    ?>