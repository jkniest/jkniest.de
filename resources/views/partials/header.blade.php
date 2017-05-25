<header>

    <nav class="nav has-shadow">

        <div class="nav-left">

            <a href="#" class="nav-item">
                <img src="{{asset('img/logo.png')}}" alt="This is me" class="m1r">

                <h1 class="title is-4">@lang('jkniest.iam') {{config('app.author')}}!</h1>
            </a>

        </div>

        <div class="nav-right nav-menu">
            <a href="#projects" class="nav-item is-tab">
                @lang('jkniest.projects')
            </a>
            <a class="nav-item is-tab">
                @lang('jkniest.about-me')
            </a>
            <a class="nav-item is-tab">
                @lang('jkniest.contact')
            </a>

            @if (app()->getLocale() == 'de')
                <a href="{{route('lang', ['code' => 'en'])}}" class="nav-item is-tab">
                    @lang('jkniest.english-version')
                </a>
            @else
                <a href="{{route('lang', ['code' => 'de'])}}" class="nav-item is-tab">
                    @lang('jkniest.german-version')
                </a>
            @endif
        </div>

    </nav>
    
</header>