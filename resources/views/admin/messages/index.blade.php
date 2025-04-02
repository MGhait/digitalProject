@extends('admin.master')

@section('title', 'Messages')
@section('messages-active', 'active')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="mb-3 d-flex justify-content-between align-items-center">
                <h4 class="fw-bold py-3 mb-4 d-inline">Messages</h4>
            </div>
                <div class="card mb-4">
                    <div class="card-body">
                        @livewire('admin.messages.messages-data')
                    </div>
                </div>
            @livewire('admin.messages.messages-delete')
            @livewire('admin.messages.messages-show')
        </div>
    </div>
    <!-- Content wrapper -->
@endsection
