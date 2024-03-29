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
      $person = Personnel::where('id', $id)->firstOrFail();
      $person->fill($request->input());
      $person->save();

      return redirect('/directory');
    }

    public function delete($id)
    {
      $person = Personnel::where('id', $id)->firstOrFail();
      $person->delete();
      return redirect('/directory');
    }

    public function store(Request $request)
    {
      $rules = [
        'name_first' => 'required',
        'name_last' => 'required',
        'job_title' => 'required',
        'email' => 'required|email',
        'phone' => 'regex:/^\d{3}-\d{3}-\d{4}$/',
        'office_number' => 'required|numeric'
      ];

      $validator = Validator::make($request->all(), $rules);

      if($validator->fails()) {
        // back does not work
        // sessions are not available 'stateless'

        /*
        * Use the method below to redirect to a
        * view with message when sessions are not available
        */
        $data['errorMsg'] = 'Failed Validation';
        return view('profile.add', $data);
      }

      // var_dump($request->all());

      /*
      * Mass assignment method to save information
      *
      */
      $profile = Personnel::create($request->input());

      /*
      * Use the method below to redirect to an unamed route
      */
      return redirect('/directory');
    }

    public function search($q)
    {
      $valid['query'] = $q;
      $validator = Validator::make($valid, [
        'query' => 'required|alpha_num',
      ]);

      if ($validator->fails()) {
        return response()->json(['errors' => 'Failed Validation'], 200);
      }

      $data = Personnel::where('name_first', 'like', '%' . $q . '%')
              ->orWhere('name_last', 'like', '%' . $q . '%')
              ->orWhere('email', 'like', '%' . $q . '%')
              ->take(10)
              ->get();

      return response()->json($data, 200);
    }
}
