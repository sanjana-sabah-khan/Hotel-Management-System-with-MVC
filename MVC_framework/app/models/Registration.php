<?php

    class Registration {
        
        
        private $db;

        
        public function __construct() {
            $this->db = new Database;
        }
        
        
        public function Register ($data) {
            
            $this->db->query ('INSERT INTO admin (name, admin_email_id, admin_password) VALUES (:name, :admin_email, :admin_password)');

            $this->db->bind(':name', $data ['name']);
            $this->db->bind(':admin_email', $data ['admin_email_id']);
            $this->db->bind(':admin_password', $data ['admin_password']);

            if ( $this->db->execute() ) {
                return true;
            } 
            
            else {
                return false;
            }
            
        }
        
        
        public function emailAlreadyExists ($email) {
            
            $this->db->query ('SELECT * FROM admin WHERE admin_email_id = :email');

            $this->db->bind (':email', $email);

            $this->db->execute();
            
            //Check if email is already registered
            if ( $this->db->rowCount() > 0 ) {
                return true;
            } 
            
            else {
                return false;
            }
        
        }

        
    }