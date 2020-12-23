<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; // using the REQUEST library
use App\Http\Requests\studentRequest;// form validation using requests
use Validator;
use App\Job;// accessing model for user table 

class empController extends Controller
{

    public function index(Request $req){

        $students = Job::all();
        return view('home.joblist', ['username'=> $req->session()->get('username')])->with('students', $students);
    	
    }

    public function stdlist(){
    	//$students = $this->getStudentlist();

        $students = Job::all();
    	return view('home.joblist')->with('students', $students);
    }

	public function show($id){
    	
        $std = Job::find($id);
        return view('home.show', $std);
    }

    public function create(){
    
    	return view('home.job_create');
    }

    public function store(Request $req){   //post create          // validation done here 


          
                $user = new Job();

               
               $user->company      = $req->company;
                $user->job_title  = $req->job_title;
                $user->location    = $req->location;
                $user->salary     = $req->salary;
              
                if($user->save()){               // inserts in to the database using the save() method
                    return redirect()->route('emp.index');
                }

            else{
                echo "error";
            }
        

    	//return redirect()->route('home.stdlist');
    }

    public function edit($id){
    	
        $std = Job::find($id);         // used to find the id and return the row with all values
    	return view('home.job_edit', $std);
    }

    public function update($id, Request $req){
    	   
        $user = Job::find($id);

       
        $user->company      = $req->company;
        $user->job_title  = $req->job_title;
        $user->location    = $req->location;
        $user->salary     = $req->salary;
     

        $user->save();

    	return redirect()->route('emp.index');
    }

    public function delete($id){
        
        $user = Job::find($id);
        $user->delete();
    	return redirect()->route('emp.index');
    }

    public function destroy(){
    	
    	//return view('home.stdlist');
    }

   


}
