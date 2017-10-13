@extends('frontend.layouts.master')

@section('title', 'Home')


@section('content')
    @include('frontend.blocks.aboutMeShort') 
    @include('frontend.blocks.portfolio', array('Pagination'=>false))
    @include('frontend.blocks.about') 
    @include('frontend.blocks.contact') 
    @include('frontend.toggle.modals') 

@endsection
