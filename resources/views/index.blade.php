@extends('layouts.app')

@section('title', 'Bosh sahifa')

@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Gotto Logo" class="img-fluid mb-4" style="max-width: 150px;">

            <h1>Welcome to <span class="text-primary">Gotto Job Portal!</span></h1>
            <p class="lead">Find your dream job or post vacancies easily.</p>

            <a href="{{ route('job_listings') }}" class="btn btn-primary mt-3">
                View Job Listings
            </a>
        </div>
    </div>
@endsection
