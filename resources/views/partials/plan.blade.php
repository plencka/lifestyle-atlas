<div class="col-md-6">
    <div class="card">
        <div class="card-header bg-primary">{{ __('browser.plan') }}</div>

        <div class="card-body">
            @if (True) <!-- Has plan data -->
                <div>
                    <h4>((My awesome super plan)) <span class="badge bg-primary">((Category))</span></h4>
                    <hr class="rounded mt-2 mb-2">
                    <div>
                        {{ __('browser.made_by') }}: ((Author))
                    </div>
                    @include('partials.activity')
                    ((FavButtonHereAlignedLeft))
                </div>
            @else
                {{ __('browser.select_plan') }}
            @endif

        </div>
    </div>
</div>
