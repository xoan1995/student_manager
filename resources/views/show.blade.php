@extends('layout.app')
@section('namePage','edit student')
@section('content')
    <h3>Student information</h3>
    <table>
        <tr>
            <th scope="row">Name: {{$student->name}}</th>
        </tr>
        <tr>
            <th scope="row">Email: {{$student->email}}</th>
        </tr>
    </table>
@endsection
