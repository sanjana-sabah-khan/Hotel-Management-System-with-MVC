<?php
    
    class Forums extends Controller {
        
       
         public function __construct() {
            $this->inModels = $this->model('Forum');
        }
        
        
        public function forum () {
            
            $forums = $this->inModels->getForums();
            
            $data = [
                'forums' => $forums,
            ];

            $this->view ('forum', $data);
            
        }
        
        
        public function send () {
            
            $forums = $this->inModels->getForums();

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'sl_no' => '',
                    'forum_name' => trim($_POST ['forum_name']),
                    'forum_message' => trim($_POST ['forum_message']),
                    'forum_admin_reply' => ''
                ];


                if ( !empty($data['forum_name']) && !empty($data['forum_message']) ) {

                    if ($this->inModels->sendMessage ($data)) {
                        header("Location: " . URLROOT . "/Homes/home");
                    } 

                    else {
                        die("Something went wrong, please try again!");
                    }

                } 

                else {
                    $this->view ('forum', $data);
                }

            }
            
            $this->view ('forum');
            
        }
        
        
    }
            
