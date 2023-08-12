@extends('front.layout.master')

@section('title', 'Profile')

@section('body')
    <link rel="stylesheet" href="front/css/profile.css" type="text/css">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="profile-nav col-md-3">
            <div class="panel">
                <div class="user-heading round">
                    <a href="#">
                        @if($user->avatar != '')
                            <img src="front/img/user/{{$user->avatar}}" alt="">
                        @else
                            <img src="front/img/user/default2.jpg" alt="">
                        @endif
                    </a>
                    <h1>{{$user->name . ' ' . $user->lastname}}</h1>
                    <p>{{$user->email}}</p>
                </div>

                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="#"> <i class="fa fa-calendar"></i> Orders <span class="label label-warning pull-right r-activity">9</span></a></li>
                    <li><a href="#"> <i class="fa fa-edit"></i> Addresses</a></li>
                </ul>
            </div>
        </div>
        <div class="profile-info col-md-9">
{{--            <div class="panel">--}}
{{--                <form>--}}
{{--                    <textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>--}}
{{--                </form>--}}
{{--                <footer class="panel-footer">--}}
{{--                    <button class="btn btn-warning pull-right">Post</button>--}}
{{--                    <ul class="nav nav-pills">--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fa fa-map-marker"></i></a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fa fa-camera"></i></a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class=" fa fa-film"></i></a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fa fa-microphone"></i></a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </footer>--}}
{{--            </div>--}}
            <form action="" method="post">
                @csrf
                <div class="panel">
                    <div class="bio-graph-heading">
                        {{$user->description ?? '-'}}
                    </div>
                    <div class="panel-body bio-graph-info">
                        <h1>Bio Graph</h1>
                        <div class="row">
                            <div class="bio-row">
                                <p><label for="firstname">First Name </label>: <input id="firstname" type="text" value="{{$user->name}}"></p>
                            </div>
                            <div class="bio-row">
                                <p><label for="lastname">Last Name </label>: <input id="lastname" type="text" value="{{$user->lastname}}"></p>
                            </div>
                            <div class="bio-row">
                                <p><label for="country">Country </label>: <input id="country" type="text" value="{{$user->country}}"></p>
                            </div>
                            <div class="bio-row">
                                <p><label for="email">Email </label>: <input id="email" type="text" value="{{$user->email}}"></p>
                            </div>
                            <div class="bio-row">
                                <p><label for="phone">Phone </label>: <input id="phone" type="text" value="{{$user->phone}}"></p>
                            </div>
                            <div class="bio-row">
                                <p><label>Created date</label>: <input disabled type="text" value="{{$user->created_at}}"></p>
                            </div>
                            <div class="bio-row" style="width: 100% !important;">
                                <button type="submit" class="save-profile-btn">SAVE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-chart">
                                    <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="35" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                </div>
                                <div class="bio-desk">
                                    <h4 class="red">Envato Website</h4>
                                    <p>Started : 15 July</p>
                                    <p>Deadline : 15 August</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-chart">
                                    <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="63" data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                </div>
                                <div class="bio-desk">
                                    <h4 class="terques">ThemeForest CMS </h4>
                                    <p>Started : 15 July</p>
                                    <p>Deadline : 15 August</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-chart">
                                    <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="75" data-fgcolor="#96be4b" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(150, 190, 75); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                </div>
                                <div class="bio-desk">
                                    <h4 class="green">VectorLab Portfolio</h4>
                                    <p>Started : 15 July</p>
                                    <p>Deadline : 15 August</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-chart">
                                    <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="50" data-fgcolor="#cba4db" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(203, 164, 219); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                </div>
                                <div class="bio-desk">
                                    <h4 class="purple">Adobe Muse Template</h4>
                                    <p>Started : 15 July</p>
                                    <p>Deadline : 15 August</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
