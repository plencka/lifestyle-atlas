<div class="card-main">
    <div class="card-header-main">{{ __('plan.plan') }}</div>

    <div class="card-body">
        <div>
            <form action={{route('plan.store')}} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row mb-0 align-content-center mt-3 text-start">
                        <div class="col-8">
                            <input id="plan_name" type="text" class="form-control" name="planName"
                                   placeholder="{{ __('plan.type_name') }}" autofocus>
                        </div>
                        <div class="form-group col-4">
                            <select id="category_select" name="category" class="form-control">
                                <option value=""> {{ __('browser.select_category') }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" ?'selected=selected': ''>
                                    {{ __($category->name) }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <hr class="rounded mt-2 mb-2">

                @include('partials.activity_edit')

                <div class="row mb-0 align-content-end mt-3 text-end">
                    <div class="col-md-0 mt-5">
                        <a href="{{url('/browse')}}">
                            <input type="button" class="btn btn-secondary text-white" value="{{ __('plan.discard') }}"/>
                        </a>

                        <a href="{{route('plan.store')}}">
                            <button type="submit" class="btn btn-success text-white">
                                {{ __('plan.save') }}
                            </button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
