@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">New Video</h1>
        <form action="{{route('video.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            Title
        <br/>
            <input type="text" name="title" value="" class="form form-control" required><br/><br/>
            Contenido
            <br/>
            <input type="text" name="contenido" value="" class="form form-control" required><br/><br/>
            Description
            <br/>
            <input type="text" name="description" value="" class="form form-control" required><br/><br/>
            Video
            <br/>
            <input type="file" name="video">
            <br/>
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
        </form>
    </br>
    </div>

    @endsection
