<div class="dropdown-menu dropdown-menu-end bg-light shadow-lg" aria-labelledby="navbarDropdown">
    @foreach($locales as $locale_name => $available_locale)
        @if($available_locale !== $current_locale)
            <a class="nav-link text-center" href="/language/{{ $available_locale }}">{{ $locale_name }}</a>
        @endif
    @endforeach
</div>
