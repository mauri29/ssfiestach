@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-2x fa-rss" aria-hidden="true"></i>&nbsp; {{ trans('search.found') }} "{{ Request::input('query') }}"
                    <form action="/search" method="post" class="pull-right">
                        <select name="locale" onchange="this.form.submit();">
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>                           
                        </select>
                        {{ csrf_field() }}
                    </form> 
                </div>

                <div class="panel-body">
                    @if(!$products->count())
                        <center><img src="https://ucarecdn.com/34134a26-904f-46dd-b2cb-0763c33847e0/LogotipoFinal.png" width="80"/> </center>
                        <center><h6>{!! trans('search.nofound') !!}</h6></center><br>
                    @else
                        <center><img src="https://ucarecdn.com/34134a26-904f-46dd-b2cb-0763c33847e0/LogotipoFinal.png" width="80"/> </center>
                        <center><h6>{!! trans('search.founded') !!}</h6></center><br>
                        @include('shop.partials/productblock')
                    @endif
                    <center><a href="{{ route('product.index') }}" type="button" class="btn btn-danger">{{ trans('search.product') }}</a></center>
                </div>
            </div>
        </div>
    </div>

@endsection