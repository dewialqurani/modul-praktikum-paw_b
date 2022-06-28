<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    protected $guarded = ['id'];
    protected $fillable = ['nim','nama','umur','alamat','nilai'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')){
            $datas = Mahasiswa::where('nim','LIKE','%'.$request->search.'%')->paginate(5);
        }
        else{
            $datas = Mahasiswa::all();
        }

        return view('mahasiswa/mhs', ["judul" => "Data mahasiswa"], compact('datas'));
    }

    public function nim($nim){
        $datas = Mahasiswa::where('nim',$nim)->first();
        return view('mahasiswa/nim', ["judul"=> "Data berdasarkan NIM"],compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Mahasiswa;
        return view('mahasiswa/create',compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Mahasiswa;
        $model->nim = $request->nim;
        $model->nama = $request->nama;
        $model->umur = $request->umur;
        $model->alamat = $request->alamat;
        // $model->nilai = $request->nilai;
        $model->save();
        return redirect('/mahasiswa');

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
        $model = Mahasiswa::find($id);
        return view('mahasiswa/edit',compact('model'));
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
        $model->nim = $request->nim;
        $model->nama = $request->nama;
        $model->umur = $request->umur;
        $model->alamat = $request->alamat;
        // $model->nilai = $request->nilai;
        $model->save();
        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Mahasiswa::find($id);
        $model->delete();
        return redirect('mahasiswa');
    }
}
