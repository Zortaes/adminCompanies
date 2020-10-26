@extends('layouts.app');


@section('content')
<h1>Edit company</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error !</strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('companies.update', ['company' => $company->id]) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
    <div class="form-group">
        <strong>Name</strong>
        <input type="text" name="name" class="form-control" placeholder="{{ $company->name }}">
    </div>

    <div class="form-group">
        <strong>Email</strong>
        <input type="text" name="email" class="form-control" placeholder="{{ $company->email }}">
    </div>

    <div class="form-group">
        <strong>Website</strong>
        <input type="text" name="website" class="form-control" placeholder="{{ $company->website }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection