@extends('layouts.app');


@section('content')
<h1>Create a company</h1>

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
<form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <strong>Name</strong>
        <input type="text" name="name" class="form-control" placeholder="Name">
    </div>

    <div class="form-group">
        <strong>Email</strong>
        <input type="text" name="email" class="form-control" placeholder="Email">
    </div>

    <div class="form-group">
        <strong>Website</strong>
        <input type="text" name="website" class="form-control" placeholder="Website">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection