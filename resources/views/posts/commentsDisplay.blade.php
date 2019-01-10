@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <!-- Avatar -->
        <img style="width:10%" src="/storage/avatars/{{ $comment->user->avatar }}">
        <!-- User/Date -->
        <i class="fas fa-user-secret"> Comment by: {{ $comment->user->name }},</i>
            <i class="fas fa-hourglass-half"> written on: {{ $comment->created_at }}</i>
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Reply" />
            </div>
        </form>
        @include('posts.commentsDisplay', ['comments' => $comment->replies])
    </div>
@endforeach
