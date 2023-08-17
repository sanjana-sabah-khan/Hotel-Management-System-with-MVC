<?php
    
    class Contacts extends Controller {
        
        
        public function __construct() {
            $this->inModels = $this->model('Contact');
        }
        
        
        public function contact () {
            
            $contacts = $this->inModels->getContacts();

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'sl_no' => '',
                    'contact_name' => trim($_POST ['contact_name']),
                    'contact_email' => trim($_POST ['contact_email']),
                    'contact_phone' => trim($_POST ['contact_phone']),
                    'contact_message' => trim($_POST ['contact_message'])
                ];


                if ( !empty($data['contact_name']) && !empty($data['contact_email']) && !empty($data['contact_phone']) && !empty($data['contact_message']) ) {

                    if ($this->inModels->sendMessage ($data)) {
                        header("Location: " . URLROOT . "/Homes/home");
                    } 

                    else {
                        die("Something went wrong, please try again!");
                    }

                } 

                else {
                    $this->view ('contact', $data);
                }

            }

            $this->view ('contact');
            
        }
        
        
    }