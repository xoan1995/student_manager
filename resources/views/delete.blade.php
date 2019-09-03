@extends('layout.app')
@section('namePage','delete student')
@section('content')
    <form action="{{route('students.delete'),$student->id}}" method="get">
        <p class="text-danger">Xoa khong!</p>
        <a href="{{route('students.delete'),$student->id}}">Có</a>
    </form>
    <a href="{{view('index')}}">Không</a>

@endsection
