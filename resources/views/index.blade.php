@extends('layout.app')
@section('namePage','list students')
@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($students as $key => $student)
        <tbody>
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>
                <a href="{{route('students.edit',$student->id)}}">Update</a>
                <a href="{{route('students.read',$student->id)}}">Show</a>
                <a href="{{route('students.delete', $student->id)}}">Delete</a>
            </td>
        </tr>
        </tbody>
            @endforeach
    </table>
    <a href="{{route('students.create')}}">Create</a>
@endsection
