@extends('layouts.app')

@section('title')
  Directory
@endsection('title')

@section('content')
  <form method="POST" action="{{ route('contact') }}">
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
      </div>
    </div>
    <div class="form-group row">
      <label for="message" class="col-sm-2 col-form-label">Message</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="message" rows="3" name="message"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
@endsection('content')