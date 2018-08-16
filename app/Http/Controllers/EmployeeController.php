<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employee = new Employee;
        $datas = $employee->all();
        return view('employee.index')->with('datas', $datas); //ngepass variabel ke view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $employee = new Employee;

        // $this->validate()

        $request->validate([
            'id_pegawai' => 'required',
            'nama' => 'required|min:3',
            'alamat' => 'required|min:3',
            'jenis_kelamin' => 'required|min:3'
        ]);
        
        $employee = new Employee;
        
        $employee->id_pegawai = $request->id_pegawai;
        $employee->nama = $request->nama;
        $employee->alamat = $request->alamat;
        $employee->jenis_kelamin = $request->jenis_kelamin;

        $employee->save();

        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee = new Employee;

        $employeeData = $employee->where('id', $id)->first();

        return view('employee.edit')->with('employee', $employeeData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'id_pegawai',
            'nama',
            'alamat',
            'jenis_kelamin'
        ]);

        $employee = new Employee;
        
        $employee->id_pegawai = $request->id_pegawai;
        $employee->nama = $request->nama;
        $employee->alamat = $request->alamat;
        $employee->jenis_kelamin = $request->jenis_kelamin;

        $employee->save();

        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
