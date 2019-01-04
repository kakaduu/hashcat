@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group" id="select">
            {!! Form::Label('category', 'Select category') !!}
            {!! Form::select('category', [1 => 'Tutorials', 2 => 'Benchmarks', 3 => 'Python sripts', 4 => 'Web&Hosting', 5 => 'Hardware', 6 => 'Other'],  1, ['class' => 'form-control' ]) !!}
        </div>

        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('image')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
