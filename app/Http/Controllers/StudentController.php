<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.student', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.make');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nis' => 'required|max:10',
            'nama' => 'required|max:100',
            'tmplahir' => 'max:50',
            'tgllahir' => 'nullable|date|date_format:Y-m-d',
            'kota' => 'max:120'
        ]);

        $validatedData['tahunmasuk'] = $validatedData['tahunmasuk'] ??  '2017';
        $validatedData['idangkatan'] = $validatedData['idangkatan'] ??  '24';
        $validatedData['idkelas'] = $validatedData['idkelas'] ??  '90';
        $validatedData['nama'] = strtoupper($validatedData['nama']);

        Student::create($validatedData);

        return redirect('/student')->with('success', 'You did it man!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
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
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $rules = [
            'nis' => 'required|max:10',
            'nama' => 'required|max:100',
            'tmplahir' => 'max:50',
            'tgllahir' => 'nullable|date|date_format:Y-m-d',
            'kota' => 'max:120'
        ];

        $validatedData = $request->validate($rules);
        $validatedData['nama'] = strtoupper($validatedData['nama']);

        Student::where('nis', $student->nis)
            ->update($validatedData);

        return redirect('/student')->with('success', 'Change is normal.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->nis);

        return redirect('/student')->with('success', 'I hope you\'re happy now');
    }
}
