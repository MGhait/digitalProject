@extends('admin.master')

@section('title', 'Skills')
@section('skills-active', 'active')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="mb-3 d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold py-3 mb-4 d-inline">Skills</h4>
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
                        @livewire('admin.skills.skills-create')
            </div>

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
