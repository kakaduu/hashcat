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
        <div class="col-md-4">
            <!-- Search -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Search</button>
                            </span>
                        </div>
                    </div>
                </div>

            <!-- Categories-->
            <div class="card my-4">
                <h4 class="card-header">Categories</h4>
                <div class="card-body">
                    <div class="row">
                            <div class="col-lg-12">
                                <ul class="list-group list-group-flush">
                                    @foreach ($categories as $c)
                                        <li class="list-group-item">
                                            <a href="{{route('category', ['id' => $c->id])}}" role="button"
                                                class="bth list-group-item d-flex list-group-item-action justify-content-between alignitems-right">
                                                {{ $c->name }}
                                                <span class="badge badge-success">{{$c->posts->count()}}</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div><!-- /.sidebar -->
    <!-- /.row -->
<!-- /.container -->
@endsection
