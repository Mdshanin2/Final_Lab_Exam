<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; // using the REQUEST library
use App\Http\Requests\studentRequest;// form validation using requests
use Validator;
use App\Employee;// accessing model for user table 

class homeController extends Controller
{

    public function index(Request $req){


        return view('home.index', ['username'=> $req->session()->get('username')]);
    	
    }

    public function stdlist(){
    	//$students = $this->getStudentlist();

        $students = Employee::all();
    	return view('home.stdlist')->with('students', $students);
    }

	public function show($id){
    	
        $std = Employee::find($id);
        return view('home.show', $std);
    }

    public function create(){
    
    	return view('home.create');
    }

    public function store(Request $req){   //post create          // validation done here 
        
      
        // $req->validate([
        //     'name' => 'required|min:3',
        //     'username'=> 'required',
        //     'password' => 'required|min:3',
        //     'company'=> 'required',
        //     'contact'=> 'required'
        // ])->validate();


          
                $user = new Employee();

                $user->employer_name   = $req->name;
               $user->company         = $req->company;
                $user->contact_number  = $req->contact;
                $user->username     = $req->username;
                $user->password     = $req->password;
              
                if($user->save()){               // inserts in to the database using the save() method
                    return redirect()->route('home.stdlist');
                }

            else{
                echo "error";
            }
        

    	//return redirect()->route('home.stdlist');
    }

    public function edit($id){
    	
        $std = Employee::find($id);         // used to find the id and return the row with all values
    	return view('home.edit', $std);
    }

    public function update($id, Request $req){
    	   
        $user = Employee::find($id);

        $user->employer_name   = $req->name;
        $user->company         = $req->company;
        $user->contact_number  = $req->contact;
        $user->username     = $req->username;
        $user->password     = $req->password;
     

        $user->save();

    	return redirect()->route('home.stdlist');
    }

    public function delete($id){
        
        $user = Employee::find($id);
        $user->delete();
    	return redirect()->route('home.stdlist');
    }

    public function destroy(){
    	
    	//return view('home.stdlist');
    }

    private function getStudentlist(){

    	return [
    		['id'=> 1, 'name'=> 'alamin', 'cgpa'=>1.2, 'email'=> 'alamin@aiub.edu'],
    		['id'=> 2, 'name'=> 'CYZ', 'cgpa'=>2.2, 'email'=> 'CYZ@aiub.edu'],
    		['id'=> 3, 'name'=> 'XYZ', 'cgpa'=>3.2, 'email'=> 'XYZ@aiub.edu'],
    		['id'=> 4, 'name'=> 'ABC', 'cgpa'=>3.4, 'email'=> 'ABC@aiub.edu'],
    		['id'=> 5, 'name'=> 'PQE', 'cgpa'=>3.6, 'email'=> 'PQE@aiub.edu'],
    		['id'=> 6, 'name'=> 'PQR', 'cgpa'=>4, 'email'=> 'PQR@aiub.edu'],
    		['id'=> 7, 'name'=> 'asd', 'cgpa'=>2.5, 'email'=> 'asd@aiub.edu']
    	];
    }


}
