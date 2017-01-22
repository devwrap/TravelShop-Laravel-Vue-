@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Request here</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/request/save/'.Auth::user()->id)}}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('item_name') ? ' has-error' : '' }}">
                                <label for="item_name" class="col-md-4 control-label">Product Name</label>

                                <div class="col-md-6">
                                    <input id="item_name" type="text" class="form-control" name="item_name" value="{{ old('item_name') }}" required autofocus>

                                    @if ($errors->has('item_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('item_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('item_description') ? ' has-error' : '' }}">
                                <label for="item_description" class="col-md-4 control-label">Product Description</label>

                                <div class="col-md-6">
                                    <input id="item_description" type="text" class="form-control" name="item_description" value="{{ old('item_description') }}" required>

                                    @if ($errors->has('item_description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('item_description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                <label for="country" class="col-md-4 control-label">Country</label>

                                <div class="col-md-6">
                                    <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" required>

                                    @if ($errors->has('country'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                                <label for="quantity" class="col-md-4 control-label">Quantity</label>

                                <div class="col-md-6">
                                    <input id="quantity" type="text" class="form-control" name="quantity" value="{{ old('quantity') }}" required>

                                    @if ($errors->has('quantity'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price" class="col-md-4 control-label">Offer an Amount</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" required>

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create Request!
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
