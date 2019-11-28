@extends('layouts.app')

@section('title')
  Profile
@endsection('title')

@section('content')
Show individual profile

<form>
  <div class="form-group">
    <label for="">First Name</label>
  <input type="text" class="form-control" id="" value="{{ $name_first }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection('content')