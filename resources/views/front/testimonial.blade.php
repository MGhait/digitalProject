@extends('front.master')

@section('title', 'Testimonials')
@section('team-testimonial-active', 'active')
@section('header-content')
    @include('front.partials.sub-header',['pageName' => 'Testimonials'])
@endsection
@section('content')
    <!-- Testimonial Start -->
    @livewire('front.components.testimonials-component')
    <!-- Testimonial End -->
@endsection
