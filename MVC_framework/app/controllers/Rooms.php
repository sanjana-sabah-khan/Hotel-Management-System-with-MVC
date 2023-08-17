<?php
    
    class Rooms extends Controller {
        
        
        public function __construct() {
            $this->inModels = $this->model ('Reservation');
        }
        
        
        public function rooms () {

            $this->view ('rooms');
            
        }
        
        
        public function bookRooms () {
            
            $singleBeds = $this->inModels->getSingleBedRooms();
            $familyBeds = $this->inModels->getFamilyRooms();
            
            $data = [
                'singleBeds' => $singleBeds,
                'familyBeds' => $familyBeds
            ];

            $this->view ('book_room', $data);
            
        }
     
        
    }