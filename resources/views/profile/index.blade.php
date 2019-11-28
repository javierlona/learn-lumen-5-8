@extends('layouts.app')

@section('title')
  Profile
@endsection('title')

@section('content')

<form method="post" action="{{ route('profile.update', ['id' => $id]) }}">
  @include('partials.profile_form')
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection('content')