<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cabang;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //all
        // $cabang = new Cabang;
        // $datas = $cabang->all();
        // return view('cabang.index')->with('datas', $datas); //ngepass variabel ke view

        //get
        $data['datas'] = Cabang::get();
        return view('cabang.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cabang.create');
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
        $request->validate([
            'nama_cabang' => 'required|min:3',
            'alamat' => 'required|min:3'
        ]);
        
        $cabang = new Cabang;
        
        $cabang->nama_cabang = $request->nama_cabang;
        $cabang->alamat = $request->alamat;

        $cabang->save();

        return redirect()->route('cabang.index');
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
        $data['cabang'] = Cabang::find($id);
        return view('cabang.edit',$data);
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
        //validate
        $this->validate($request,[
            'nama_cabang' => 'required|min:3',
            'alamat' => 'required|min:3'
        ]);

        //request data
        //definisi data
        $req = [
            'nama_cabang' => $request->nama_cabang,
            'alamat' => $request->alamat
        ];

        $data = Cabang::where('id',$id)->update($req);

        return redirect()->route('cabang.index');
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
        Cabang::where('id',$id)->delete();
        return response()->json($id);
    }
}
