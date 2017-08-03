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

<a href="#about-me" class="nav-item is-tab">

    @lang('jkniest.about-me')

</a> {{-- a[href="about"] --}}

<a href="#projects" class="nav-item is-tab">

    @lang('jkniest.projects')

</a> {{-- a[href="projects"] --}}

<a href="#contact" class="nav-item is-tab">

    @lang('jkniest.contact')

</a> {{-- a[href="contact"] --}}


@include('partials.nav.language-select')