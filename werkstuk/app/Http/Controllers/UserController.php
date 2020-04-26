<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers(){
        $this->authorize('access-users');
        $admins = User::where('role', 'Admin')->get();
        $planners = User::where('role', 'Planner')->get();
        $financers = User::where('role', 'Finance')->get();
        return view('content.users', ['admins' => $admins, 'planners' => $planners, 'financers' => $financers]);
    }

    public function postUpdateUser(Request $request){
        $this->authorize('access-users');

        $admins = User::where('role', 'Admin')->get();

        if(count($admins) == 1 && $request->role != 'Admin'){
            return redirect()->action('UserController@getUsers')->with('error', 'There must always be at least 1 admin');
        }else{
            $user = User::find($request->id);
            $user->role = $request->role;
            $user->save();
            return redirect()->action('UserController@getUsers')->with('updated', $user->name);
        }
    }
}
