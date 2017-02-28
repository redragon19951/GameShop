<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-4
 * Date: 15.2.2017 г.
 * Time: 14:41
 */

namespace App\Models;

use Yee\Yee;

class Authentication
{
    private $email = 'test@abv.bg';
    private $password = '123456';
    private $application;
    public function __construct($email = null ,$password = null )
    {
        $this->email = $email;
        $this->password = $password;
        $this->application = Yee::getInstance();
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param null $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }






    public function createAccount($email, $password)
    {

        $email = $this->setEmail($email);
        $password = $this->setPassword($password);
        $_SESSION['email'] = null;
        $_SESSION['token'] = null;
        try{
            if (empty($this->email) || empty($this->password)){
                throw new \Exception('You must fill email and password fields');
            }
            $_SESSION['email'] = $email;
            $access_token = uniqid('@@!?@A__D23@'.sha1($email) . ':' . date('y-m-d') . ':', true);
            $_SESSION['token'] = $access_token;


        } catch ( \Exception $e){
            $e->getMessage();
        }
        return $_SESSION;

    }

    public function getInstance()
    {
        return $this->application;
    }
}