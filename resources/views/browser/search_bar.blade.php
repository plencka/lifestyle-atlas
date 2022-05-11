<form class="bg-white shadow-sm mb-6 pb-2 col-md-0" type="get" action="{{route('browse.index')}}">
    @csrf
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8 col-sm-0">
            <input id="search" type="text" class="form-control" name="search" value="{{$filter->search}}"
                    placeholder="{{ __('browser.type_search') }}" autofocus>
        </div>
        <div class="form-group col-md-4">
            <select id="category_select" name="category" class="form-control">
                <option> Select category </option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if($filter->category == $category->id) selected @endif >
                        {{$category->name}} </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 text-center">
            <div class="form-switch mt-2 text-center">
                <input class="form-check-input text-center" type="checkbox" role="switch" id="show_favourites_toggle"/>
                <label class="form-check-label"
                        for="show_favourites_toggle"> {{ __('browser.favourites_only') }}</label>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="form-switch mt-2 text-center">
                <input class="form-check-input text-center" type="checkbox" role="switch" id="show_owned_toggle"/>
                <label class="form-check-label" for="show_owned_toggle"> {{ __('browser.owned_only') }}</label>
            </div>
        </div>
    </div>
    <button type="submit">Szukaj</button>
</form>

