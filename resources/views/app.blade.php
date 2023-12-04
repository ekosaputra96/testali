@extends('adminlte::page')

@section('content')
    @inertia
@stop

@section('css')
    <title inertia>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @inertiaHead
@stop

@section('js')
    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
@stop