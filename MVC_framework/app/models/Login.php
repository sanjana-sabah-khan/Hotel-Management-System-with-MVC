<?php

    class Login {
        
        
        private $db;

        
        public function __construct() {
            $this->db = new Database;
        }
        
        
        //Test (database and table needs to exist before this works)
        
        public function getLogins ($email_id, $password) {
            
            $this->db->query ("SELECT * FROM admin WHERE admin_email_id = :email_id");
            
            $this->db->bind (':email_id', $email_id);
            $row = $this->db->single();

            $getPassword = $row->admin_password;

            if ( $password == $getPassword ) {
                return $row;
            } 
            
            else {
                return false;
            }
            
        }
    
        
    }
            
