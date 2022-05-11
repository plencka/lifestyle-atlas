<div class="card-main mb-5">
    <div class="card-header-main">{{ __('browser.browse') }}</div>
    <div class="card-body">
        @if (isset($plans))
            <div class="col-md-0">
                @if (!$plans->isEmpty())
                    <ul class="list-group mt-2">
                        @foreach ($plans as $plan)
                            <a href="{{url('plan', $plan->id)}}" class="text-decoration-none">
                                <li class="list-group-item mb-2 shadow-sm h-100 w-100">
                                        <div>
                                            <h5 class="mt-1 fw-bold text-primary">{{$plan->name}}
                                                <span class="badge mt-1"
                                                      style="background-color: {{ '#'.$plan->category->color_hex }};">
                                                {{$plan->category->name}}
                                                </span>
                                                @if (!Auth::guest() and $plan->usersWhoFavourited->contains('id', Auth::user()->id))
                                                    <span
                                                        class="badge bg-primary mt-1">{{ __('browser.favourited') }}
                                                    </span>
                                                @endif
                                            </h5>
                                        </div>
                                        <hr class="rounded mt-2 mb-2">
                                        {{ __('browser.author') }}: {{$plan->user->name}}
                                </li>
                            </a>
                        @endforeach
                        {{ $plans->links() }}
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
    </div>
</div>
