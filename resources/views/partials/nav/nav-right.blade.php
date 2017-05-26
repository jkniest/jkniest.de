<a href="#projects" class="nav-item is-tab">

    @lang('jkniest.projects')

</a> {{-- a[href="projects"] --}}

<a class="nav-item is-tab">

    @lang('jkniest.about-me')

</a> {{-- a[href="about"] --}}


<a class="nav-item is-tab">

    @lang('jkniest.contact')

</a> {{-- a[href="contact"] --}}


@if (app()->getLocale() == 'de')

    <a href="{{route('lang', ['code' => 'en'])}}" class="nav-item is-tab">
        @lang('jkniest.english-version')
    </a>

@else

    <a href="{{route('lang', ['code' => 'de'])}}" class="nav-item is-tab">
        @lang('jkniest.german-version')
    </a>

@endif