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
    <p>You are logged in!</p>
@stop