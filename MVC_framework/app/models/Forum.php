<?php

    class Forum {
        
        
        private $db;

        
        public function __construct() {
            $this->db = new Database;
        }
        
        
        //Test (database and table needs to exist before this works)
        
        public function getForums() {
            
            $this->db->query ("SELECT * FROM forum_table");
            $result = $this->db->resultSet();
            return $result;
            
        }
        
        
        public function sendMessage ($data) {
            
            $this->db->query('INSERT INTO forum_table (forum_name, forum_message) VALUES (:forum_name, :forum_message)');
            
            $this->db->bind(':forum_name', $data['forum_name']);
            $this->db->bind(':forum_message', $data['forum_message']);

            if ($this->db->execute()) {
                return true;
            } 
            
            else {
                return false;
            }
            
        }
    
        
    }