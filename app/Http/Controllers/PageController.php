<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function getContact()
    {
        echo "Contact in Page Controller";
    }
    public function getDirectory()
    {
        echo "Directory in Page Controller";
    }
    public function getHome(Request $request)
    {
        echo "Home in Page Controller";
        // return $router->app->version();
        var_dump($request);
    }
}
