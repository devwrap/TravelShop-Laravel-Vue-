@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$request->item_name}}</div>
                        <div class="panel-body">
                            <lable>Item Description: </lable>{{$request->item_description}}<br>
                            <lable>Quantity: </lable>{{$request->quantity}}<br>
                            <lable>Country: </lable>{{$request->country}}<br>
                            <lable>Price Offered: </lable>{{$request->price}}<br>
                        </div>
                    <div class="panel-body">
                        <form class="form-inline" method=""
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection