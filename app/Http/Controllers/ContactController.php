<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
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

    public function store(Request $request)
    {
      $rules = [
          'name' => 'required',
          'email' => 'required|email',
          'message' => 'required'
      ];

      $validator = Validator::make($request->all(), $rules);

      if($validator->fails()) {
        return redirect()->route('contact'); 
      }

      echo "Passed Validation.";
      var_dump($request->all());
    }
}
