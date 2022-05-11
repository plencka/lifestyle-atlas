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
                                <div class="container">
                                    @for($i = 0; $i < 5; $i++)
                                    <div class="row mb-0 justify-content-evenly text-center py-2">
                                        <div class="form-group col-md-5 col-sm-0 px-0">
                                            <select id="category_select" name="activity[{{$i}}]" class="form-control">
                                                <option> Select activity </option>
                                                @foreach ($activities as $Activity)
                                                <option value="{{$Activity->id}}"?'selected=selected': ''>
                                                    {{$Activity->name}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-8 px-0">
                                            <input type="number" placeholder="Time in minutes" id="category_select" name="duration[{{$i}}]" class="form-control">
                                                
                                            </select>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
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
