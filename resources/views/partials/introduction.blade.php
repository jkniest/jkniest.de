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

<div id="introduction">

    <section class="hero is-medium is-light">

        <div class="hero-body">

            <div class="container">

                <div class="columns">
                    <div class="column">

                        <img src="{{asset('img/logo.png')}}" alt="" width="180px" class="is-pulled-left m3r">

                        <div class="m3t">
                            <h1 class="title">
                                @lang('jkniest.welcome')!
                            </h1>

                            <h2 class="subtitle">
                                @lang('jkniest.short-introduction')
                            </h2>
                        </div>
                    </div>

                    <div class="column">

                        <div class="m3t">
                            <p>
                                @lang('jkniest.introduction.welcome')
                            </p>

                            <br>

                            <p>
                                @lang('jkniest.introduction.beginning')
                            </p>

                            <br>

                            <p>
                                @lang('jkniest.introduction.tools')
                            </p>
                        </div>

                    </div>
                </div>

            </div> {{-- div.container --}}

        </div> {{-- div.hero-body --}}

    </section> {{-- section.hero --}}

</div> {{-- div#introduction --}}