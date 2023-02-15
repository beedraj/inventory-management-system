<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;
// use\App\Repositories\interfaces\CategoryRepositoryInterface;
use App\Models\Admin;

use Illuminate\Support\Facades\Auth;
use Session;


class AdminController extends Controller
{
//     private $categoryRepository;
//    public function _construct(CategoryRepositoryInterface $categoryRepository){
//     $this->categoryRepository=$categoryRepository;
//    }
    public function dashboard(){
        $product = Product::count();
        $data1 = Item::count();
        $employee =Employee::count();
        // $user = User::count();
        $totaluser=User ::where('type','0')->count();
        $totaladmin=User ::where('type','1')->count();
        
        $data = array();
        if(Session::has('loginId')){
            $data= User::where('id', '=',Session::get('loginId'))->first();
            
        }
        return view('admin.dashboard',compact('product','data1','employee','totaluser','totaladmin','data'));
    }
    public function logoutUser(){
       
            session()->flush();
             Auth::logout();
             return redirect("login");
     
    }
    public function categoryView(){
        $data1 = item::all();
       
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=',Session::get('loginId'))->first();
            //dd($data); 
        }

        
        return view('admin.category',compact('data' ,'data1'));
    }
    public function categoryAdd(Request $request){
        
        if($request->name){
            $data = new item;
            $data->category_name = $request->name;
            $data->save();
        }
        else{
            // dd($request);
            return redirect()->back()->with('message', 'please fill the category name');;
           

        }
        
        

        return redirect()->back()->with('message', 'Item added successfully ');
    }
    public function categoryDelete($id){
        //  dd($id);
        $data = item::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Item deleted successfully ');

    }
}
