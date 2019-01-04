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
                                <img style="width:10%" src="/storage/avatars/{{ $post->user->avatar }}">
                                <!-- User/Date -->
                                <i class="fas fa-user-secret"> Post by: {{ $post->user->name }},</i>
                                    <i class="fas fa-hourglass-half"> written on: {{ $post->date }},</i>
                                    <i class="fas fa-tag"> category: {{ $post->category->name }}</i>
                                <hr>

                        @endforeach
                        {{$posts->links()}}
                    @else
                        <p>No Posts found</p>
                    @endif
                </div>

                <!-- Sidebar -->
                @include('layouts.sidebar')
        <!-- /.row -->
    <!-- /.container -->

@endsection
