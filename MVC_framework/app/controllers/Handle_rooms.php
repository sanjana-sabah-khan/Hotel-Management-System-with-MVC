<?php
    
    class Handle_rooms extends Controller {
       
        
        public function __construct() {
            $this->inModels = $this->model('Handle_room');
        }
        
        
        public function handleRoom () {
            
            $singleBeds = $this->inModels->getSingleBedRooms();
            $familyBeds = $this->inModels->getFamilyRooms();
            $restaurants = $this->inModels->getRestaurants();
            
            $data = [
                'singleBeds' => $singleBeds,
                'familyBeds' => $familyBeds,
                'restaurants' => $restaurants
            ];

            $this->view ('Admin/handle_room', $data);
            
        }
        
        
        public function singleBedRooms () {
            
            $reserves = $this->inModels->getSingleBedRooms();
            
            $data = [
                    'room_num' => '',
                    'room_category' => '',
                    'first_name' => '',
                    'last_name' => '',
                    'email_address' => '',
                    'gender' => '',
                    'contact_num' => '',
                    'guest_num' => '',
                    'check_in' => '',
                    'check_out' => '',
                    'emailError' => '',
                ];
            
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'room_num' => trim($_POST ['room_num']),
                    'room_category' => trim($_POST ['room_category']),
                    'first_name' => trim($_POST ['first_name']),
                    'last_name' => trim($_POST ['last_name']),
                    'email_address' => trim($_POST ['email_address']),
                    'gender' => trim($_POST ['gender']),
                    'contact_num' => trim($_POST ['contact_num']),
                    'guest_num' => trim($_POST ['guest_num']),
                    'check_in' => trim($_POST ['check_in']),
                    'check_out' => trim($_POST ['check_out']),
                ];


                if (!empty($data['room_num']) && !empty($data['room_category']) && !empty($data['first_name']) && !empty($data['last_name']) && !empty($data['email_address']) && !empty($data['contact_num']) && !empty($data['guest_num']) && !empty($data['check_in']) && !empty($data['check_out'])) {

                    if ($this->inModels->reserveSingleBedRoom ($data)) {
                        header("Location: " . URLROOT . "/Handle_rooms/handleRoom");
                    } 

                    else {
                        die("Something went wrong, please try again!");
                    }

                } 

                else {
                    $this->view ('reserve_room', $data);
            
                }

            }
            
            $this->view ('reserve_room', $data);

        }
        
        
        public function familyRooms () {
            
            $reserves = $this->inModels->getFamilyRooms();
            
            $data = [
                    'room_num' => '',
                    'room_category' => '',
                    'first_name' => '',
                    'last_name' => '',
                    'email_address' => '',
                    'gender' => '',
                    'contact_num' => '',
                    'guest_num' => '',
                    'check_in' => '',
                    'check_out' => '',
                    'emailError' => '',
            ];
            
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'room_num' => trim($_POST ['room_num']),
                    'room_category' => trim($_POST ['room_category']),
                    'first_name' => trim($_POST ['first_name']),
                    'last_name' => trim($_POST ['last_name']),
                    'email_address' => trim($_POST ['email_address']),
                    'gender' => trim($_POST ['gender']),
                    'contact_num' => trim($_POST ['contact_num']),
                    'guest_num' => trim($_POST ['guest_num']),
                    'check_in' => trim($_POST ['check_in']),
                    'check_out' => trim($_POST ['check_out']),
                ];


                if (!empty($data['room_num']) && !empty($data['room_category']) && !empty($data['first_name']) && !empty($data['last_name']) && !empty($data['email_address']) && !empty($data['contact_num']) && !empty($data['guest_num']) && !empty($data['check_in']) && !empty($data['check_out'])) {

                    if ($this->inModels->reserveFamilyRoom ($data)) {
                        header("Location: " . URLROOT . "/Handle_rooms/handleRoom");
                    } 

                    else {
                        die("Something went wrong, please try again!");
                    }

                } 

                else {
                    $this->view ('reserve_room', $data);
            
                }

            }
            
            $this->view ('reserve_room', $data);

        }
        
        
        public function restaurants () {
            
            $reserves = $this->inModels->getRestaurants();
            
            $data = [
                    'res_name' => '',
                    'first_name' => '',
                    'last_name' => '',
                    'email_address' => '',
                    'gender' => '',
                    'contact_num' => '',
                    'guest_num' => '',
                    'check_in' => '',
                    'check_out' => '',
                    'emailError' => '',
                ];
            
                
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'sl_no' => '',
                    'res_name' => trim($_POST ['res_name']),
                    'first_name' => trim($_POST ['first_name']),
                    'last_name' => trim($_POST ['last_name']),
                    'email_address' => trim($_POST ['email_address']),
                    'gender' => trim($_POST ['gender']),
                    'contact_num' => trim($_POST ['contact_num']),
                    'guest_num' => trim($_POST ['guest_num']),
                    'check_in' => trim($_POST ['check_in']),
                    'check_out' => trim($_POST ['check_out']),
                ];


                if (!empty($data['res_name']) && !empty($data['first_name']) && !empty($data['last_name']) && !empty($data['email_address']) && !empty($data['contact_num']) && !empty($data['guest_num']) && !empty($data['check_in']) && !empty($data['check_out'])) {

                    if ($this->inModels->reserveRestaurant ($data)) {
                        header("Location: " . URLROOT . "/Handle_rooms/handleRoom");
                    } 

                    else {
                        die("Something went wrong, please try again!");
                    }

                } 

                else {
                    $this->view ('reserve_restaurant', $data);
            
                }

            }
    
            $this->view ('reserve_restaurant', $data);
            
        }
        
        
        public function unbookRooms ($room_num, $room_type) {
            
            $singleBeds = $this->inModels->getSingleBedRooms();
            $familyBeds = $this->inModels->getFamilyRooms();
            $restaurants = $this->inModels->getRestaurants();
        
            $data = [
                'singleBeds' => $singleBeds,
                'familyBeds' => $familyBeds,
                'restaurants' => $restaurants
            ];
        
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if ($this->inModels->unbookRoom ($room_num, $room_type)) {
                    header("Location: " . URLROOT . "/Handle_rooms/handleRoom");
                } 

                else {
                    die("Something went wrong, please try again!");
                }

            }
            
            $this->view ('Admin/handle_room', $data);

        }
     
        
    }