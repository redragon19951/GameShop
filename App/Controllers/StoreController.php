<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\StoreModel;

class StoreController extends Controller
{
     /**
     * @Route('/home')
     * @Name('home.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        //$data = array("message" => "This is home controller!");
        $app->render('store.twig');
    }

     /**
     * @Route('/register')
     * @Name('register')
     */

    public function register()
    {
        $app=$this->getYee(); //$app = new Yee()

        $app->render('register.twig');
    }

    /**
     * @Route('/yes')
     * @Name('registered')
     * @Method('POST')
     */

    public function login()
    {
        $app=$this->getYee(); //$app = new Yee()

        $name = $app->request()->post('name');
        $email = $app->request()->post('email');
        $username = $app->request()->post('username');
        $password = $app->request()->post('password');

        $StoreModel = new StoreModel($name,$email,$username,$password);


        $firstname = $StoreModel ->check($name);
        $mail = $StoreModel ->checkEmail($email);
        $user = $StoreModel ->checkUsername($username);
        $pass = $StoreModel ->checkPassword($password);



        if($firstname && $mail && $user && $pass == true)
        {
             $StoreModel ->insertRegisters();

             $success = "Sucessfully registered!";

             $data = array(
                 'Success'=> $success,
                 );
             $app->render('store.twig',$data);
        }
        else{
             $error = 'Please enter the correct data';

             $data = array(
                'Error'=>$error
                );
             $app->render('register.twig',$data);
        }

    }

}
