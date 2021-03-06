<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Auth;

class VideosController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth','role:admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $videos= Video::all();
        return view('videos.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.newVideo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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
    public function edit($id)
    {
        $video=Video::find($id);
        $users=User::all();
        return view('videos.edit',compact('video','users'));
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
        $videos=Video::find($id);
        $videos->update(['title'=>$request->title,
        'desc'=>$request->description,
        'user'=>Auth::user()->username
        ]);

        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $videos=Video::where('id',$id);
        $videos->delete();
        return redirect()->route('edit');
    }


    public function store(Request $request)
    {
        $videos= Video::all();
        $path=$request->file('video')->store('videos','public');
        $user = Auth::user()->username;
        Video::create(['title'=>$request->title,
                        'cont'=>$request->contenido,
                        'desc'=>$request->description,
                        'user'=>$user,
                        'route'=>$path
            ]);
        return view('videos.index',compact('videos'));
    }
}
