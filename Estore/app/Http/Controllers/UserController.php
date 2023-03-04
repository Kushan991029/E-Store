<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;

use Session;

class UserController extends Controller
{
    function login(Request $request){

        $user = User::where('email',$request->email)->first();

        if($user){
            if(hash::check($request->input('password'),$user->password)){

                $request->session()->put('loginId',$user->id);

                if($user->role == 'admin'){
                    return view('adminDashboard');
                }
                else if($user->role == 'employee'){
                    return view('employeeDashboard');
                }
                else{
                    return view('customerDshboard');
                }
            }
            else{
                return back()->with('fail','Password does not matches');
            }
        }
        else{
            return back()->with('fail','This email is not registered');
        }
    }

    public function register(){
        return view('registration');
    }

    public function adduser(Request $request){
      
        $request->validate([

            'name'=>'required',
            'email'=>'required|email|unique:users',
            'address'=>'required',
            'mobile' => [
                'required', 
                'regex:/^(^\+94|62|^08)(\d{3,4}-?){2}\d{3,4}$/',
                'min:10', 
              ],
           
              'password' => [
                'required',
                'min:6',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
            ],
            'gender'=>'required'
        ]);
     
        $user = new User;
        $user->name = $request->input('name');
        $user->role = "customer";
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->mobile = $request->input('mobile');
        $user->gender = $request->input('gender');
        $user->password = Hash::make($request->input('password'));
        $res = $user->save();

        if($res){    
            return view('login')->with('success','You have signed in successful');
        }else{
            return back()->with('fail','Something went wrong');
        }


    }

    public function admin(){
        return view('adminDashboard');
    }

    public function products(){
        $data = Product::get();   
        return view('adminProductManagement',compact('data'));
    }

    public function newproduct(){
        return view('addNewProduct');
    }

    public function employees(){
        $data = User::where('role','=','employee')->get(); 
        return view('adminEmployeeManagement',compact('data'));
    }

    public function newemployee(){
        return view('addNewEmployee');
    }

    public function addemployee(Request $request){
        $request->validate([

            'name'=>'required',
            'email'=>'required|email|unique:employees',
            'address'=>'required',
            'mobile' => [
                'required', 
                'regex:/^(^\+94|62|^08)(\d{3,4}-?){2}\d{3,4}$/',
                'min:10', 
              ],
           
              'password' => [
                'required',
                'min:6',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
            ],
            'gender'=>'required'
        ]);
     
        $employee = new User;
        $employee->name = $request->input('name');
        $employee->role = "employee";
        $employee->email = $request->input('email');
        $employee->gender = $request->input('gender');
        $employee->address = $request->input('address');
        $employee->mobile = $request->input('mobile'); 
        $employee->password = Hash::make($request->input('password'));
        $res = $employee->save();

        if($res){    
            $data = User::where('role','=','employee')->get();
            return view('adminEmployeeManagement',compact('data'))->with('success','Employee added successful');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }

    public function deleteemployee($id){
        $deletedata = User::where('id','=',$id)->delete();

        if($deletedata){
            $data = User::where('role','=','employee')->get();
            return view('adminEmployeeManagement',compact('data'))->with('success','Employee deleted successful');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
    
    public function showemployee($id){
        $data = User::where('id','=',$id)->first();
        return view('employeeDetails',compact('data'));
    }

    public function editemployee($id){
        $data = User::where('id','=',$id)->first();
        return view('employeeEdit',compact('data'));
    }

    public function updateemployee(Request $request){
        
        $user = User::where('id',$request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
        ]);

        if($user){
            error_log('abc');
            $data = User::where('role','=','employee')->get();
            return view('adminEmployeeManagement',compact('data'))->with('success','Employee Edited successful');
        }else{
            error_log($user);
            return back()->with('fail','Employee data not updated successfully');
        }
    }

    public function customer(){
        return view('customerDshboard');
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }
    }
}
