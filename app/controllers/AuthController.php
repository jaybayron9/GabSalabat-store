<?php 

namespace AuthController;  
use Model\Users; 

class AuthController {   
    private $user;

    public function __construct() {
        $this->user = new Users(); 
    }

    public function testQuery() {  
    }
}
