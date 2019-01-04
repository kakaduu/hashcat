@extends('layouts.app')

@section('content')

<h1>News</h1>

<div class="container">

    <div class="row">

        <!-- Post  -->
        <div class="col-lg-8">
            @if(count($news) > 0)
                @foreach($news as $n)
                    <h1 class="mt-4">{{$n->title}}</h1>
                    <hr>
                    <!--  Image -->
                    <img class="img-fluid rounded" img style="width:50%" src="/storage/images/{{$n->image}}" alt="pic">
                        <hr>
                        <!-- Date/Time -->
                        <p>News created on {{$n->created_at}}</p>
                        <hr>
                        <!-- Post Content -->
                        <p class="lead">{{$n->body}}</p>
                @endforeach

            @else
                <p>No News found</p>
            @endif

        </div>
        <!-- Sidebar -->
        @include('layouts.sidebar')
    <!-- /.row -->
<!-- /.container -->
@endsection
