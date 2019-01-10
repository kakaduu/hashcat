@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="/storage/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <hr>
                <h2>{{ $user->name }}'s Profile</h2>
                <hr>
                <form enctype="multipart/form-data" action="{{ route('profile.update') }}" method="POST">
                    <label>Update Profile Image</label>
                    <hr>
                    <input type="file" name="avatar">
                    <hr>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>
        </div>
</div>
@endsection
