@extends('layouts.admin')
@section('content')
<br>    <br>
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
            <div class="card-body col-5">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                        @livewire('upload-media-twitter')
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
