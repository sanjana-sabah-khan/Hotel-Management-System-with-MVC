<?php
    
    class Logins extends Controller {
        
        
        public function __construct() {
            $this->inModels = $this->model ('Login');
        }
        
        
        public function login () {
            
            $data = [
                'admin_email_id' => '',
                'admin_password' => '',
                'passwordError' => '',
            ];
            
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $_POST = filter_input_array (INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'admin_email_id' => trim($_POST['email']),
                    'admin_password' => trim($_POST['password']),
                    'passwordError' => '',
                ];
                
                if ( !empty ($data['admin_email_id']) && !empty ($data['admin_password']) ) {
                    
                    $loggedInUser = $this->inModels->getLogins ($data['admin_email_id'], $data['admin_password']);

                    if ($loggedInUser) {
                        $this-> createSession ($loggedInUser);
                    } 
                    
                    else {
                        
                        $data['passwordError'] = 'Password or username is incorrect. Please try again.';
                        $this->view('Admin/admin_login', $data);
                        
                    }
                    
                }
            
            } 
            
            
            $this->view ('Admin/admin_login', $data);
            
        }
        
        
        public function createSession ($loggedInUser) {
            
            $_SESSION ['admin_id'] = $loggedInUser-> admin_id;
            $_SESSION ['name'] = $loggedInUser-> name;
            $_SESSION ['admin_email_id'] = $loggedInUser-> admin_email_id;
            
            header ('location:' . URLROOT . '/Admin_homes/home');
            
        }

        
        public function logout () {
            
            unset ($_SESSION ['admin_id']);
            unset ($_SESSION ['name']);
            unset ($_SESSION ['admin_email_id']);
            
            header ('location:' . URLROOT . '/Logins/login');
            
        }
     
        
    }