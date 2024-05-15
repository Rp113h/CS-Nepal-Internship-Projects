<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Redirect;

class RegisterController extends Controller
{
    public function reg(){
  
                return view('register');
        
    }


    public function regis(Request $request){
        $fname = $request->name;
        $email = $request->email;
        $dob = $request->dob;
        $age = $request->age;
        $gender = $request ->gender;
        $uname = $request->uname;
        $password=bcrypt($request->password);
      


       // $request->validate([
       //     'fname'=>'required',
       //     'email'=>'required',
       //     'dob'=>'required',
       //     'age'=>'required',
       //     'gender'=>'required',
       //     'uname'=>'required',
       //     'password'=>'required'
           
       //  ]);
        $insert=array("fname"=> $fname,"email"=> $email,"dob"=> $dob,"age"=> $age,"gender"=> $gender, "uname"=> $uname,"password"=> $password);
        $emailv= DB::select("SELECT * FROM register WHERE email= '$email' OR uname='$uname'");

       if($emailv!=NULL){
        return Redirect::back()->with('regr',"User Data Repeated");
       }
       else{
         $input = DB::table('register')->insert($insert);
        if($input){
           return redirect('welcome')->with('regs',"User entry Successful");

        }else{
            return Redirect::back()->with('regf',"User entry Failed");
        }
       }


    }
}
