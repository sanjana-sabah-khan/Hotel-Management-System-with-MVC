<?php

    class View_user_detail {
        
        
        private $db;

        
        public function __construct() {
            $this->db = new Database;
        }
        
        
        //Test (database and table needs to exist before this works)
        
        public function getSingleRoomDetails() {
            
            $this->db->query ("SELECT * FROM single_bed_rooms WHERE status = 1;");
            $result = $this->db->resultSet();
            return $result;
            
        }
        
        
        public function getFamilyRoomDetails() {
            
            $this->db->query ("SELECT * FROM family_rooms WHERE status = 1;");
            $result = $this->db->resultSet();
            return $result;
            
        }
        
        
        public function getRestaurantDetails() {
            
            $this->db->query ("SELECT * FROM restaurants WHERE status = 1;");
            $result = $this->db->resultSet();
            return $result;
            
        }
    
        
    }