@extends('layouts.admin')
@section('content')
    <br>
    <div class="col-12">
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
            <div class="card-body col-3">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="#" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="tweetID">Tweet ID</label><input type="text" class="form-control" id="tweetID" placeholder="Enter ID" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" autocomplete="off">
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" style="background-color:#70BEBE; color: white; border-radius: 15px; border-color:#70BEBE ">Add Tweet</button>
                                </div>
                            </form>
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
