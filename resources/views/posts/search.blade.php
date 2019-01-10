@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Search</h1>
    <div class="form-group">
        {!! Form::open(array('route' => 'search', 'class'=>'form navbar-form navbar-right searchform')) !!}
        <hr>
        {!! Form::text('search', null, array('required',
                                    'class'=>'form-control', 'placeholder'=>'Search')) !!}
                                    <hr>
        {!! Form::submit('Search', array('class'=>'btn btn-info')) !!}
        <hr>
        {!! Form::close() !!}
    </div>

    <div><span>Searched for: {{ $query }}</span></div>

        @if (count($articles) === 0)
            <p>Nothing found</p>
        @elseif (count($articles) >= 1)
            @foreach($articles as $article)
                <h1 class="mt-4">{{$article->title}}</h1>
                <hr>
            @endforeach
        @endif

    </div>

 @endsection
