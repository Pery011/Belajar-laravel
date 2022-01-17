<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function create ()
     {
         return view('admin.lecturer.create');
    }
    public function index ()
     {
         //select * from lecturers
         $lecturers = lecturer::all(); 
        //  dd($Lecturer);
        

         return view('admin.lecturer.index',compact('lecturers'));
    }


    public function store(Request $request)
    {
        Lecturer::create ($request->all());

        // lecturer::create([
        //  "nidn" => $request->input("nidn"),
        //  "nama" => $request->input("nama"),
        //  "address" => $request->input("address"),
        //  "phone" => $request->input("phone"),
        // ]);

        // return redire()->route('index-lecture')->with('status',  'Sukses Insert Data');
    return redirect()->route('index-lecture')->with('status','sukses insert data');

    }

}
