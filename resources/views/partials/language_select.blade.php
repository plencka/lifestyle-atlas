<div class="dropdown-menu dropdown-menu-end bg-primary" aria-labelledby="navbarDropdown">
    @foreach($locales as $locale_name => $available_locale)
        @if($available_locale !== $current_locale)
            <a class="nav-link text-center text-white" href="language/{{ $available_locale }}">{{ $locale_name }}</a>
        @endif
    @endforeach
</div>
