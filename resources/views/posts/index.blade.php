@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <div class="container">
        <div class="row">
            <!-- Post  -->
                <div class="col-lg-8">
                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <h1 class="mt-4"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
                            <hr>
                            <!--  Image -->
                            <img class="img-fluid rounded" img style="width:50%" src="/storage/images/{{$post->image}}" alt="pic">
                                <hr>
                                <!-- Avatar -->
                                <img style="width:10%" src="/storage/avatars/{{$post->user->avatar}}">
                                <!-- User/Date -->
                                <small>Post by: {{$post->user->name}}, written on: {{$post->created_at}}, Category: {{$post->category->name}}</small>
                                <hr>
                        @endforeach
                        {{$posts->links()}}
                    @else
                        <p>No Posts found</p>
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
                                                    <span class="badge badge-success pull-right">{{$c->posts->count()}}</span></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- /.row -->
    <!-- /.container -->

@endsection
