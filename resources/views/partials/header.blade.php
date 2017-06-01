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

<header>

    <nav class="nav has-shadow">

        <div class="nav-left">

            @include('partials.nav.nav-left')

        </div> {{-- div.nav-left --}}

        <div class="nav-right nav-menu">

            @if(isset($right))
                @include($right)
            @else
                @include('partials.nav.nav-right')
            @endif

        </div> {{-- div.nav-right --}}

    </nav>

</header>