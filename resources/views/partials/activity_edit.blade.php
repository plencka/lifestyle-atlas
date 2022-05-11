<div class="card">
    <div class="card-header-sub">{{ __('activity.activities') }}</div>

    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="container">
                    @for($i = 0; $i < 5; $i++)
                        <div class="row mb-0 justify-content-evenly text-center py-2">
                            <div class="form-group col-md-5 col-sm-0 px-0">
                                <select id="category_select" name="activity[{{$i}}]" class="form-control">
                                    <option value=""> {{ __('activity.select_activity') }} </option>
                                    @foreach ($activities as $activity)
                                        <option value="{{$activity->id}}" ?'selected=selected': ''>
                                        {{ __($activity->name )}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4 col-sm-8 px-0">
                                <input value="0" type="number" placeholder="{{ __('activity.duration') }}"
                                       id="category_select"
                                       name="duration[{{$i}}]" class="form-control">
                                </input>
                            </div>
                        </div>
                    @endfor
                </div>
            </li>
        </ul>
    </div>
</div>
