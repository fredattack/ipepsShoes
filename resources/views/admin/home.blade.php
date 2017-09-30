@extends('layouts.AdminLayouts')

@section('title')
    Panneau de contrôle
@endsection

@section('header')
    <div class="title m-b-md">
        Admin Panel
    </div>
@endsection

@section('nav')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Home</li>
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