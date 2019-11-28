@extends('layouts.app')

@section('title')
  Add Profile
@endsection('title')

@section('content')
@if( !empty($errorMsg))
  <div class="alert alert-danger" role="alert">
    {{ $errorMsg ?? '' }}
  </div>
@endif
<form method="post" action="{{ route('profile.add') }}">
  @include('partials.profile_form')
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection('content')