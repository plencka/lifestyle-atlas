<div class="col-md-0 mt-4">
    <div class="card">
        <div class="card-header-sub">{{ __('activity.activities') }}</div>

        <div class="card-body">
            @if (!$selected_plan->activities->isEmpty())
                <div>
                    <div>
                        <ul class="list-group">
                            @foreach($selected_plan->activities as $activity)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $activity->description }}
                                <span class="badge bg-primary">{{ $activity->duration }} minutes</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @else
                {{ __('activity.no_activities') }}
            @endif
        </div>
    </div>
</div>
