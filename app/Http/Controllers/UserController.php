<?php

namespace App\Http\Controllers;
use App\Models\User;
use Session;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $user = user::all();
        
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('admin.user',compact('user','data'));
    }
    public function viewUser($id){
        $user = user::find($id);
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('admin.userview', compact('user','data'));

    }
}
