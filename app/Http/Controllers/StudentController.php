<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
    public function view()
    {
        $datas=Student::get();
        return view('view', compact('datas'))->withtitle('Students List');
    }


    public function create()
    {
        return view('addform');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'age' => 'required|numeric',
            'address' => 'required',
            'mail'=>'required|unique:student_details|email'
        ]);

        $NewStudent=new Student;
        $NewStudent->name = $request->name;
        $NewStudent->age = $request->age;
        $NewStudent->address =$request->address;
        $NewStudent->mail = $request->mail;
        $NewStudent->save();
        return redirect('/view'); 
    }
    

    public function update($id)
    {
        $datas=Student::where('id', $id)->get();
        if ($datas->count()>0) {
            return view('update', compact('datas'))->withtitle('Update');
        } else {
            return redirect('/');
        }
    }


    public function updateStore(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'age' => 'required',
            'address' => 'required',
            'mail'=>'required|email|'
        ]);
        $studentData = array('name' => $request->name,'age' => $request->age,'address' => $request->address,'mail' => $request->mail);
        Student::where("id", $id)->update($studentData);

        return redirect('view');
    }


    public function destroy($id)
    {
        $deldata = Student::find($id);
        if ($deldata) {
            $deldata->delete();
            return redirect('view');
        }
        return ("<h1>Student Identification Does not match</h1>");
    }


}
