<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Symptom;
use Illuminate\Http\Request;

class SymptomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $symptoms = Symptom::all();
        return view('admin.symptoms.index', compact('symptoms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.symptoms.create');
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
            'code' => 'required',
            'symptom' => 'required',
        ]);

        Symptom::create($request->all());
        return redirect('admin/symptoms')->with('toast_success', 'Data Gejala Berhasil Ditambahkan');
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
    public function edit(Symptom $symptom)
    {
        return view('admin.symptoms.edit', compact('symptom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Symptom $symptom)
    {
        $request->validate([
            'code' => 'required',
            'symptom' => 'required',
        ]);

        Symptom::where('id', $symptom->id)->update([
            'code' => $request->code,
            'symptom' => $request->symptom
        ]);
        return redirect('admin/symptoms')->with('toast_success', 'Data Gejala Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Symptom::destroy($id);
        return redirect('admin/symptoms')->with('toast_success', 'Data Gejala Berhasil Dihapus');
    }
}
