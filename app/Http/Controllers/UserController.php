<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Puntuaciones;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth']);
    }

    public function show()
    {
        $videos=Video::all();
        return view('home',compact('videos'));
    }

    public function profile()
    {
        $user = Auth::user();
        $puntuaciones = Puntuaciones::where("user_id",Auth::user()->id)->get();
        $count=count($puntuaciones);
        for($i=0;$i<$count;$i++){
            $video[] = Video::where("id",$puntuaciones[$i]->videos_id)->get();
        }
        return view('videos.profile',compact('user','video'));
    }

    public function password()
    {
        $user = Auth::user();
        return view('videos.password',compact('user'));
    }

    public function update(Request $request, $id)
    {
        if($request->password == $request->password2){
            $user=User::find($id);
            $pass = bcrypt($request->password);
                $user->update(['password'=>$pass]);
        }
        return redirect()->route('video.index');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}
