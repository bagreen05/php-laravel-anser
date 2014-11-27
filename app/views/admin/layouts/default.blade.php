@extends('layouts.default')

@section('meta-header-start')
    @parent
@stop

@section('meta-header-end')
    <link rel="stylesheet" href="{{URL::asset('assets/css/admin.css')}}"/>
    <script type="text/javascript" src="{{URL::asset('assets/js/ckeditor/ckeditor.js')}}"></script>
    @parent
@stop

@section('body-start')

@stop

@section('content')

@stop

@section('body-end')

@stop

@section('meta-footer')
    @parent
@stop
