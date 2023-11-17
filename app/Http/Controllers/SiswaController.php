<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Illuminate\Http\RedirectResponse;
use App\Models\Siswa;
use Spatie\Permission\Middleware\PermissionMiddleware;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 function __construct()
    {
        $this->middleware(PermissionMiddleware::class . ':siswa-list|siswa-create|siswa-edit|siswa-delete', ['only' => ['index','show']]);
        $this->middleware(PermissionMiddleware::class . ':siswa-create', ['only' => ['create','store']]);
        $this->middleware(PermissionMiddleware::class . ':siswa-edit', ['only' => ['edit','update']]);
        $this->middleware(PermissionMiddleware::class . ':siswa-delete', ['only' => ['destroy']]);
       

    }

    public function index(Request $request)
    {
        //dd($request->all());
        $siswa = Siswa::orderBy('id','DESC')->get();
        return view('siswa.data-siswa',compact('siswa')); 
        // return response()->json($siswa);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('siswa.siswa-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'nama' =>'required',
            'kelas' =>'required',
            'alamat' => 'required'
        ]);

        Siswa::create($request->all());
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
         return view('siswa.siswa-show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.siswa-edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $siswa)
    {

    $siswaModel = Siswa::findOrFail($siswa);

    $request->validate([
        'nama' => 'required',
        'kelas' => 'required',
        'alamat' => 'required',
    ]);
    $siswaModel->update($request->all());
    return redirect()->route('siswa.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}