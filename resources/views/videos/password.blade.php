@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Change Password</h1>
        <form action="{{route('user.update',$user->id)}}" method="POST">
            @csrf
            @method('PUT')
            Password
            <br/>
            <input type="password" name="password" class="form form-control">
            <br/>
            Repeat Password
            <br/>
            <input type="password" name="password2" class="form form-control">
            <br/>
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
    <br/>
    </div>

    @endsection
