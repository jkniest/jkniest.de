@php
    /**
     * Copyright (C) 2017 Jordan Kniest
     *
     * This program is free software: you can redistribute it and/or modify
     * it under the terms of the GNU Affero General Public License as published by
     * the Free Software Foundation, either version 3 of the License, or
     * (at your option) any later version.
     *
     * This program is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     * GNU Affero General Public License for more details.
     *
     * You should have received a copy of the GNU Affero General Public License
     * along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */
@endphp

<a name="about-me"></a>

<div id="introduction">

    <section class="hero is-medium is-light m1t">

        <div class="hero-body">

            <div class="container">

                <div class="columns is-multiline">

                    <div class="column is-full-tablet is-half-desktop">

                        <img src="{{asset('img/2017.jpg')}}" alt="" width="180px"
                             class="is-pulled-left m3r introduction-blur">

                        <img src="{{asset('img/2017.jpg')}}" alt="" width="180px" class="is-pulled-left m3r normal-img">

                        <div class="m3t">

                            <h1 class="title">
                                @lang('jkniest.welcome')!
                            </h1> {{-- h1.title --}}

                            <h2 class="subtitle">
                                @lang('jkniest.short-introduction')
                            </h2> {{-- h2.subtitle --}}

                        </div> {{-- div.m3t --}}

                    </div> {{-- div.column --}}

                    <div class="column is-full-tablet is-half-desktop">

                        <div class="m3t">

                            <p>@lang('jkniest.introduction.welcome')</p><br>
                            <p>@lang('jkniest.introduction.beginning')</p><br>
                            <p>@lang('jkniest.introduction.tools')</p>

                        </div> {{-- div.m3t --}}

                    </div> {{-- div.column --}}

                </div> {{-- div.columns --}}

            </div> {{-- div.container --}}

        </div> {{-- div.hero-body --}}

    </section> {{-- section.hero --}}

</div> {{-- div#introduction --}}