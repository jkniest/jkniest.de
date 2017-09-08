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

<div class="container projects p1" id="projects">

    <div class="columns is-multiline medium m6t">

        @foreach($projects as $project)

            <div class="column is-half-tablet is-half-desktop is-one-third-widescreen">

                @include('partials.projects.card', ['project' => $project])

            </div> {{-- div.column --}}

        @endforeach

    </div> {{-- div.colums.featured --}}

</div> {{-- div.container.projects --}}