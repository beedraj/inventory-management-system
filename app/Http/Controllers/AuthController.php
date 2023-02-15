<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use App\Models\Product;
use App\Models\User;
use Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        $product = product::paginate(2);
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=',Session::get('loginId'))->first();
            
        }

        return view('welcome', compact('product','data'));
    }
    // public function addCart( Request $request,$id){
    //     // dd($request->all());

    //     if (Auth::id()){
    //         return redirect()->back();
    //     }else{
    //         return redirect('login');
    //     }


    // }


    public function login()
    {
        return view('auth.login');

    }
    // public function redirect(){
    //    if($user=Auth::user()){
    //     if($user->level=='1'){
    //             return redirect('dashboard');
    //     }
    //     else{
    //             return redirect('index');
    //     }
    //    }
    // }
    public function loginUser(Request $request)
    {
      // dd($request->all());
      $request->validate([

        'email' => 'required|email',
        'password' => 'required|min:8'
    ]);
    // dd($request->all());
    if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
        $user = Auth::user();
        if ($user->type == '1') {
            $request->session()->put('loginId', $user->id);
            return redirect('admin/dashboard')->with('success', 'You are Logged in sucessfully.');
        } else {
            $request->session()->put('loginId', $user->id);
            return redirect('/');
        }
    } else {
        return redirect('login');
    }


    // public function adminLogout(Request $request)
    // {
    //     auth()->guard('admin')->logout();
    //     Session::flush();
    //     Session::put('success', 'You are logout sucessfully');
    //     return redirect(route('adminLogin'));



    // $user = User::where('email', '=',$request->email)->first();
    // if($user){
    //     if(Hash::check($request->password,$user->password) &&($user->type=='1' )){


    //         $request->session()->put('loginId', $user->id);
    //         // dd('hh');
    //         return redirect('dashboard');

    //     }
    //     else if(Hash::check($request->password,$user->password) &&($user->type=='0' ) ){
    //         $request->session()->put('loginId', $user->id);
    //         return redirect('/');

    //     }
    //     else{
    //         return redirect('login')->with('fail', 'wrong password ');
    //     }

    // }else{
    //     return back()->with('fail', 'this email is not registered');
    // }
    }


    // public function loginUser(Request $request, string $redirectTo, string $routeName, string $userRole)
    // {

    //     #Add validation 

    //     if (!Auth::attempt($request->validated())) {
    //         return redirect()->route($routeName . '.login')->with('error', 'Incorrect email or password.');
    //     }


    //     $user = Auth::user();

    //     if (!$user->hasRole($userRole)) {
    //         Auth::logout();
    //         return redirect()->route($routeName . '.login')->with('error', 'You do not have the required role to access this page.');
    //     }

    //     return redirect()->route($redirectTo);
    // }

    public function registration()
    {
        return view('auth.registration');

    }
    public function registerUser(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return redirect('login')->with('success', 'you have register sucessfully , Now please make login ');

        } else {
            return back()->with('fail', 'something is wrong');
        }


    }




}