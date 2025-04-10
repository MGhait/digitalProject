@extends('front.master')

@section('title', 'Index')
@section('index-active', 'active')
@section('header-content')
    @include('front.partials.header')
@endsection
@section('content')

    @livewire('front.components.features-component')

    <!-- About Start -->
    @livewire('front.components.skills-component')
    <!-- About End -->

    <!-- Facts Start -->
    @livewire('front.components.counters-component')
    <!-- Facts End -->

    @livewire('front.components.services-component')



    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span></p>
                    <h1 class="text-center text-white mb-4">Stay Always In Touch</h1>
                    <p class="text-white mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo</p>
                    <div class="position-relative w-100 mt-3">
                        @livewire('front.components.subscribe-component')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Projects Start -->
    @livewire('front.components.projects-component')
    <!-- Projects End -->


    <!-- Testimonial Start -->
    @livewire('front.components.testimonials-component')
    <!-- Testimonial End -->


    <!-- Team Start -->
    @livewire('front.components.team-component')
    <!-- Team End -->

@endsection
