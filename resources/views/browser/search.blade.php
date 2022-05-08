<div class="container">
    <div class="row justify-content-center">
        @include('browser.search_bar')
        <div class="col-md-0">
            <ul class="list-group mt-2">
                <li class="list-group-item mb-2 shadow-sm">
                    <a href="#">
                        <div>
                            <h5>((My awesome super plan)) <span class="badge bg-primary">((Category))</span></h5>
                        </div>
                        <hr class="rounded mt-2 mb-2">
                    </a>
                </li>
                <li class="list-group-item mb-2 shadow-sm">
                    <a href="#">
                        <div>
                            <h5>((My awesome super plan2)) <span class="badge bg-primary">((Category))</span></h5>
                        </div>
                        <hr class="rounded mt-2 mb-2">
                    </a>
                </li>
            </ul>
        </div>
        <div class="spinner-border text-primary col-md-0" role="status">
            <span class="visually-hidden">{{ __('loading.loading') }}</span>
        </div>
    </div>
</div>
