<?php
    
    class Homes extends Controller {
        
       
        public function home () {

            $this->view ('home');
            
        }
        
        
        public function about () {

            $this->view ('about');
            
        }
        
        
        public function services () {

            $this->view ('services');
            
        }
        
        
        public function undermaintain () {

            $this->view ('UnderMaintainance/services_page');
            
        }
        
        
        public function restaurants () {

            $this->view ('restaurants');
            
        }
        
        
        public function menu () {

            $this->view ('UnderMaintainance/rest_page');
            
        }
        
        
        public function redirect () {

            $this->view ('Admin/redirect');
            
        }
        
        
    }
