<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class Mahasiswa2Controller extends Controller
{
    protected $guarded = ['id'];
    protected $fillable = ['nim','nama','umur','alamat','nilai'];
    public function edit($id)
    {
        $model = Mahasiswa::find($id);
        return view('mahasiswa/editnilai',compact('model'));
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
        $model = Mahasiswa::find($id);
        // $model->nim = $request->nim;
        // $model->nama = $request->nama;
        // $model->umur = $request->umur;
        // $model->alamat = $request->alamat;
        $model->nilai = $request->nilai;
        $model->save();
        return redirect('/mahasiswa');
    }
}
