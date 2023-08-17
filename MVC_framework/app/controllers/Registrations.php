
<?php
    
    class Registrations extends Controller {
        
        
        public function __construct() {
            $this->inModels = $this->model ('Registration');
        }
        

        public function register () {
            
            $data = [
                'name' => '',
                'admin_email_id' => '',
                'admin_password' => '',
                'confirmPassword' => '',
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                $data = [
                    'name' => trim ($_POST['username']),
                    'admin_email_id' => trim ($_POST['email']),
                    'admin_password' => trim ($_POST['password']),
                    'confirmPassword' => trim ($_POST['confirmPassword']),
                    'usernameError' => '',
                    'emailError' => '',
                    'passwordError' => '',
                    'confirmPasswordError' => '',
                ];

                
                if (empty ($data['name'])) {
                    $data ['usernameError'] = 'Please enter username.';
                }
                

                if (empty ($data ['admin_email_id'])) {
                    $data['emailError'] = 'Please enter email address.';
                } 
                
                elseif ( !filter_var ($data ['admin_email_id'], FILTER_VALIDATE_EMAIL) ) {
                    $data ['emailError'] = 'Please enter the correct format.';
                } 
                
                elseif ( $this->inModels->emailAlreadyExists($data ['admin_email_id']) == true) {
                    $data ['emailError'] = 'Email is already taken. Please try again...';
                }

                
                if ( empty ($data ['admin_password']) ){
                  $data ['passwordError'] = 'Please enter password.';
                } 
                
                elseif (strlen ($data ['admin_password']) < 6) {
                  $data ['passwordError'] = 'Password must be at least 6 characters';
                }
                

                //Validate confirm password
                 if ( empty ($data ['confirmPassword']) ) {
                    $data ['confirmPasswordError'] = 'Please enter password.';
                } 
                
                else if ( $data ['admin_password'] != $data ['confirmPassword'] ) {
                    $data ['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }

                
                if ( empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError']) ) {
                    
                    if ( $this->inModels->Register ($data) ) {
                        
                        echo "<script> alert('Congratulations! Registration done successfully.'); </script>";
                        header('location: ' . URLROOT . '/Logins/login');
                        
                    } 
                    
                    else {
                        die ('Something went wrong.');
                    }
                     
                }
                
                else {
                    
                    echo "<script> alert('Task failed. Please enter the input fields correctly and try again.'); </script>";
                    $this->view ('Admin/admin_register', $data);
                    
                }
                
            }
            
            
            $this->view ('Admin/admin_register', $data);
             
        }

        
    }