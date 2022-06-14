<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{

	public function blockEmployee($id){
		$employee = Admin::find($id);

    	$employee->admin_status = 0;
    	$employee->save();
    	return redirect("employees");
	}

	public function unblockEmployee($id){
		$employee = Admin::find($id);

    	$employee->admin_status = 1;
    	$employee->save();
    	return redirect("employees");
	}

    public function index()
    {
       $employees = Admin::all()->where('admin_status', '<', 2);
       return view('admins/employees',['employees'=>$employees]);
    }

    public function create(){

    }

    public function store(Request $request)
    {
    	$all_employee = Admin::all()->where('admin_status', 1);

    	$rules =[
    		'employee_name'=> 'required | min:3',
    		'employee_phone'=> ['required', 'regex:/^(\\+961|0)\\d{8,10}$/'],
    		'employee_email'=> ['required', 'regex:/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/']
    	];

    	$message = [
    		'employee_name.required' => '* Name is required',
    		'employee_name.min'=> '* Name must be at least 3 characters long',
    		'employee_phone.required' => '* Phone number is required',
    		'employee_phone.regex' => '* The phone number you just entered is not valid',
    		'employee_email.required' => '* Email is required',
    		'employee_email.regex'=> '* The email you just entered is not in the correct format'
    	];

    	$validator = Validator::make($request->all(), $rules, $message);

    	if($validator->fails()){
    		return redirect()->back()->withErrors($validator)->withInput();
    	}
    	else{

    		$msg_phone = '* Phone number already exists';
    		$msg_email = '* Email already exists';

  			$name = $request->employee_name;
  			$phone = $request->employee_phone;
  			$email = $request->employee_email;

  			if(count(Admin::all()->where('admin_email', $email)) != 0)
  				return redirect()->back()->withErrors(['message'=>$msg_email])->withInput();

  			if(count(Admin::all()->where('admin_phone', $phone)) != 0)
  				return redirect()->back()->withErrors(['message'=>$msg_phone])->withInput();

        	Admin::create([
            'admin_name' => $name,
            'password' => Hash::make(123), // default password is 123
            'admin_phone' => $phone,
            'admin_email' => $email,
            'admin_status' => 1 // 1 is admin, 0 is employee

        	]);

        	return redirect('employees');
    	}
    }

    public function show($id)
    {
      	$emp = Admin::find($id);
      	echo $emp;
    }

    public function edit($id){

    }

    public function update(Request $request, $id){
    	dd('update');
    }

    public function destroy(){
    	dd('delete');
    }


}
