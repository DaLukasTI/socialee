<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Retweets</th>
                        <th>Favourites</th>
                        <th>Posted</th>
                        <th></th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($post as $post)
                        <tr>
                            <td>{{   $postTitle  }}</td>
                            <td>{{   $views  }}</td>
                            <td>{{   $likes  }}</td>
                            <td><span class="tag tag-success">{{   $datePosted }}</span></td>
                            <td>
                                <button type="button" class="btn btn-block btn-default">Analytics</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-default">Open in browser</button>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
