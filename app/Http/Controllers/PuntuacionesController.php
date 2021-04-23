<?php

namespace App\Http\Controllers;

use App\Models\Puntuaciones;
use App\Models\Video;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PuntuacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Puntuaciones  $puntuaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Puntuaciones $puntuaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Puntuaciones  $puntuaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Puntuaciones $puntuaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Puntuaciones  $puntuaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Puntuaciones  $puntuaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puntuaciones $puntuaciones)
    {
        //
    }

    public function guardar($id)
    {
        $video = Video::find($id);
        $puntos = Puntuaciones::where("videos_id",$video->id)->where("user_id",Auth::user()->id);
        if(count($puntos->get())!=0){
            $puntos->delete();
        }else{
            Puntuaciones::create(['videos_id'=>$id,
            'user_id'=>Auth::user()->id,
            'p_num'=>1]);
        }
        return redirect()->route('home');
    }
}
