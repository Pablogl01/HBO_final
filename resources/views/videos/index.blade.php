
    @extends('layouts.app')

    @section('content')
        <div class="col-lg-12" style="background-color:grey; color:white">

            <h1 style="padding-top:25px; margin-left:70px; margin-bottom: 20px ">Videos</h1>
            <div style="width:95%; display:flex; flex-direction:row; justify-content: space-between; flex-wrap: wrap;margin-rigth:70px">
                @foreach($videos as $video)
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;margin-left:70px;margin-bottom:20px;width:200px; background-color:black;border:1px solid black;border-radius:15px">
                        <h3>{{$video->title}}</h3>
                        <video src="{{('storage/'.$video->route)}}" width="150px" height="150px" controls></video>
                        <p>{{$video->desc}}</p>
                        <p>{{$video->cont}}</p>
                        <div style="display:flex;flex-direction:row;margin-bottom:10px">
                            <a class="btn btn-primary"  href="{{route('video.edit',$video->id)}}">Edit</a>
                            <a style="margin-left:15px"class="btn btn-primary" href="{{route('video.destroy',$video->id)}}">Delete</a></div>
                    </div>
                @endforeach
            <div>
        </div>

        @endsection

