<?php
use Yee\Yee;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use Firebase\JWT\JWT;
class HomeController extends \Yee\Managers\Controller\Controller
{


    /**
     * @Route('/')
     * @Name('home.index')
     */
    public function index()
    {
        $app = $this->getYee();
      

        $app->render('templates/store.twig', $data = array(

        ));

       
    }


    /**
     * @Route('/login')
     * @Method('POST')
     * @Name('home.index')
     */
    public function login()
    {
        $app = $this->getYee();



        $app->render('templates/store.twig', $data = array(

        ));
    }


}