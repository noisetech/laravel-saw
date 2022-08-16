<?php

namespace App\Http\Controllers\Admin;

use App\Crips;
use App\Http\Controllers\Controller;
use App\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index(){
        $data['kriteria'] = Kriteria::orderBy('nama_kriteria', 'ASC')->get();

        return view('pages.kriteria.index', $data);
    }

    public function store(Request $request){
        $data = $request->all();

        Kriteria::create($data);

        return redirect()->route('kriteria')
        ->with('status', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $item = Kriteria::find($id);

        return view('pages.kriteria.edit', [
            'item' => $item
        ]);
    }

    public function show($id){
        $crips = Crips::where('kriteria_id', $id)->get();
        $item = Kriteria::find($id);

        return view('pages.kriteria.show', [
            'crips' => $crips,
            'item' => $item
        ]);
    }

    public function update(Request $request, $id){
        $item = Kriteria::find($id);

        $data = $request->all();

        $item->update($data);

        return redirect()->route('kriteria')
        ->with('status', 'Data berhasil diubah');
    }

    public function destroy($id){
        $item = Kriteria::find($id);

        $item->delete();

        return redirect()->route('kriteria')
        ->with('status', 'Data berhasil dihapus');
    }
}
