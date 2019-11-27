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
      echo $id;

      $data = ['id' => $id ];

      $rules = [
          'id' => 'required|numeric',
      ];

      $validator = Validator::make($data, $rules);

      if($validator->fails()) {
        // back does not work
        // sessions are not available 'stateless'
        return redirect()->url('/directory');
      }

      echo "\nPassed Validation.";
    }
}
