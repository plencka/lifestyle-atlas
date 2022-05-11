@extends('layouts.app')

@section('content')
    <div class="container h-100">
        <div class="row align-content-center h-100 px-2">
            <div class="col-md-6">
                <div class="row align-content-center h-100 px-2">
                    <div class="backdrop-image"
                         style="background-image: url({{ asset('img/unsplash-pineapples.jpg') }})">
                    </div>
                    <div class="col-md-0">
                        <h1 class="fw-bold">{{ __('welcome.header') }}</h1>
                    </div>
                    <div class="col-md-0">
                        <h3>{{ __('welcome.body') }}</h3>
                    </div>
                    <div class="col-md-0 mt-3">
                        <button type="button"
                                class="btn btn-primary text-white fw-bold shadow-lg">{{ __('welcome.browse') }}</button>
                        <button type="button"
                                class="btn btn-outline-primary fw-bold bg-light shadow-lg">{{ __('welcome.create') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
