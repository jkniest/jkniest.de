@if (app()->getLocale() == 'de')

    <a href="{{route('lang', ['code' => 'en'])}}" class="nav-item is-tab">
        @lang('jkniest.english-version')
    </a>

@else

    <a href="{{route('lang', ['code' => 'de'])}}" class="nav-item is-tab">
        @lang('jkniest.german-version')
    </a>

@endif