<div class="col-md-0 mt-4">
    <div class="card">
        <div class="card-header-sub">{{ __('activity.activities') }}</div>

        <div class="card-body">
            @if (True)
                <!-- Has activities -->
                <div>
                    <div>
                        <ul class="list-group">
                            <!-- Foreach activity -->
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>((Activity 1))
                                <span class="badge bg-primary">20 minutes</span>
                                </span>
                                <button type="submit" class="btn btn-danger text-white">
                                    {{ __('plan.delete') }}
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            @else
                {{ __('activity.no_activities') }}
            @endif
        </div>
    </div>
</div>
