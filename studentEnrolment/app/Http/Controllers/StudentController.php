<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class StudentController extends Controller
{
    public function allStudent(){
        $allStudent = DB::table('add_students')->get();

        return view('pages.allStudent', ['allStudent' => $allStudent]);
    }

    //Student added database
    public function saveStudent(Request $request){
        //Field requirement
         $this->validate($request,[
            "name"=>"required",
            "roll"=>"required",
            "department"=>"required",
            "password"=>"required",
            "phone"=>"required",
            "image"=>"required"
    ]);

    	$data=array();

    	$data["name"]=$request->name;
    	$data["roll"]=$request->roll;
    	$data["father_name"]=$request->father_name;
    	$data["mother_name"]=$request->mother_name;
    	$data["email"]=$request->email;
    	$data["phone"]=$request->phone;
    	$data["department"]=$request->department;
    	$data["password"]=md5($request->password);


    	$image=$request->file("image");
    	if($image){
    		$image_name=str_random(20);
    		$text=strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.".".$text;
    		$upload_path="image/";
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path,$image_full_name);
    		if($success){
    			$data["image"]=$image_url;

    			DB::table("add_students")->insert($data);

    			return redirect("/add-student")->with("msg", "Student Added Successfully");
    		}else{
                return redirect("/add-student")->with("msg", "Student Can Not be added");
            }
    	}
    }

    public function viewStudent($id){
        $student_info = DB::table('add_students')
        ->where(['add_students.id'=>$id])
        ->get();

        return view('pages.viewPage', ['student_info' => $student_info]);
    }

    public function editStudent( $id){
        $edit_student = DB::table('add_students')
        ->where(['add_students.id'=>$id])
        ->get();
        return view('pages.editStudent', ['edit_student' => $edit_student]);
    }

    public function updateStudent(Request $request, $id){
        $info = array();

        $info["name"] =$request->name;
        $info["roll"] =$request->roll;
        $info["father_name"] =$request->father_name;
        $info["mother_name"] =$request->mother_name;
        $info["email"] =$request->email;
        $info["phone"] =$request->phone;
        /*$info["image"] =$request->image;
        $info["department"] =$request->department;*/
        $info["password"] =$request->password;

        DB::table("add_students")
        ->where("id", $id)
        ->update($info);

        return Redirect("/all-student");
    }

    public function deleteStudent($id){
        DB::table("add_students")
        ->where("id", $id)
        ->delete();
        return Redirect("/all-student");
    }


}
