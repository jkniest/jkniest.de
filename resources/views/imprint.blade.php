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
     *
     */
@endphp

@extends('layouts.app')

@section('title')
    @lang('jkniest.imprint')
@endsection

@section('main')

    {{-- Fixed header with navbar --}}
    @include('partials.header', ['menu' => 'partials.nav.menu-project'])

    {{-- Content --}}
    @include('partials.imprint')

@endsection