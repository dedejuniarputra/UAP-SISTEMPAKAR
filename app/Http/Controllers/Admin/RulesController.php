<?php

namespace App\Http\Controllers\Admin;

use App\Disease;
use App\Http\Controllers\Controller;
use App\Rule;
use App\Symptom;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rules = Rule::all();
        return view('admin.rules.index', compact('rules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diseases = Disease::latest()->get();
        $symptoms = Symptom::latest()->get();
        return view('admin.rules.create', compact('diseases', 'symptoms'));
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
            'disease_id' => 'required',
            'symptom_id' => 'required',
            'probability' => 'required',
        ]);

        Rule::create([
            'disease_id' => $request->disease_id,
            'symptom_id' => $request->symptom_id,
            'probability' => $request->probability
        ]);

        return redirect('/admin/rules')->with('toast_success', 'Data Rule Berhasil Ditambahkan');
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
    public function edit(Rule $rule)
    {
        $diseases = Disease::latest()->get();
        $symptoms = Symptom::latest()->get();
        return view('admin.rules.edit', compact('rule', 'diseases', 'symptoms'));
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
            'disease_id' => 'required',
            'symptom_id' => 'required',
            'probability' => 'required',
        ]);

        Rule::where('id', $id)->update([
            'disease_id' => $request->disease_id,
            'symptom_id' => $request->symptom_id,
            'probability' => $request->probability
        ]);

        return redirect('/admin/rules')->with('toast_success', 'Data Rule Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rule::destroy($id);
        return redirect('/admin/rules')->with('toast_success', 'Data Rule Berhasil Dihapus');
    }
}
