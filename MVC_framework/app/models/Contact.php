<?php

    class Contact {
        
        
        private $db;

        
        public function __construct() {
            $this->db = new Database;
        }
        
        
        //Test (database and table needs to exist before this works)
        
        public function getContacts() {
            
            $this->db->query ("SELECT * FROM contact_table");
            $result = $this->db->resultSet();
            return $result;
            
        }
        
        
        public function sendMessage ($data) {
            
            $this->db->query('INSERT INTO contact_table (contact_name, contact_email, contact_phone, contact_message) VALUES (:contact_name, :contact_email, :contact_phone, :contact_message)');

            $this->db->bind(':contact_name', $data['contact_name']);
            $this->db->bind(':contact_email', $data['contact_email']);
            $this->db->bind(':contact_phone', $data['contact_phone']);
            $this->db->bind(':contact_message', $data['contact_message']);

            if ($this->db->execute()) {
                return true;
            } 
            
            else {
                return false;
            }
            
        }
    
        
    }