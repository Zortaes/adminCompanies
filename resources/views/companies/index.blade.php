@extends('layouts.app');


@section('content')

<h1>All Companies</h1>

<a class="btn btn-primary" href="{{ route('companies.create') }}">Add a company</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">company name</th>
      <th scope="col">email</th>
      <th scope="col">website</th>
    </tr>
  </thead>
  <tbody>
    @foreach($companies as $companies)
    <tr>
      <td><a href="{{ route('companies.show', $companies->id ) }}">{{ $companies->name }}</td>
      <td>{{ $companies->email }}</td>
      <td>{{ $companies->website }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection