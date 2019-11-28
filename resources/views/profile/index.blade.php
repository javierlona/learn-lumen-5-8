@extends('layouts.app')

@section('title')
  Profile
@endsection('title')

@section('content')

<form>
  <div class="form-group">
    <label for="">First Name</label>
    <input type="text" class="form-control" id="" value="{{ $name_first }}">
  </div>
  <div class="form-group">
    <label for="">Last Name</label>
    <input type="text" class="form-control" id="" value="{{ $name_last }}">
  </div>
  <div class="form-group">
    <label for="">Job Title</label>
    <input type="text" class="form-control" id="" value="{{ $job_title }}">
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="text" class="form-control" id="" value="{{ $email }}">
  </div>
  <div class="form-group">
    <label for="">Phone</label>
    <input type="text" class="form-control" id="" value="{{ $phone }}">
  </div>
  <div class="form-group">
    <label for="">Office Number</label>
    <input type="text" class="form-control" id="" value="{{ $office_number }}">
  </div>
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection('content')