@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">{{$user->username}}</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Mail</th>
                </tr>
                <tr>
                    <td>{{$user->email}}</td>
                </tr>
            </thead>
        </table>
        <a class="btn btn-primary" href="{{route('password',$user->id)}}">Change Password</a>
    </div>

    @endsection
