<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Session;
use App\Models\user;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=',Session::get('loginId'))->first();
            //dd($data); 
        }
        return view('employee.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'education' => 'required',
            'salary' => 'required',
            



        ]);
        // dd($request->all());
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email= $request->input('email');
        $address = $request->input('address');
        $dob = $request->input('dob');
        $gender = $request->input('gender');
        $education = $request->input('education');
        $salary = $request->input('salary');
       
        $employee = new employee();
        $employee->name = $name;
        $employee->phone = $phone;
        $employee->email = $email;
        $employee->address = $address;
        $employee->dob = $dob;
        $employee->gender = $gender;
        $employee->education = $education;
        $employee->salary = $salary;
        $employee->save();
       
        return redirect()->back()->with('message','Employee Created Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        $employee = employee::all();
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=',Session::get('loginId'))->first();
            //dd($data); 
        }
        return view('employee.show',compact('data','employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = employee::find($id);
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=',Session::get('loginId'))->first();
            //dd($data); 
        }
        return view('employee.edit',compact('data','employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'education' => 'required',
            'salary' => 'required',
            



        ]);
        // dd($request->all());
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email= $request->input('email');
        $address = $request->input('address');
        $dob = $request->input('dob');
        $gender = $request->input('gender');
        $education = $request->input('education');
        $salary = $request->input('salary');

        $employee = Employee::find($id);
        $employee->name = $name;
        $employee->phone = $phone;
        $employee->email = $email;
        $employee->address = $address;
        $employee->dob = $dob;
        $employee->gender = $gender;
        $employee->education = $education;
        $employee->salary = $salary;
        $employee->save();
       
        return redirect()->back()->with('message','Employee updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->back()->with('message','employee deleted sucessfully'); 
    }
}
