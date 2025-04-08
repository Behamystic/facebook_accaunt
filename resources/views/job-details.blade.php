@extends('layouts.app')

@section('title', 'Job Details')

@section('styles')
    <link href="{{ asset('css/job-details.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <header class="site-header">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center">
                        <h1 class="text-white">Job Details</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Job Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

       
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('js/job-details.js') }}"></script>
    <script>
        
    </script>
@endsection
