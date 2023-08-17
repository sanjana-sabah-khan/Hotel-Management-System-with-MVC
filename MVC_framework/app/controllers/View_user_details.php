<?php
    
    class View_user_details extends Controller {
        
       
         public function __construct() {
            $this->inModels = $this->model('View_user_detail');
        }
        
        
        public function userDetails () {
            
            $SingleRoomDetails = $this->inModels->getSingleRoomDetails();
            $FamilyRoomDetails = $this->inModels->getFamilyRoomDetails();
            $RestaurantDetails = $this->inModels->getRestaurantDetails();
            
            $data = [
                'SingleRoomDetails' => $SingleRoomDetails,
                'FamilyRoomDetails' => $FamilyRoomDetails,
                'RestaurantDetails' => $RestaurantDetails
            ];

            $this->view ('Admin/user_details', $data);
            
        }
        
        
    }

?>
        