@extends('layouts.admin')
@section('content')

    <br>
    <div class="content">
        <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
                <!-- timeline time label -->
                <div class="time-label">
                    <span class="bg-red">27/03/2021</span>
                </div>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <div>
                    <i class="fab fa-twitter bg-info"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                        <h3 class="timeline-header"><a href="#">Socialee</a> Tweeted</h3>

                        <div class="timeline-body">
                            Yeet
                        </div>
                        <div class="timeline-footer">
                            <a class="btn btn-primary btn-sm">Read more</a>
                            <a class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->
                <div>
                    <i class="fab fa-youtube bg-danger"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                        <h3 class="timeline-header no-border"><a href="#">Socialee</a> Posted a video</h3>
                        <div class="timeline-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" allowfullscreen="" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->
                <div>
                    <i class="fas fa-comments bg-yellow"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                        <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                        </div>
                        <div class="timeline-footer">
                            <a class="btn btn-warning btn-sm">View comment</a>
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline time label -->
                <div class="time-label">
                    <span class="bg-green">25/03/2021</span>
                </div>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <div>
                    <i class="fab fa-instagram bg-gradient-indigo"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> 2 days ago</span>
                        <h3 class="timeline-header"><a href="#">Socialee</a> uploaded new photos</h3>
                        <div class="timeline-body">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->

                <!-- END timeline item -->
                <div>
                    <i class="fas fa-clock bg-gray"></i>
                </div>
            </div>
        </div>
    </div>
        </div>
        <!-- /.col -->
    </div>
@endsection
