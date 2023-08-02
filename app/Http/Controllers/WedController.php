<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class WedController extends Controller
{
    public function Students(){
        $students = Students::all();
        return view("students",[
            "students"=>$students
        ]);
    }
public function AddStudents(){
        $students = Students::all();
        return view("add",[
            "students"=>$students
        ]);
}
public function StudentAdd(Request $request){
    $request->validate([
        "name"=>"required",
        "age"=>"required",
        "address"=>"required",
        "telephone"=>"required|min:10|max:20",
    ],[
        "required"=>"Vui lòng điền đầy đủ thông tin",
        "min"=>"Phải nhập tối thiểu :min",
        "max"=>"Nhập giá trị không vượt quá :max"
    ]);
        Students::create([
            "name"=>$request->get("name"),
            "age"=>$request->get("age"),
            "address"=>$request->get("address"),
            "telephone"=>$request->get("telephone"),
        ]);
        return redirect()->to("/");
    }


}
