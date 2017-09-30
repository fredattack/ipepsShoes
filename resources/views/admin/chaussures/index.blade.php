@extends('layouts.AdminLayouts')

@section('title')
    Les chaussures
@endsection

@section('header')
    <div class="title m-b-md">
        Chaussures
    </div>
@endsection

@section('nav')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Home</li>
            <li class="breadcrumb-item ">Chaussures</li>

        </ol>
    </div>
@endsection

@section('aside')

    @include('admin.nav.verticalNav')
@endsection

@section('section')

@endsection

@section('footer')
    @include('admin.nav.footerAdmin')
@endsection