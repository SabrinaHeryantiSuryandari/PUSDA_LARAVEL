<?php

namespace App\Http\Controllers;

use App\Models\aset;
use App\Models\Pemilik;
use App\Models\pemilik as ModelsPemilik;
use Illuminate\Http\Request;

use App\Http\Controllers\AsetController;

class PemilikController extends Controller
{
    public function index()
    {
    	// mengambil semua data pengguna
    	// $pemilik = Pemilik::all();
        $asets = aset::all();

        $pemilik = Pemilik::with('aset')->paginate(2);
    	// return data ke view
    	return view('pemilik', compact('pemilik')
        );
    }

    public function show(Pemilik $pemilik)
    {
        return view('admin.show',compact('pemilik'));
    }

    public function create(){
        $asets = aset::all();
        // $pemilik = Pemilik::all();
        // return view('pemilik', compact('asets', 'pemilik'));
        return view('pemilik', compact('asets'));
        
    }

    public function store(Request $request)
    {
        $asets = Aset::create($request->except(['nama', 'keterangan']));

        $request['aset_id'] = $asets->id;
        $pemilik = Pemilik::create($request->only(['aset_id', 'nama', 'keterangan']));

        return back()->with('success',' Post baru berhasil dibuat.');
    }
}