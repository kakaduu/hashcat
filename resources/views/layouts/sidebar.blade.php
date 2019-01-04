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
