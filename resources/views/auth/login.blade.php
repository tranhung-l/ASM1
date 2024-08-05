
@extends('client.layout.master')

@section('title')
    login
@endsection
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@section('content')
    <div class="container mt-5">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="mt-4">Email</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="mt-4">Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-4">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
