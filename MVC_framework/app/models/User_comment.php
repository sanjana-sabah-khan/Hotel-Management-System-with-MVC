<?php

    class User_comment {
        
        
        private $db;

        
        public function __construct() {
            $this->db = new Database;
        }
        
        
        //Test (database and table needs to exist before this works)
        
        public function getForumDetails() {
            
            $this->db->query ("SELECT * FROM forum_table;");
            $result = $this->db->resultSet();
            return $result;
            
        }
        
        
        public function getContactDetails() {
            
            $this->db->query ("SELECT * FROM contact_table;");
            $result = $this->db->resultSet();
            return $result;
            
        }
    
        
        public function reply ($data, $num) {
            
            $this->db->query('UPDATE forum_table SET forum_admin_reply= :forum_admin_reply WHERE sl_no= :num');

            $this->db->bind(':forum_admin_reply', $data['forum_admin_reply']);
            $this->db->bind(':num', $num);
            
            if ($this->db->execute()) {
                return true;
            } 
            
            else {
                return false;
            }
            
        }
        
        
        public function deleteReply ($num) {
            
            $this->db->query('UPDATE forum_table SET forum_admin_reply= null WHERE sl_no= :num');

            $this->db->bind(':num', $num);
            
            if ($this->db->execute()) {
                return true;
            } 
            
            else {
                return false;
            }
            
        }
        
        
        public function delete ($num) {
            
            $this->db->query('DELETE FROM forum_table WHERE sl_no= :num;
                              SET @autoid :=0;
                              UPDATE forum_table SET sl_no = @autoid := (@autoid+1);
                              ALTER TABLE forum_table AUTO_INCREMENT = 1;');

            $this->db->bind(':num', $num);
            
            if ($this->db->execute()) {
                return true;
            } 
            
            else {
                return false;
            }
            
        }
        
        
        public function contactDelete ($num) {
            
            $this->db->query('DELETE FROM contact_table WHERE sl_no= :num;
                              SET @autoid :=0;
                              UPDATE contact_table SET sl_no = @autoid := (@autoid+1);
                              ALTER TABLE contact_table AUTO_INCREMENT = 1;');

            $this->db->bind(':num', $num);
            
            if ($this->db->execute()) {
                return true;
            } 
            
            else {
                return false;
            }
            
        }
        
        
    }