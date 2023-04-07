@if( Auth::user()->hasApps())
    <div id="accordion">
        <div id="accordion">
            <div class="card card-dark">
                <div class="card-header">
                    <div class="card-title w-100">
                        <div class="float-left">
                            <a class="float-left d-block w-100 collapsed" data-toggle="collapse" href="#self-service">
                                ADMINISTRATIVE
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
                            @foreach($adminApps as  $app)
                                <div class="col-lg-3">
                                    <div class="widget-user-header ">
                                        <a href="{{url($app->url)}}" target="_blank">
                                            <div class="widget-user-image">
                                                <div class="text-center">
                                                    <i class="{{$app->icon}}"
                                                       style="font-size:50px;color:{{$app->color}}"></i>
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
    </div>
@endif
