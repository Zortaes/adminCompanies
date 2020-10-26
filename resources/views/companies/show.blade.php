@extends('layouts.app');


@section('content')

<h1>{{ $company->name }}</h1>

<a class="btn btn-secondary" href="{{ route('companies.edit', $company->id )}}">Edit company</a>
<form action="{{ route('companies.destroy', ['company' => $company->id] )}}" method="POST">
    @csrf 
    @method('DELETE')
    <Input type="submit" class="btn btn-danger" value="delete">
</form>
    

<ul>
<li>email : {{ $company->email }}</li>
<li>webiste : {{ $company->website }}</li>
</ul>


@endsection