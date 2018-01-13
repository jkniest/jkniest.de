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

    <!DOCTYPE html>
<head>
    <title>
        {{config('app.name')}}
        @if (array_key_exists('title', View::getSections()))
            - @yield('title')
        @endif
    </title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="google-site-verification" content="clCd7RHMGHgHhu_RHbtorEVCLf-LT7O3EjFsSM-VxPg"/>

    <link rel="stylesheet" href="{{mix('css/app.css')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}">

    <noscript>
        <style>
            .fade {
                opacity: 1;
            }
        </style>
    </noscript>
</head>
<body>
@yield('main')

@include('partials.footer')

<script src="{{mix('js/app.js')}}"></script>
@stack('scripts')

</body>