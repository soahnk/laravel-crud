@extends('layouts.admin')
@section('content')
<div class="container">
    <form class="form-horizontal" action='{{ route('updateUser' , $user->id)}}' method="POST">
        {{csrf_field()}}
        <fieldset>

            <div id="legend">
                <legend class="">Registration Form</legend>
            </div>
            <div class="control-group">
                <!-- Role -->
                <label class="control-label"  for="">Role</label>
                <select name="role_id" id="" class="form-control">
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}" >{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="control-group">
                <!-- Username -->
                <label class="control-label"  for=" username">Username</label>
                <div class="controls">
                    <input type="text" id="username" name="name" value='{{$user->name}}' placeholder="" class="form-control">
                    <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                </div>
            </div>

            <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="email">E-mail</label>
                <div class="controls">
                    <input type="text" id="email" name="email" value='{{$user->email}}' placeholder="" class="form-control">
                    <p class="help-block">Please provide your E-mail</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Password-->
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input type="password" id="password" name="password" value='{{$user->password}}' placeholder="" class="form-control">
                    <p class="help-block">Password should be at least 4 characters</p>
                </div>
            </div>


            <div class="well">
                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" value='{{$user->dob}}' class="form-control" id="" placeholder="" >
                </div>
            </div>


            <!-- Password
            <div class="control-group">
                           <label class="control-label"  for="password_confirm">Password (Confirm)</label>
                <div class="controls">
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
                    <p class="help-block">Please confirm password</p>
                </div>
            </div>
            -->

            <div class="control-group">
                <!-- Button -->
                <div class="controls">
                    <button class="btn btn-success" name="save">Save</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
</div>
 @stop