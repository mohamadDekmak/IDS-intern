<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers(){
        $users = User::all();
        return $users;
    }
    public function create(Request $request){
        $user = User::create($request->all());
        return "user added successfully";
    }
    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->update($request->all());
        return "user update successfully";
}
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return "user delete successfully";
    }
    public function show ($id){
        $user = User::findOrFail($id);
        return $user;
       
    }
}