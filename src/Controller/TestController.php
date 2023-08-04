<?php

namespace App\Controller;

 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TestController {

    public function index() {
        var_dump("it's run ! ");
        die();
    }
    /**
     * @Route("/home/{a<\d+>e?0}",name ="home" ,methods= {"get"},schemes= {"http"})
     * 
     */

    public function home(Request $request, $age) {

           //  $request = Request::createFromGlobals();
            // $age = $request->query->get ('age','how old are you');
            // $age = $request->attributes->get ('age','how old are you');
             dump($request);

            // $age = $_GET['age'];

             var_dump(" page home : $age");
            die () ;
    }
}