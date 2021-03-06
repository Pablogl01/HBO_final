@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Video edit</h1>
        <form action="{{route('video.update',$video->id)}}" method="POST">
            @csrf
            @method('PUT')
            Title
            <br/>
            <input type="text" name="title" value="{{$video->title}}" class="form form-control">
            <br/>
            Description
            <br/>
            <input type="text" name="description" value="{{$video->description}}" class="form form-control">
            <br/>
            Owner
            <br/>
            <input class="list-group " list="owner_id" name="owner_id" value="{{$video->user}}">
            @foreach($users as $user)
                <datalist id="owner_id">
                    <option value="{{$user->id}}">{{$user->email}}</option>
                </datalist>
            @endforeach
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
    <br/>
    </div>

    @endsection
