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

<section>
    The "ForceHttps" package has been developed so that all encrypted connections can be automatically forwarded
    to secure connections.

    <div class="m2t">
        <img src="https://img.shields.io/packagist/dt/jkniest/force-https.svg" alt="">
    </div>
</section>

<section class="m3t">
    <h3 class="title is-3">Why?</h3>

    <p>
        I wanted a compact and simple solution for my own projects to redirect all unsafe connections. Accordingly,
        I have developed this package.
    </p>
</section>

<hr class="m3t">

<section class="m3t">
    <h3 class="title is-3">Features</h3>

    <p>
        All requestes that are called via "http" are simply forwarded to "https".
    </p>

</section>

<hr class="m3t">

<section class="m3t">

    <h3 class="title is-3">Development</h3>

    <p>
        The package was developed with and for the <a href="https://laravel.com">Laravel framework</a>. The source code
        is licensed under the <a href="https://opensource.org/licenses/MIT">MIT</a> &mdash; so everyone can use and
        customize it for their own purposes. The source code is available on
        <a href="https://github.com/jkniest/forcehttps">Github</a>.
    </p>

</section>
