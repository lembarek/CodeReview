@extends('app')

@section('title')

@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Lang::get('column.enum')}}</div>
                <div class="panel-body">
                    @include('partials.errors')
                    <form class="form-horizontal" role="form" method="POST" action="column/enum">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="enum" value="{{ $name }}">


                        <div class="form-group">
                            <label class="col-md-4 control-label">{{ $name }}</label>
                            <div class="col-md-6">
                                <select name="{{$name}}">
                                        @foreach($values as $value)
                                            <option value="{{ $value }}">{{ $value }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ Lang::get('general.next') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@stop

