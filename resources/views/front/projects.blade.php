@extends('front.master')

@section('title', 'Projects')
@section('project-active', 'active')
@section('header-content')
    @include('front.partials.sub-header',['pageName' => 'Projects'])
@endsection
@section('content')

    <!-- Projects Start -->
    @livewire('front.components.projects-component')
    <!-- Projects End -->

@endsection
