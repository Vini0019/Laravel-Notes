@extends('layouts.main_layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col">

            <x-top-bar />

            <div class="row mt-5">
                <div class="col text-center">
                    <p class="display-6 mb-5 text-secondary opacity-50">You have no notes available!</p>
                    <a href="" class="btn btn-secondary btn-lg p-3 px-5">
                        <i class="fa-regular fa-pen-to-square me-3"></i>Create Your First Note
                    </a>
                </div>
            </div>

            <!-- notes are available -->
            <div class="d-flex justify-content-end mb-3">
                <a href="" class="btn btn-secondary px-3">
                    <i class="fa-regular fa-pen-to-square me-2"></i>New Note
                </a>
            </div>


            @include('note')

        </div>
    </div>
</div>

@endsection