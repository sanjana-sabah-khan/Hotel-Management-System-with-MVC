<?php

    class Handle_room {
        
        
        private $db;

        
        public function __construct() {
            $this->db = new Database;
        }
        
        
        //Test (database and table needs to exist before this works)
        
        public function getSingleBedRooms() {
            
            $this->db->query ("SELECT * FROM single_bed_rooms");
            $result = $this->db->resultSet();
            return $result;
            
        }
        
        
        public function getFamilyRooms() {
            
            $this->db->query ("SELECT * FROM family_rooms");
            $result = $this->db->resultSet();
            return $result;
            
        }
        
        
        public function getRestaurants() {
            
            $this->db->query ("SELECT * FROM restaurants");
            $result = $this->db->resultSet();
            return $result;
            
        }
        
        
        public function reserveSingleBedRoom ($data) {
            
            $this->db->query('UPDATE single_bed_rooms SET room_category= :room_category, first_name= :first_name, last_name= :last_name, email_address= :email_address, gender= :gender, contact_num= :contact_num, guest_num= :guest_num, check_in= :check_in, check_out= :check_out, status= 1 WHERE room_num= :room_num');

            $this->db->bind(':room_num', $data['room_num']);
            $this->db->bind(':room_category', $data['room_category']);
            $this->db->bind(':first_name', $data['first_name']);
            $this->db->bind(':last_name', $data['last_name']);
            $this->db->bind(':email_address', $data['email_address']);
            $this->db->bind(':gender', $data['gender']);
            $this->db->bind(':contact_num', $data['contact_num']);
            $this->db->bind(':guest_num', $data['guest_num']);
            $this->db->bind(':check_in', $data['check_in']);
            $this->db->bind(':check_out', $data['check_out']);

            if ($this->db->execute()) {
                return true;
            } 
            
            else {
                return false;
            }
            
        }
        
        
        public function reserveFamilyRoom ($data) {
            
            $this->db->query('UPDATE family_rooms SET room_category= :room_category, first_name= :first_name, last_name= :last_name, email_address= :email_address, gender= :gender, contact_num= :contact_num, guest_num= :guest_num, check_in= :check_in, check_out= :check_out, status= 1 WHERE room_num= :room_num');

            $this->db->bind(':room_num', $data['room_num']);
            $this->db->bind(':room_category', $data['room_category']);
            $this->db->bind(':first_name', $data['first_name']);
            $this->db->bind(':last_name', $data['last_name']);
            $this->db->bind(':email_address', $data['email_address']);
            $this->db->bind(':gender', $data['gender']);
            $this->db->bind(':contact_num', $data['contact_num']);
            $this->db->bind(':guest_num', $data['guest_num']);
            $this->db->bind(':check_in', $data['check_in']);
            $this->db->bind(':check_out', $data['check_out']);

            if ($this->db->execute()) {
                return true;
            } 
            
            else {
                return false;
            }
            
        }
        
        
        public function reserveRestaurant ($data) {
            
            $this->db->query('INSERT INTO restaurants (res_name, first_name, last_name, email_address, gender, contact_num, guest_num, check_in, check_out, status) VALUES (:res_name, :first_name, :last_name, :email_address, :gender, :contact_num, :guest_num, :check_in, :check_out, 1)');

            $this->db->bind(':res_name', $data['res_name']);
            $this->db->bind(':first_name', $data['first_name']);
            $this->db->bind(':last_name', $data['last_name']);
            $this->db->bind(':email_address', $data['email_address']);
            $this->db->bind(':gender', $data['gender']);
            $this->db->bind(':contact_num', $data['contact_num']);
            $this->db->bind(':guest_num', $data['guest_num']);
            $this->db->bind(':check_in', $data['check_in']);
            $this->db->bind(':check_out', $data['check_out']);

            if ($this->db->execute()) {
                return true;
            } 
            
            else {
                return false;
            }
            
        }
        
        
        public function unbookRoom ($room_num, $room_type) {
            
            if ($room_type == 'SingleBedRoom') {
            
                $this->db->query('UPDATE single_bed_rooms SET room_category= null, first_name= null, last_name= null, email_address= null, gender= null, contact_num= null, guest_num= 0, check_in= null, check_out= null, status= 0 WHERE room_num= :room_num');

                $this->db->bind(':room_num', $room_num);

                if ($this->db->execute()) {
                    return true;
                } 

                else {
                    return false;
                }
                
            }
            
            else if ($room_type == 'FamilyRoom') {
                
                $this->db->query('UPDATE family_rooms SET room_category= null, first_name= null, last_name= null, email_address= null, gender= null, contact_num= null, guest_num= 0, check_in= null, check_out= null, status= 0 WHERE room_num= :room_num');

                $this->db->bind(':room_num', $room_num);

                if ($this->db->execute()) {
                    return true;
                } 

                else {
                    return false;
                }
                
            }
            
            else {
                
                $this->db->query ('DELETE FROM restaurants WHERE sl_no= :room_num;
                                  SET @autoid :=0;
                                  UPDATE restaurants SET sl_no = @autoid := (@autoid+1);
                                  ALTER TABLE restaurants AUTO_INCREMENT = 1;'
                                );
                
                
                $this->db->bind(':room_num', $room_num);

                if ($this->db->execute()) {
                    return true;
                } 

                else {
                    return false;
                }
                
            }

        }
        
        
    }