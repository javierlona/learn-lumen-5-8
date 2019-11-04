<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('contact.index');
    }
    public function getDirectory()
    {
        $people = DB::table('personnels')->get();
        var_dump($people);
        die;
        return view('directory.index');
    }
    public function getHome(Request $request)
    {
        echo "Home in Page Controller";
        var_dump($request);
    }
}
