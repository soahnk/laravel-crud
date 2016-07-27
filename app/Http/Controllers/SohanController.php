<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User;



class SohanController extends Controller
{
        function lists() {
        $users = User::with('role')->get();

        return view('users.list', ['users'=>$users]) ;
    }

    function creates() {

        $roles= Role::all(); 
        return view('users.create' , ['roles'=> $roles ] );
    }

    function stores(Request $request)  {
       // $data = $request->all();
        //$data ['password'] = bcrypt( $request->get('password') );
        User::create($request->all() );
        //return redirect()-> route('userList');
        return redirect('users')->with('message' , 'User successfully created') ;
    }

    function edits($id)
    {
        $user= User::find( $id );
        $roles = Role::all();
        return view('users.edit', ['roles' => $roles , 'user'=>$user]);
    }

    function updates(Request $request, $id) {
        $user= User::find( $id );
        $user ->update($request->all() );
        //$user ->update($request->only('name' , 'email' , 'dob'));
       // return redirect()-> route('userList') ;
        return redirect('users')->with('message' , 'User successfully updated') ;
    }

    function deletes($id) {
        $user = User::find ($id);
        $user->delete();
        return redirect('users')-> with('message' , 'User successfully deleted') ;
    }
    //function success (){
      //  return view('users.success');
    //}
}
