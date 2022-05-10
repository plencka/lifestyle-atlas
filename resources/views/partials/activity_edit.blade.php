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
                                @foreach ($activity_plan in $activity_plan)
                                <span>jknk
                                <span class="badge bg-primary"></span>
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
