<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index(){
          $students = Student::orderby('id','Desc') ->paginate(10);

        return view('index',['students' => $students]);
    }
 public function register( Request $request){
            if($request->file('profile_pic')){
            $file= $request->file('profile_pic');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/img'),$filename);
            $student['profile_pic']=$filename;
        }
  $student = Student::create(
    [
        'firstname' => $request ->firstname,
        'lastname' => $request ->lastname,
        'email'=> $request->email,
        'address'=>$request->address,
        'profile_pic'=>$filename,
            ]);
   return back();
 }
  public function edit($id){
    $student = Student::find($id);
  return view('edit',['student'=> $student]);
  }
  public function update(Request $request,$id ){
    if($request->file('profile_pic')){
      $file= $request->file('profile_pic');
      $filename= date('YmdHi').$file->getClientOriginalName();
      $file-> move(public_path('public/img'),$filename);
      $student['profile_pic']=$filename;
  }
    $student = Student::find($id);
    $student->update([
        'firstname' => $request ->firstname,
        'lastname' => $request ->lastname,
        'email'=> $request->email,
        'address'=>$request->address,
        'profile_pic'=>$filename,

    ]);    
    return redirect()->route('home');

  }
public function delete($id){
    // $student = Student::find($id)->delete($id);
    
    $student = Student::destroy($id);
    return back();
}
public function view($id){
    $student = Student::find($id);
    // $student['profile_pic']= url::asset('public/img/'.$student->profile_pic)";
    // $filename;

    // $student->profile_pic = url::asset('public/img/'.$student->profile_pic)";

    return view('view',['student' => $student]);
}



}
