<?php

namespace App\Models;

class StoreModel
{

 private $name;
 private $email;
 private $username;
 private $password;

 public function __construct($name,$email,$username,$password){
  $this->name = $name;
  $this->email = $email;
  $this->username = $username;
  $this->password = $password;
 }

    public function check($name) 
    {  
     //Checks if it is a blank space
     if(empty($this->name)){
      return false;
     }
     return true;

    }
    public function checkEmail($email) 
    {  
     //Checks if the Email is real

     if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
      return false;
     }
     if(empty($this->email)){
      return false;
     }
      return true;     

    }
    public function checkUsername($username){

     //Validates username strength.Maximum 10 characters

     if(empty($this->username)){
      return false;
     }
     return true;
    }

    public function checkPassword($password)
    {
     //Validates password strength. Minimum 8 characters at least 1 Uppercase Alphabet, 1 Lowercase Alphabet, 1 Number and 1 Special Character
     $reg = "^(?=.*[a-z])(?=.*[A-Z])[A-Za-z]{8,}^";

     if(!preg_match($reg, $this->password)){
       return false;
     }
     elseif(empty($this->password)){
      return false;
     }
     return true;
    }

    public function insertRegisters(){
     
     $app = \Yee\Yee::getInstance();

      $data = Array(
                    'name' => $this->name,
                    'email' => $this->email,
                    'username' => $this->username,
                     'password' => $this->password,
       );

        $app->db['default']->insert('registers', $data);
    }
}