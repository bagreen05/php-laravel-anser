@extends('layouts.default')

@section('meta-header')
    @parent
    <link rel="stylesheet" href="{{URL::asset('/assets/css/jquery.fancybox.css')}}" type="text/css" media="screen" />
@stop

@section('body-start')
    @parent
@stop

@section('content')
    {{$map}}
    {{$content}}
@stop

@section('body-end')
    @parent
@stop

@section('meta-footer')
    @parent
@stop
