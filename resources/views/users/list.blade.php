@extends('layouts.admin')
@section('content')
    <h1>User List</h1>
    <div class="row">
        <a class="btn btn-success" href="{{route('addUser')}}"> Add User</a>
        @if( Session::has('message') )
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
        @endif
        <table class="table">
            <tr>
                <td>Id</td>
                <td>Username</td>
                <td>Email</td>
                <td>Password</td>
                <td>Date of Birth </td>
                <td>Role</td>
                <td>Action</td>
            </tr>
            @foreach ( $users as $user)
                <tr>
                    <td> {{$user->id}}</td>
                    <td> {{$user->name}}</td>
                    <td> {{$user->email}}</td>
                    <td> {{$user->password}}</td>
                    <td> {{$user->dob}}</td>
                    <td> {{$user->role->name}}</td>
                    <td> <a href="{{route('editUser' , $user->id )}}">Edit </a> /
                         <a href="{{route('deleteUser' , $user->id )}}">Delete</a></td>

                </tr>
            @endforeach

        </table>
    </div>
@stop
