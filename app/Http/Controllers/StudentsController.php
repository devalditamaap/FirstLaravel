<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        // return view('students.index', ['students' => 'students']);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'user_id' => 'required'
        ]);

        Student::create($request->all());
        // Student::create([
        //     'nama' => $request -> nama,
        //     'user_id' => $request -> user_id,
        //     'jurusan' => $request -> jurusan,
        //     'email' => $request -> email
        // ]);

        // $student = new Student; 
        // $student->user_id = $request->user_id;
        // $student->nama = $request->nama;
        // $student->jurusan = $request->jurusan;
        // $student->email = $request->email;


        // $student->save();

        return redirect('/students')->with('status', 'Candidates Successfully Added!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'user_id' => 'required|size:9'
        ]);

        Student::where('id', $student -> id)
                 ->update([
                    'nama' => $request->nama,
                    'user_id' => $request->user_id,
                    'jurusan' => $request->jurusan,
                    'email' => $request->email
                 ]);
                 return redirect('/students')->with('status', 'Candidates Edited Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student -> id);
        return redirect('/students')->with('status', 'Candidates Delete Successfully!!');
    }
}
