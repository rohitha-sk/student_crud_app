<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function display_students(){
        $students = DB::select('select * from students');
       
     return view('student.added_students', compact('students'));

    
 
    }

    public function show_stud_form(){
        return view('student.student_form');
    }

    public function save_student_record(Request $request){
        $student = new Student();
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->status = $request->input('status');
        $student->image = $request->input('image');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/student_imgs',$filename);
            $student->image = $filename;
    
        }else{
            return $request;
            $student->image = '';
        }

        $student->save(); 
        
        return redirect('/added_students')->with('status','Data saved Successfully!');

    }

    public function edit_stud_record($id){
       
        $find_stud = Student::find($id);
        $stud_id = $find_stud->id;

        $edit_stud_profile = DB::table('students')->where('id', $stud_id)->first();

       return view('student.edit_stud_form',compact('edit_stud_profile') ); 

    }

    public function update_stud_record(Request $request,$id){
        $update_stud_data = Student::find($id);
        $update_stud_data->name = $request->input('name');
        $update_stud_data->age = $request->input('age');
        $update_stud_data->status = $request->input('status');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/student_imgs',$filename);
            $update_stud_data->image = $filename;
        }
    
        $update_stud_data->save();

        return redirect('/added_students')->with('status','Record Updated successfully!');
    
    }

    public function delete_stud_record($id){
        $stud_data = Student::find($id);
        $stud_data->delete(); 
        return redirect('/added_students')->with('status','One Record deleted successfully!');
   
    }
}
