<div class="card-main">
    <div class="card-header-main">{{ __('plan.plan') }}</div>

    <div class="card-body">
        @if (True)
            <!-- Has plan data -->
            <div>
                <h4>((My awesome super plan)) <span class="badge bg-primary">((Category))</span></h4>
                <hr class="rounded mt-2 mb-2">
                <div>
                    {{ __('plan.made_by') }}: ((Author))
                </div>
                @include('partials.activity')

                <div class="container">
                    <div class="row mb-0 align-content-end mt-3 text-end">
                        <div class="col-md-0">
                            @if (True)
                                <!-- Can Edit -->
                                <button type="submit" class="btn btn-outline-secondary">
                                    {{ __('plan.edit') }}
                                </button>
                            @endif

                            @if (True)
                                <!-- Is Not Favourite -->
                                <button type="submit" class="btn btn-primary text-white">
                                    {{ __('plan.add_to_favourites') }}
                                </button>
                            @else
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('plan.remove_from_favourites') }}
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @else
            {{ __('plan.select_plan') }}
        @endif

    </div>
</div>
