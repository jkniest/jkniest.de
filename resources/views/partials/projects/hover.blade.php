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

<a href="{{route('project', ['slug' => $project->getSlug()])}}">
    <div class="hover p1 is-clickable is-unselectable">

        <h3 class="title is-3">{{$project->getName()}}</h3>
        <hr>

        <p>@include($project->getDescription())</p>

        <a href="{{route('project', ['slug' => $project->getSlug()])}}" class="button is-primary">
            @lang('jkniest.get-more')
        </a>

    </div> {{-- div.hover --}}
</a>