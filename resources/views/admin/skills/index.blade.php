@extends('admin.master')

@section('title', 'Skills')
@section('skills-active', 'active')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">Skills</h4>

            <div class="row">
                <div class="card mb-4">
                    <div class="card-body">
                        @livewire('admin.skills.skills-data')

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content wrapper -->
@endsection
