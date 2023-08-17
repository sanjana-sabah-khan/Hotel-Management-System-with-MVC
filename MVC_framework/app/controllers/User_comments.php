<?php
    
    class User_comments extends Controller {
        
       
        public function __construct() {
            $this->inModels = $this->model('User_comment');
        }
        
        
        public function userComments () {
            
            $forumDetails = $this->inModels->getForumDetails();
            $contactDetails = $this->inModels->getContactDetails();
            
            $data = [
                'forumDetails' => $forumDetails,
                'contactDetails' => $contactDetails,
            ];

            $this->view ('Admin/user_comments', $data);
            
        }
        
        
        public function Reply ($num) {
            
            $forumDetails = $this->inModels->getForumDetails();
            $contactDetails = $this->inModels->getContactDetails();
            
            $data = [
                'forumDetails' => $forumDetails,
                'contactDetails' => $contactDetails,
            ];

            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'forum_admin_reply' => trim($_POST ['forum_admin_reply']),
                ];


                if (  !empty($data['forum_admin_reply']) ) {

                    if ($this->inModels->reply ($data, $num)) {
                        header("Location: " . URLROOT . "/User_comments/userComments");
                    } 

                    else {
                        die("Something went wrong, please try again!");
                    }

                } 

                else {
                    $this->view ('Admin/user_comments', $data);
            
                }

            }
            
            $this->view ('Admin/user_comments', $data);

        }
        
        
        public function DeleteReply ($num) {
            
            $forumDetails = $this->inModels->getForumDetails();
            $contactDetails = $this->inModels->getContactDetails();
            
            $data = [
                'forumDetails' => $forumDetails,
                'contactDetails' => $contactDetails,
            ];

            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if ($this->inModels->deleteReply ($num)) {
                    header("Location: " . URLROOT . "/User_comments/userComments");
                } 

                else {
                    die("Something went wrong, please try again!");
                }

            } 

            else {
                $this->view ('Admin/user_comments', $data);

            }
            
            $this->view ('Admin/user_comments', $data);

        }
        
        
        public function Delete ($num) {
            
            $forumDetails = $this->inModels->getForumDetails();
            $contactDetails = $this->inModels->getContactDetails();
            
            $data = [
                'forumDetails' => $forumDetails,
                'contactDetails' => $contactDetails,
            ];

            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if ($this->inModels->delete ($num)) {
                    header("Location: " . URLROOT . "/User_comments/userComments");
                } 

                else {
                    die("Something went wrong, please try again!");
                }

            } 

            else {
                $this->view ('Admin/user_comments', $data);

            }
            
            $this->view ('Admin/user_comments', $data);

        }
        
        
        public function ContactDelete ($num) {
            
            $forumDetails = $this->inModels->getForumDetails();
            $contactDetails = $this->inModels->getContactDetails();
            
            $data = [
                'forumDetails' => $forumDetails,
                'contactDetails' => $contactDetails,
            ];
            
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if ($this->inModels->contactDelete ($num)) {
                    header("Location: " . URLROOT . "/User_comments/userComments");
                } 

                else {
                    die("Something went wrong, please try again!");
                }

            } 

            else {
                $this->view ('Admin/user_comments', $data);

            }
            
            $this->view ('Admin/user_comments', $data);

        }
        
        
    }

?>