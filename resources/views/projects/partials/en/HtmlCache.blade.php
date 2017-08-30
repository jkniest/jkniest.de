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
    <p>
        This package speeds up your laravel application by caching the final rendered html. So your database queries
        and view loading algorithms don't need to run every single page load.
    </p><br>
    <p>
        This package is made for you if you have a lot of static pages (or pages that don't change very often). That
        means portfolios, blogs, landing pages and more.
    </p><br>
    <p>
        And it is highly customizable: You can even cache the same page for every user different, allowing that you can
        cache for example their account page or dashboard without worrying that another user can see these cached pages.
    </p><br>
    <p>
        <b>One benefit against much other html caches:</b> It will also cache the pages based on language, and
        (optionally) user id. And if there are special cases (for example a special GET-parameter) that needs to be used
        to generate multiple versions of the same page, the middleware can be easily modified.
    </p>


</section>

<section class="m3t">
    <h3 class="title is-3">Why?</h3>

    <p>
        This package was originally created for this website (jkniest.de). Since the functionalities are also needed in
        other projects by me, they were extracted as a package.
    </p>
</section>

<hr class="m3t">

<section class="m3t">
    <h3 class="title is-3">Features</h3>

    <section class="m2t">

        <h4 class="title is-4">Language-based cache</h4>

        <p>
            When a page is cached, the language is observed so that each language has its own cached version.
            This can be seen, for example, on the jkniest.de site, since every project can be read in German and
            English.
        </p>

    </section>

    <section class="m2t">

        <h4 class="title is-4">User-based cache</h4>

        <p>
            Optionally, each page can also be cached for a specific user. Thus, it is possible to cache dashboard pages
            or profile pages that are only viewable for a single user.
        </p>

    </section>

    <section class="m2t">

        <h4 class="title is-4">Scalability</h4>

        <p>
            Thanks to a very simple internal API, the package can be expanded very easily. In the project there is,
            for example, a guide on how to make the package compatible with "Pagination".
        </p>

    </section>

</section>

<hr class="m3t">

<section class="m3t">

    <h3 class="title is-3">Development</h3>

    <p>
        The package was developed with and for the <a href="https://laravel.com">Laravel framework</a>. The source code
        is licensed under the <a href="https://opensource.org/licenses/MIT">MIT</a> &mdash; so everyone can use and
        customize it for their own purposes. The source code is available on
        <a href="https://github.com/jkniest/htmlcache">Github</a>.
    </p>

</section>
