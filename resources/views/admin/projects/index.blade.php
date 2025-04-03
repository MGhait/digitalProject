@extends('admin.master')

@section('title', 'Projects')
@section('projects-active', 'active')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="mb-3 d-flex justify-content-between align-items-center">
                <h4 class="fw-bold py-3 mb-4 d-inline">Projects</h4>
                <!-- Button trigger modal -->
                <button
                    type="button"
                    class="btn btn-primary mb-4"
                    data-bs-toggle="modal"
                    data-bs-target="#createModal"
                >
                    Add new
                </button>
                <!-- Modal -->
                @livewire('admin.projects.projects-create')
            </div>
                <div class="card mb-4">
                    <div class="card-body">
                        @livewire('admin.projects.projects-data')
                    </div>
                </div>
            @livewire('admin.projects.projects-update')
            @livewire('admin.projects.projects-delete')
            @livewire('admin.projects.projects-show')
        </div>
    </div>
    <!-- Content wrapper -->
@endsection
