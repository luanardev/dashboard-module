

@if(!Auth::user()->isAdmin())
    <div id="accordion">

        <div class="card card-dark">
            <div class="card-header">
                <div class="card-title w-100">
                    <div class="float-left">
                        <a class="float-left d-block w-100 collapsed" data-toggle="collapse" href="#self-service">
                            SELF SERVICE
                        </a>
                    </div>
                    <div class="float-right">
                        <a class="float-left d-block w-100 collapsed" data-toggle="collapse" href="#self-service">
                            <i class="fas fa-minus-circle"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div id="self-service">
                <div class="card-body">
                    <div class="row">
                        @foreach($clientApps as $app)
                            <div class="col-lg-3">
                                <div class="widget-user-header ">
                                    <a href="{{url($app->url)}}" target="_blank">
                                        <div class="widget-user-image">
                                            <div class="text-center">
                                                <i class="{{$app->icon}}"
                                                   style="font-size:50px;color: #17a2b8"></i>
                                                <p class="widget-user-username" style="font-size:20px">
                                                    {{$app->display_name}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif


