@extends('front.master')

@section('title', 'Team')
@section('team-testimonial-active', 'active')
@section('header-content')
    @include('front.partials.sub-header',['pageName' => 'Team'])
@endsection
@section('content')
    <!-- Team Start -->
    @livewire('front.components.team-component')
    <!-- Team End -->
@endsection
