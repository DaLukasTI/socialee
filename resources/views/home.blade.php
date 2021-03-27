@extends('layouts.admin')
@section('content')
    <br>
    <div class="col-12">

      <a href="/updateposts" >  <button type="button"  class="btn btn-default btnlg" style="background-color: white; color: #70BEBE; border-radius: 15px; border-color:#70BEBE;">Refresh post data</button></a>
        <br>

        <br>
        <div class="" >
            <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" style="border-color: white;" role="tablist">
                    <li class="nav-item col-2 text-center">
                        <a class="nav-link active" style="background-color: white; color:#70BEBE; border-color: white;" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true"><i class="fab fa-twitter fa-2x"></i><p style="color:black;" class="col-md-12">Twitter</p></a>
                    </li>
                    <li class="nav-item col-2 text-center">
                        <a class="nav-link" style="background-color: white; color:#70BEBE; border-color: white;" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false"><i class="fab fa-facebook fa-2x"></i><p style="color:black;">Facebook</p></a>
                    </li>
                    <li class="nav-item col-2 text-center">
                        <a class="nav-link" style="background-color: white; color:#70BEBE; border-color: white;"id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false"><i class="fab fa-instagram fa-2x"></i><p style="color:black;">Instagram</p></a>
                    </li>
                    <li class="nav-item col-2 text-center">
                        <a class="nav-link" style="background-color: white; color:#70BEBE; border-color: white;" id="custom-tabs-two-settings-tab" data-toggle="pill" href="#custom-tabs-two-settings" role="tab" aria-controls="custom-tabs-two-settings" aria-selected="false"><i class="fab fa-youtube fa-2x"></i><p style="color:black;">Youtube</p></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="border-0">

                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" style="border-radius: 20px">
                                        <table class="table table-toon">
                                            <tbody>
                                            @foreach($posts as $post)
                                            <tr>

                                                <td><p>Author</p><strong>Socialee</strong></td>
                                                <td><p>Tweet</p><strong>{{$post->post_body}}</strong></td>
                                                <td><p>Likes</p><strong>{{$post->favourites}}</strong></td>
                                                <td><p>Retweet</p><strong>{{$post->retweets}}</strong></td>
                                                <td><p>image</p>@if($post->getFirstMediaUrl() != null)<img src="{{$post->getFirstMediaUrl()}}" alt="Smiley face" height="128" width="128">@else NO IMAGE @endif</td>
                                                <td><p>Posted at</p><strong>27/04/2222</strong></td>
                                                <td>

                                                    <p class="text-center">
                                                    <p></p>
                                                    <button type="button" class="btn btn-default" style="background-color:#70BEBE; color: white; border-radius: 15px; border-color:#70BEBE ">Analytics</button>
                                                    <button type="button" class="btn btn-default" style="background-color:#70BEBE; color: white; border-radius: 15px; border-color:#70BEBE ">Open in Browser</button>
                                                    <button type="button" class="btn btn-danger" >Delete</button>
                                                    </p>
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
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                        Soon!
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                        Soon!
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">
                        Soon!
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
