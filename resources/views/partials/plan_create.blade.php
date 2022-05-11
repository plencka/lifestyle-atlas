<div class="card-main">
    <div class="card-header-main">{{ __('plan.plan') }}</div>

    <div class="card-body">
        @if (True)
            <!-- Has plan data -->
            <div>
                <form action={{route('plan.store')}} method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="container">
                    <div class="row mb-0 align-content-center mt-3 text-start">
                        <div class="col-8">
                                <input id="plan_name" type="text" class="form-control" name="PlanName"
                                   placeholder="{{ __('plan.type_name') }}" autofocus>
                        </div>
                            <div class="form-group col-4">
                                <select id="category_select" name="category" class="form-control">
                                    <option> Select category </option>
                                @foreach ($categories as $Category)
                                    <option value="{{$Category->id}}"?'selected=selected': ''>
                                        {{$Category->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <hr class="rounded mt-2 mb-2">

                @include('partials.activity_edit')

                <div class="container">
                    <div class="row mb-0 justify-content-evenly text-center py-2">
                        <div class="form-group col-md-5 col-sm-0 px-0">
                            <select id="category_select" name="category_select" class="form-control">
                                @foreach ($activities as $Activity)
                                    <option name="ActivityName">{{$Activity->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-sm-8 px-0">
                            <select id="category_select" name="category_select" class="form-control">
                                <option value="5" selected>5 minutes</option>
                                <option value="10">10 minutes</option>
                                <option value="15">15 minutes</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-success text-white col-2 px-0">
                            {{ __('plan.add') }}
                        </button>
                        
                    </div>
                </div>
                <div class="row mb-0 align-content-end mt-3 text-end">
                    <div class="col-md-0 mt-5">
                        <!-- Plan exists -->
                        <button type="submit" class="btn btn-danger text-white">
                            {{ __('plan.delete') }}
                        </button>

                        <button type="submit" class="btn btn-secondary text-white">
                            {{ __('plan.discard') }}
                        </button>

                        <!-- Can save -->
                        <a href="{{route('plan.store')}}">
                        <button type="submit" class="btn btn-success text-white">
                            {{ __('plan.save') }}
                        </button>
                        </a>
                    </div>
                </div>
            </form>
            </div>
        @else
            {{ __('plan.select_plan') }}
        @endif

    </div>
</div>
