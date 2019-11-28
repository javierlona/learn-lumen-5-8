@extends('layouts.app')

@section('title')
  Directory
@endsection('title')

@section('content')
  <div class="form-group">
    <label for="searchPerson">Search For Person</label>
    <input type="text" class="form-control" id="searchPerson" aria-describedby="searchHelp">
    <small id="searchHelp" class="form-text text-muted">Search by name or email</small>
  </div>
  <button type="button" class="btn btn-primary mt-3">Add Person</button>
  <table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Job Title</th>
        <th scope="col">Office Number</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($people as $person)
      <tr>
        <td> {{ $person->name_first }} </td>
        <td> {{ $person->name_last }} </td>
        <td> {{ $person->email }} </td>
        <td> {{ $person->phone }} </td>
        <td> {{ $person->job_title }} </td>
        <td> {{ $person->office_number }} </td>
        <td> Edit, Delete </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection('content')