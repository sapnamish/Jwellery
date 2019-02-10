@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        @if(!empty($itemName))
            {{$itemName}}
        @endif
    </h1>
@stop

@section('content')
    @if(!empty($item))
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-text-width"></i>

                <h3 class="box-title">{{$item->caption}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p class="lead">{{$item->logo}}</p>

                <div class="callout callout-success">
                    <p>{{$item->sub_caption}}</p>
                </div>

                <h5>{{$item->short_description}}</h5>

                <p>{{$item->long_description}}</p>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    @endif
@stop