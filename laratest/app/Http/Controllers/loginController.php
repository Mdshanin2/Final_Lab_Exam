<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Employee;

class loginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function verify(Request $req){
        $emp = Employee::where('username', $req->username)
        ->where('password', $req->password)
        ->first();
     

        //$user = User::all();
        $user  = User::where('username', $req->username)
                        ->where('password', $req->password)
                        ->first();
     echo $user['type'];
        //echo count($user);
    	 if(count((array)$user) > 0){

            $req->session()->put('username', $req->username);
            $req->session()->put('type', $req->username);
            
    		return redirect('/home');
        }
        elseif (count((array)$emp) > 0)
        {
            $req->session()->put('username', $req->username);
           // $req->session()->put('type', $req->username);
            
    		return redirect('/emphome');

        }
        
        else{
            $req->session()->flash('msg', 'invalid username/password');
    		return redirect('/login');
    	}
    }
}
