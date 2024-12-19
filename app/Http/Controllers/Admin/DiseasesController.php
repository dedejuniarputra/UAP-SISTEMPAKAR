<?php

namespace App\Http\Controllers\Admin;

use App\Disease;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiseasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseases = Disease::all();
        return view('admin.diseases.index', compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.diseases.create');
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
            'name' => 'required',
            'probability' => 'required',
            'appear' => 'required',
            'information' => 'required',
            'suggestion' => 'required',
        ]);

        Disease::create($request->all());
        return redirect('admin/diseases')->with('toast_success', 'Data Penyakit Berhasil Ditambahkan');
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
    public function edit(Disease $disease)
    {
        return view('admin.diseases.edit', compact('disease'));
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
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'probability' => 'required',
            'appear' => 'required',
            'information' => 'required',
            'suggestion' => 'required',
        ]);

        Disease::where('id', $id)->update([
            'code' => $request->code,
            'name' => $request->name,
            'probability' => $request->probability,
            'appear' => $request->appear,
            'information' => $request->information,
            'suggestion' => $request->suggestion,
        ]);

        return redirect('admin/diseases')->with('toast_success', 'Data Penyakit Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Disease::destroy($id);
        return redirect('/admin/diseases')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
