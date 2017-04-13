@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-2x fa-cog fa-spin fa fa-fw"></i>&nbsp;{{ trans('register.title') }}
                    </div>
                    <div class="panel-body">
                    <center><img src="https://ucarecdn.com/34134a26-904f-46dd-b2cb-0763c33847e0/LogotipoFinal.png" width="80"/> </center>
                    <center><h6>{{ trans('register.obligator') }}</h6></center><br>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">{{ trans('register.name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Request::old('name') ?: '' }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                <label for="surname" class="col-md-4 control-label">{{ trans('register.surname') }}</label>
                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control" name="surname" value="{{ Request::old('surname') ?: '' }}" required autofocus>
                                    @if ($errors->has('surname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('surname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('channel_name') ? ' has-error' : '' }}">
                                <label for="channel_name" class="col-md-4 control-label">{{ trans('register.channel_name') }}</label>
                                <div class="col-md-6">
                                    <input id="channel_name" type="text" class="form-control" name="channel_name" value="{{ Request::old('channel_name') ?: '' }}" required><h6>{{ trans('register.optional') }}</h6>
                                    @if ($errors->has('channel_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('channel_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">{{ trans('register.email') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ Request::old('email') ?: '' }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">{{ trans('register.pass') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">{{ trans('register.confpass') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <h6><p>{!! trans('register.important') !!}</p></h6><br>

                            <center>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ trans('register.tic') }}
                                    </button>
                                </div>
                            </div>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
