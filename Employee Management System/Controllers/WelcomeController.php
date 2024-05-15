<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class WelcomeController extends Controller
{


    public function welcome(){
      
        $crud = User::all();
        return view('welcome', compact('crud'));
    
 

}
public function edit(string $id)
{
    $crud = User::findOrFail($id);
    if (!$crud) {
        return redirect()->back()->with('error', 'User not found');
    }
    return view('edit', compact('crud'));
}
public function update(Request $request, string $id)
{
    $crud = User::find($id);
    $crud->fname = $request->input('name');
    $crud->email = $request->input('email');
    $crud->dob = $request->input('dob');
    $crud->gender = $request->input('gender');
    $crud->age = $request->input('age');
    $crud->uname = $request->input('uname');
    $crud->password = $request->input('password');
    $crud->save();
    
    return redirect('/welcome')->with("emsg", "User details updated successfully");
}

public function destroy(string $id){

    $crud=User::find($id);

 $crud->delete();

    return redirect('/welcome')->with('dmsg',"User deleted successfully");

}

}

