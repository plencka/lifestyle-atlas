<div class="card-main">
    <div class="card-header-main">{{ __('browser.browse') }}</div>
   
    <div class="card-body">
        @include('browser.search_bar')
        @foreach ($plans as $Plan)
        @if (true)
            
            <div class="col-md-0">
                @if (True)
                    <!-- Has Plans -->
                    <ul class="list-group mt-2">
                        <!-- Foreach queried plan -->
                        <li class="list-group-item mb-2 shadow-sm">
                            <a href="#">
                                <div>
                                    <h5 class="mt-1">{{$Plan->name}}
                                        <span class="badge bg-primary mt-1">{{$Plan->category->name}}</span>
                                        <span class="badge bg-primary mt-1">{{ __('browser.favourited') }}</span>
                                    </h5>
                                </div>
                                <hr class="rounded mt-2 mb-2">
                                {{ __('browser.author') }}: {{$Plan->user->name}}
                                
                            </a>
                        </li>
                    </ul>
                    
                @else
                    {{ __('browser.no_plans_found') }}
                @endif
            </div>
        @else
            <div class="spinner-border text-primary col-md-0" role="status">
                <span class="visually-hidden">{{ __('loading.loading') }}</span>
            </div>
        @endif
        @endforeach
    </div>
</div>
