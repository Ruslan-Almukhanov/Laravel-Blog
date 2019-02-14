@extends('layouts.base')
@section('header')
    @include('blocks.header')
@endsection

@section('search')
    @include('blocks.search')
@endsection

@section('content')
        @section('center-column')
        @show
@endsection

@section('footer')
    @include('blocks.footer')
@endsection