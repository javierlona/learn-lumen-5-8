@extends('layouts.app')

@section('title')
  Directory
@endsection('title')

@section('content')
  <div class="form-group">
    <label for="searchPerson">Search For Person</label>
    <input type="text" class="form-control" name="search" id="searchPerson" aria-describedby="searchHelp">
    <small id="searchHelp" class="form-text text-muted">Search by name or email</small>
  </div>
  <a class="btn btn-primary mt-3" href="{{ route('profile.add') }}" role="button">Add Person</a>
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
      <td>
        <a class="btn btn-warning btn-block" href="{{ route('profile.index', ['id' => $person->id]) }}" role="button">Edit</a>
        <form action="{{ route('profile.delete', ['id' => $person->id]) }}" method="POST">
          <button type="submit" class="btn btn-danger btn-block" title="Delete" value="DELETE">Delete</button>
        </form>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection('content')
@section('js_assets')
  <script>
    console.log("Hello From Index.blade.php");
    const profileQuery = document.querySelector('#searchPerson');
    const resultDiv = document.querySelector('#suggestions');
    console.log(profileQuery);
    
    function get_suggestions() {
      let query = profileQuery.value;
      console.log(query);

      // Wait until user types 3 characters, then provide suggestions
      if (query.length < 3) {
        // query.style.display = 'none';
        return;
      }

      let url = `/profile/search/${query}`;
      console.log(url);
      fetch(url)
      .then(function(response) {
        return response.json();
      })
      .then(function(data){
        console.log(data);
      })
    }

    // Use "input" (every key), not "change" (must lose focus)
    profileQuery.addEventListener("keyup", get_suggestions, false)
  </script>
@endsection('js_assets')