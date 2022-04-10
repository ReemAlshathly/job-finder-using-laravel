<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\job;
use Illuminate\Support\Facades\Validator;
class JobsController extends Controller
{
    //
    public function listAll(){
        return view('admin.jobs.list_all');
    }

    public function Addjob(){
        return view('admin.jobs.create');
    }


      /*  echo $request->input('email_username');
        echo "<br>";
        echo $request->has('user_pass');*/

        /*print_r($request->input());
        echo "<br>";
        echo $request->has('user_pass');
        echo"<br>";
        if(!$request->filled('user_pass')) echo "empty data";
        //$request->file('profile_image');
      $request->hasFile('profile_image');
        
        //echo $request->email_username;
        //print_r($request->input());
        */

    
    

    public function createjob(Request $request){

        Validator::validate($request->all(),[
            'title'=>['required','min:6','max:15'],
            'company'=>['required' ],
            'location'=>['required','min:4'],
            'subject'=>['required','min:2'],
            'experinces'=>['required'],
            'description'=>['required','min:10'],
            'salary'=>['required']

        ],[
            'title.required'=>'title is required',
            'title.min'=>'can not be less than 3 letters', 
            
            'company.required'=>'company is required',
            'location.required'=>'location is required',
            'location.min'=>'location should not be less than 4',
            'subject.required'=>'subject is required',
            'subject.min'=>'subject should not be less than 2',
            'experinces.required'=>'experinces is required',
            'description.required'=>'description is required',
            'description.min'=>'description should not be less than 10',
            'salary.required'=>'salary is required'


        ]);

        $u=new job();
        $u->title=$request->title;
        $u->Location=$request->location;
        $u->subject=$request->subject;
        $u->roles=$request->description;
        $u->salary=$request->salary;
        $u->year_of_experince=$request->experinces;
        $u->company=$request->company;
        if($u->save())
        return redirect()->route('/showall_job')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }
    
}
