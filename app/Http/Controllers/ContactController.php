<?php

namespace App\Http\Controllers;

use App\ContactForm;
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
        // back does not work
        // sessions are not available 'stateless'
        return redirect()->route('contact');
      }

      echo "Passed Validation.";
      // var_dump($request->all());

      /*
      * Mass assignment method to save information
      *
      */

      $contact = ContactForm::create($request->input());
      echo "Saved To DB.";
      // var_dump($contact);

      /*
      * Another method to save information
      *
      */

      // $contact->name = $request->input('name');
      // $contact->email = $request->input('email');
      // $contact->message = $request->input('message');

      // $contact->save();
      // echo "Saved To DB.";
    }
}
