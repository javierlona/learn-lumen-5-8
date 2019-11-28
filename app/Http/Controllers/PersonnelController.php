<?php

namespace App\Http\Controllers;

use App\Personnel;
use Illuminate\Http\Request;
use Validator;

class PersonnelController extends Controller
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

    public function show($id)
    {
      $person = Personnel::where('id', $id)->firstOrFail();

      // dd($person);
      return view('profile.index', $person);
    }

    public function update(Request $request, $id)
    {
      // dd($request);
      echo "HELLO";
    }
}
