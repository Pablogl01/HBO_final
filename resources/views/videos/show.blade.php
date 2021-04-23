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
                    <!--<form action="{{route('guardar',$video)}}" method="POST">
                      @csrf
                      @method('POST')
                        <input type="hidden" value="{{$video->id}}" name="id">
                        <input type="submit" value="+" name="Result">
                    </form>-->
                    <a class="btn btn-primary"  href="{{route('guardar',$video->id)}}">+</a>
                </div>
            @endforeach
        <div>
    </div>
    <style>
#form {
  width: 250px;
  margin: 0 auto;
  height: 50px;
}

#form p {
  text-align: center;
}

#form label {
  font-size: 20px;
}

input[type="radio"] {
  display: none;
}

label {
  color: grey;
}

.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label {
  color: orange;
}

input[type="radio"]:checked ~ label {
  color: orange;
}
        </style>
    @endsection
