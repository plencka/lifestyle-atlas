<div class="bg-white shadow-sm mb-6 pb-2 col-md-0">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8 col-sm-0">
            <input id="search" type="text" class="form-control" name="search" placeholder="{{ __('browser.type_search') }}" autocomplete="name" autofocus>
        </div>
        <div class="form-group col-md-4">
                <select id="category_select" name="category_select" class="form-control">
                    <option value="None" selected>None</option>
                    <option value="((Category1))">((Category1))</option>
                    <option value="((Category2))">((Category2))</option>
                </select>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-0 text-center">
            <div class="form-switch mt-2 text-center">
                <input class="form-check-input text-center" type="checkbox" role="switch" id="show_favourites_toggle" />
                <label class="form-check-label" for="show_favourites_toggle"> {{ __('browser.favourites_only') }}</label>
            </div>
        </div>
    </div>
</div>

