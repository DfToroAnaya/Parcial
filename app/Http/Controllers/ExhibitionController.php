<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\exhibition;
use Illuminate\Support\Facades\DB;


class ExhibitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exhibitions=DB::table('exhibitions')
       ->join('works','exhibitions.obra_id','=', 'works.id')
       ->select('exhibitions.*','works.título')
       ->get();
        return view('exhibition.index', ['exhibitions'=>$exhibitions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $works=DB::table('works')
        ->orderBy('título')
        ->get();
        return view('exhibition.new', ['works'=>$works]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exhibition=new exhibition();

        $exhibition->obra_id = $request ->obra_id;
        $exhibition->fecha_inicio = $request->fecha_inicio;
        $exhibition->fecha_fin = $request->fecha_fin;
        $exhibition->ubicacion = $request->ubicacion;
        $exhibition->nombre_evento = $request->nombre_evento;
        $exhibition->save();

        $exhibitions=DB::table('exhibitions')
       ->join('works','exhibitions.obra_id','=', 'works.id')
       ->select('exhibitions.*','works.título')
       ->get();
        return view('exhibition.index', ['exhibitions'=>$exhibitions]);
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
        $exhibition=exhibition::find($id);
        $works = DB::table('works')
        ->orderBy('título')
        ->get();
        return view('exhibition.edit',['exhibitions'=>$exhibition, 'works'=>$works]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $exhibition=exhibition::find($id);
        $exhibition->obra_id = $request ->obra_id;
        $exhibition->fecha_inicio = $request->fecha_inicio;
        $exhibition->fecha_fin = $request->fecha_fin;
        $exhibition->ubicacion = $request->ubicacion;
        $exhibition->nombre_evento = $request->nombre_evento;
        $exhibition->save();

        $exhibitions=DB::table('exhibitions')
        ->join('works','exhibitions.obra_id','=', 'works.id')
        ->select('exhibitions.*','works.título')
        ->get();
         return view('exhibition.index', ['exhibitions'=>$exhibitions]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exhibition=exhibition::find($id);
        $exhibition->delete();
        
        $exhibitions=DB::table('exhibitions')
       ->join('works','exhibitions.obra_id','=', 'works.id')
       ->select('exhibitions.*','works.título')
       ->get();
        return view('exhibition.index', ['exhibitions'=>$exhibitions]);
    }
}
