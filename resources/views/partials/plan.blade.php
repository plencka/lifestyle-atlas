<div class="card-main">
    <div class="card-header-main">{{ __('plan.plan') }}</div>

    <div class="card-body">
        @if (isset($selected_plan))
            <div>
                <style>
                    .plan-category-bg-{{ $selected_plan->id }} {
                        background-color: {{ '#'.$selected_plan->category->color_hex }};
                    }
                </style>
                <h4>{{ $selected_plan->name }} <span
                        class="badge plan-category-bg-{{ $selected_plan->id }}">{{ $selected_plan->category->name }}</span>
                </h4>
                <hr class="rounded mt-2 mb-2">
                <div>
                    {{ __('plan.made_by') }}: {{ $selected_plan->user->name }}
                </div>
                @include('partials.activity')

                <div class="container">
                    <div class="row mb-0 align-content-end mt-3 text-end">
                        <div class="col-md-0">
                            <button type="submit" onclick="planUrlToClipboard({{ $selected_plan->id }});" class="btn btn-info">
                                {{ __('plan.share') }}
                            </button>

                            @guest
                                <a href="{{ route('login') }}">
                                    <button type="submit" class="btn btn-primary text-white">
                                        {{ __('plan.add_to_favourites') }}
                                    </button>
                                </a>

                            @else
                                @if ($selected_plan->user->id === Auth::user()->id)
                                    <button type="submit" class="btn btn-secondary">
                                        {{ __('plan.edit') }}
                                    </button>
                                @endif

                                @if (!$selected_plan->usersWhoFavourited->contains('id', Auth::user()->id))
                                    <button type="submit" class="btn btn-primary text-white">
                                        {{ __('plan.add_to_favourites') }}
                                    </button>
                                @else
                                    <button type="submit" class="btn btn-secondary">
                                        {{ __('plan.remove_from_favourites') }}
                                    </button>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @else
            {{ __('plan.select_plan') }}
        @endif

        <div class="toast position-absolute mb-2" id="clipToast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">{{ __('plan.clipboard') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ __('plan.copied_to_clipboard') }}
            </div>
        </div>
    </div>
</div>
