@extends('layout.app')
@section('namePage','edit student')
@section('content')
    <form action="{{route('students.update',$student->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" value="{{$student->name}}" name="inputName" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" value="{{$student->email}}" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
