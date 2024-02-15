<?php

namespace App\Http\Controllers;
use App\Models\Siswa;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(): View
    {
        $siswa = Siswa::latest()->paginate(10);
        
        return view('siswa.index',compact('siswa'))
                    ->with('i', (request()->input('page', 1) - 1) * 10);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('siswa.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'kelas' => 'required',
            'rombel' => 'required',
        ]);
        
        Siswa::create($request->all());
         
        return redirect()->route('siswa.index')
                         ->with('success','Siswa berhasil ditambahkan');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa): View
    {
        return view('siswa.show',compact('siswa'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa): View
    {
        return view('siswa.edit',compact('siswa'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa): RedirectResponse
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'kelas' => 'required',
            'rombel' => 'required',
        ]);
        
        $siswa->update($request->all());
        
        return redirect()->route('siswa.index')
                        ->with('success','Siswa berhasil diupdate');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa): RedirectResponse
    {
        $siswa->delete();
         
        return redirect()->route('siswa.index')
                        ->with('success','Siswa berhasil dihapus');
    }

}
