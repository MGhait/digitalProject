@extends('front.master')

@section('title', 'About Us')
@section('about-active', 'active')
@section('header-content')
    @include('front.partials.sub-header',['pageName' => 'About'])
@endsection
@section('content')

    @livewire('front.components.features-component')

    @livewire('front.components.skills-component')

    <!-- Facts Start -->
    @livewire('front.components.counters-component')
    <!-- Facts End -->


    <!-- Team Start -->
    @livewire('front.components.team-component')
    <!-- Team End -->

@endsection
