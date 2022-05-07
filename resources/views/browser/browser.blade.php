@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-0">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary">{{ __('browser.browse') }}</div>

                    <div class="card-body">
                        <div class="row justify-content-center">
                            @include('browser.search')
                            @include('partials.plan')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
