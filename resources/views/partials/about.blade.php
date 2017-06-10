<div class="m3t" id="contact">

    <section class="hero is-medium is-light">

        <div class="hero-body">

            <div class="container">

                <div class="columns">

                    <div class="column is-one-third">

                        <figure class="image">
                            <img src="{{asset('img/logo.png')}}">
                        </figure>

                    </div> {{-- div.column.is-one-third --}}

                    <div class="column">

                        <h2 class="title is-1 m1t">
                            @lang('jkniest.get-in-touch')
                        </h2>

                        <p>
                            @lang('jkniest.about.interest')
                            <br><br>
                            @lang('jkniest.about.contact-me')
                            <br>
                            @lang('jkniest.about.active')
                            <br><br>
                            @lang('jkniest.about.happy')
                        </p>

                        <div class="buttons m2t">

                            {{-- Mail --}}
                            @if (config('portfolio.links.mail'))

                                @component('partials.about.button', ['icon' => 'envelope', 'target' => '_self', 'noM' => true, 'name' => 'Mail'])
                                    {{config('portfolio.links.mail')}}
                                @endcomponent

                            @endif {{-- endif - mail --}}

                            {{-- Twitter --}}
                            @if (config('portfolio.links.twitter'))

                                @component('partials.about.button', ['icon' => 'twitter', 'name' => 'Twitter'])
                                    {{config('portfolio.links.twitter')}}
                                @endcomponent

                            @endif {{-- endif - twitter --}}

                            {{-- XING --}}
                            @if (config('portfolio.links.xing'))

                                @component('partials.about.button', ['icon' => 'xing', 'name' => 'XING'])
                                    {{config('portfolio.links.xing')}}
                                @endcomponent

                            @endif {{-- endif - xing --}}

                            {{-- LinkedIn --}}
                            @if (config('portfolio.links.linkedin'))

                                @component('partials.about.button', ['icon' => 'linkedin', 'name' => 'LinkedIn'])
                                    {{config('portfolio.links.linkedin')}}
                                @endcomponent

                            @endif {{-- endif - linkedin --}}

                        </div> {{-- div.buttons --}}

                    </div> {{-- div.column --}}

                </div> {{-- div.column --}}

            </div> {{-- div.container --}}

        </div> {{-- div.hero-body --}}

    </section> {{-- section.hero --}}

</div> {{-- div#contact --}}