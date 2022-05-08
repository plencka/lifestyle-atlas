<div class="col-md-0 mt-4">
    <div class="card">
        <div class="card-header bg-primary">{{ __('activity.activities') }}</div>

        <div class="card-body">
            @if (True) <!-- Has activities -->
            <div>
                <div>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            ((Activity 1))
                            <span class="badge bg-primary">20 minutes</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            ((Activity 2))
                            <span class="badge bg-primary">20 minutes</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            ((Activity 3))
                            <span class="badge bg-primary">20 minutes</span>
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
