<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    private $students = [
        1 => [
            "UserName" => "Phước",
            "Age" => "21",
        ],
        2 => [
            "UserName" => "Phi",
            "Age" => "20",
        ],
        3 => [
            "UserName" => "Phúc",
            "Age" => "20",
        ],
        4 => [
            "UserName" => "Sang",
            "Age" => "20",
        ],
    ];
    
    public function index(){
        return view('students.index',['students'=>$this->students]);
    }
    public function create(){
        return view('students.create');
    }
    public function store(Request $req){
        $name = $req->input('Name');// lấy name của input 
        $password=$req->input('Password');// lấy name của input
        return "$name $password";
    }
    public function show(Request $req)
    {
        $id=$req->id;  // Lấy giá trị ID từ URL
        // Sử dụng giá trị $id để lấy thông tin của sinh viên cần show
        if(isset($this->students[$id])){
            $student = $this->students[$id];
            return view('students.show', ['students' => $student]);
        }else {
            return "Không tìm thấy học sinh có ID là $id";// vd: id=5
        }
    }
    public function edit(Request $req){
        $id=$req->id; // Lấy giá trị ID từ URL
        // Sử dụng giá trị $id để lấy thông tin của sinh viên cần chỉnh sửa      
        if(isset($this->students[$id])){
            $student = $this->students[$id];
            return view('students.edit', ['students' => $student,'id'=>$id]);
        }else {
            return "Không tìm thấy học sinh có ID là $id";// vd: id=5
        }
    }
    public function update(Request $req){
        return "Đã update thành công: ".$req->userName." ".$req->age;
    }
    public function destroy(Request $req){
        $id = $req->id; // Lấy giá trị ID từ URL
        // Sử dụng giá trị $id để lấy thông tin của sinh viên cần xóa    
        $student = $this->students[$id];
        return "Đã xóa thành công học sinh Tên: ".$student['UserName']." và ".$student['Age']." tuổi";// xóa thành công
    }
}
