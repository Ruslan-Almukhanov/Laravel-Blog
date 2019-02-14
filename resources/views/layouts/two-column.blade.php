@extends('layouts.base')
@section('header')
    @include('blocks.header')
@endsection

@section('search')
    @include('blocks.search')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-md-8">
                @section('left-column')
                @show
            </div>
            <div class="col-xs-12  col-md-4">
                @section('right-column')
                @show
            </div>
        </div>
    </div>
    </div>
@endsection

@section('footer')
    @include('blocks.footer')
@endsection