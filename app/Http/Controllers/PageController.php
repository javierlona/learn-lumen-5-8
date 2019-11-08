<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Personnel;

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
        /*
        * Method One
        *
        */
        $data['people'] = DB::table('personnels')->get();
        // var_dump($data['people']);
        
        // $people = Personnel::all();
        // var_dump($people);
        // foreach ($people as $flight) {
        //     echo $flight->job_title;
        // }
        // die;
        return view('directory.index', $data);
    }
    public function getHome(Request $request)
    {
        // echo "Home in Page Controller";
        // var_dump($request);

        return view('content.index');
    }
}
