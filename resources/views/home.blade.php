@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    @if(auth::check())
                        <div class="panel-body">
                            <h3>You are logged in as {{ Auth::user()->name }}!</h3>
                        </div>
                        @if(App\User::find(Auth::user()->id)->requests)
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <td><h4>Here are all the request by you:</h4></td>
                                        <td><h4>Status</h4></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(App\User::find(Auth::user()->id)->requests as $request)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/requests/'.$request->id)}}">{{$request->item_name}}</a>
                                            </td>
                                            <td>{{$request->status}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td><h4>Requests by other users:</h4></td>
                                    <td><h4>Status</h4></td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(App\Post::where('user_id','!=', Auth::user()->id)->get() as $request)
                                    <tr>
                                        <td>
                                            <a href="{{ url('/requests/'.$request->id)}}">{{$request->item_name}}</a>
                                        </td>
                                        <td>{{$request->status}}</td>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="panel-body">
                            <h3>Weclome guest :)</h3>
                        </div>
                        <div class="panel-body">
                            <p>Requests made by Users:</p>
                            @foreach(App\Post::all() as $request)
                                <li><a href='#'>{{$loop->iteration}}: {{$request->item_name}}</a></li>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
