@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-0">
                <div class="card-main">
                    <div class="card-header-main">{{ __('browser.browse') }}</div>

                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    @include('browser.search')
                                </div>
                                <div class="col-md-6">
                                    @include('partials.plan')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
