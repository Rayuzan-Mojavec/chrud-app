<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $employees = Employee::all();
        return view('employees.employee', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('employees.make');
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
            'nip' => 'required|max:18',
            'nama' => 'required|max:100',
            'tmplahir' => 'max:50',
            'kota' => 'max:255',
            'tgllahir' => 'nullable|date|date_format:Y-m-d'
        ]);

        $validatedData['nik'] = $validatedData['nik'] ??  '-';
        $validatedData['bagian'] = $validatedData['bagian'] ??  'Akademik';
        $validatedData['nikah'] = $validatedData['nikah'] ??  'Belum';
        $validatedData['aktif'] = $validatedData['aktif'] ??  '1';
        $validatedData['kelamin'] = $validatedData['kelamin'] ??  'L';




        Employee::create($validatedData);

        return redirect('/employee')->with('success', 'You did it man!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {

        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $rules = [
            'nip' => 'required|max:18',
            'nama' => 'required|max:100',
            'tmplahir' => 'max:50',
            'kota' => 'max:255',
            'tgllahir' => 'date|date_format:Y-m-d'
        ];

        $validatedData = $request->validate($rules);

        Employee::where('nip', $employee->nip)
            ->update($validatedData);

        return redirect('/employee')->with('success', 'You did it man!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->nip);

        return redirect('/employee')->with('success', 'I hope you\'re happy now');
    }
}
