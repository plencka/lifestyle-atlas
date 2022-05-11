<form class="bg-white shadow-sm mb-6 pb-2 col-md-0 mx-3" type="get" action="{{route('browse.index')}}">
    <div class="row justify-content-center text-center align-items-center">
        <div class="col-md-6 col-sm-4">
            <input id="search" type="text" class="form-control col-md-6 col-sm-4" name="search" value="{{$filter->search}}"
                   placeholder="{{ __('browser.type_search') }}" autofocus>
        </div>
        <div class="form-group col-md-4 col-sm-4">
            <select id="category_select" name="category" class="form-control">
                <option value=""> {{ __('browser.select_category') }} </option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if($filter->category == $category->id) selected @endif >
                        {{ __($category->name) }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-2 col-sm-2">
            <button class="btn btn-primary" type="submit">{{ __('browser.search') }}</button>
        </div>
    </div>
</form>
