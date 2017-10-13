@extends('frontend.layouts.master')

@section('title', 'Home')


@section('content')
    @include('frontend.commons.breadcrumb')
    @include('frontend.blocks.portfolio', array('Pagination'=>true))
    @include('frontend.toggle.modals') 
@endsection
