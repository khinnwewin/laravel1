<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<a href="{{ url('dress/create') }}" class="btn btn-primary pull-right">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Color</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($dresses as $dress)
        <tr>
          <th scope="row">#</th>
          <td>{{$dress->name}}</td>
          <td>{{$dress->color}}</td>
          <td>
            {{$dress->photo}}
          </td>
          <td><a href="{{ url('dress/'.$dress->id.'/edit') }}" class="btn btn-primary">Edit</a></td>
            <td>
                <a href="{{ url('dress/'.$dress->id.'/destory') }}" class="btn btn-danger">Delete</a>
                {{-- <form action="{{ url('dress/'.$dress->id.'/destory') }}" method="post">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form> --}}
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection