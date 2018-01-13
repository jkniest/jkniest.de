@php
    /**
     * Copyright (C) 2018 Jordan Kniest
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
<div class="navbar-brand">
    <a class="navbar-item" href="{{route('welcome')}}">
        <img src="{{asset('img/logo.png')}}" alt="This is me">
        <h1 class="title is-4 m05l">@lang('jkniest.iam') {{config('portfolio.author')}}!</h1>
    </a>

    <div class="navbar-burger" onclick="$('#navbar-menu').toggleClass('is-active')">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
