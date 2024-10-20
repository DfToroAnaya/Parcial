<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\work;
use App\Models\artist;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$works =work::all();
        $works = DB::table('works')
        ->join('artists', 'works.artista_id', '=', 'artists.id')
        ->select('works.*', 'artists.nombre')
        ->get();
        return view('work.index', ['works'=> $works]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $artists = DB::table('artists')
        ->orderBy('nombre')
        ->get();
        return view('work.new', ['artists'=> $artists]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $work = new  work();
        $work->título = $request->titulo;
        $work->año = $request->año;
        $work->tecnica = $request->tecnica;
        $work->dimensiones = $request->dimensiones;
        $work->descripcion = $request->descripcion;
        $work->artista_id = $request->artista_id;
        
        $work->save();

        $works = DB::table('works')
        ->join('artists', 'works.artista_id', '=', 'artists.id')
        ->select('works.*', 'artists.nombre')
        ->get();

        return view('work.index', ['works' => $works]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $work =  work::find($id);
        $artists = DB::table('artists')
        ->orderBy('id')
        ->get();

        return view('work.edit', ['work' => $work, 'artists' => $artists]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $work = work::find($id); 

        $work->título = $request->titulo;
        $work->año = $request->año;
        $work->tecnica = $request->tecnica;
        $work->dimensiones = $request->dimensiones;
        $work->descripcion = $request->descripcion;
        $work->artista_id = $request->artista_id;
        
        $work->save();

        $works = DB::table('works')
        ->join('artists', 'works.artista_id', '=', 'artists.id')
        ->select('works.*', 'artists.nombre')
        ->get();

        return view('work.index', ['works' => $works]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $work = work::find($id);
        $work->delete();

        $works = DB::table('works')
        ->join('artists', 'works.artista_id', '=', 'artists.id')
        ->select('works.*', 'artists.nombre')
        ->get();

        return view('work.index', ['works' => $works]);

    }
}
