@extends('layouts.app')

@section('title')
  Edit Profile
@endsection('title')

@section('content')

<form>
  @include('partials.profile_form')
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection('content')