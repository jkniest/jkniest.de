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
    The portfolio "jkniest.de" was developed as a platform to present me and my projects. Here on the site you will
    find some of my private works that I have developed and realized throughout my life.
</section>

<section class="m3t">
    <h3 class="title is-3">Why?</h3>

    <p>
        I wanted a platform on which I can present myself and all my projects. After a brief reflection, I decided to
        make my own small portfolio.
    </p>
    <br>
    <p>
        The domain is easy to pass on or to append as a workplace reference.
    </p>
</section>

<hr class="m3t">

<section class="m3t">
    <h3 class="title is-3">Features</h3>

    <section class="m2t">

        <h4 class="title is-4">Project overview</h4>

        <p>
            On the <a href="{{route('welcome')}}">frontpage</a> you will find an overview of all projects with cover
            image and hover effect. This overview gives you access to the project detail views.
        </p>

    </section>

    <section class="m3t">

        <h4 class="title is-4">Project details</h4>

        <p>
            As on this page, you can look at all the details about a specific project. Each project has some pictures.
            or videos that are displayed in a slider.
        </p>
        <br>
        <p>
            In the Meta-Information Box, you can directly access important
            information about the project at a glance.
        </p>

    </section>

    <section class="m3t">

        <h4 class="title is-4">Multilingualism</h4>

        <p>
            The complete page is available in <a href="{{route('lang', ['code' => 'de'])}}">German</a> and English.
            Every project and text has been translated and integrated so that information about my projects can be read
            internationally.
        </p>

    </section>

    <section class="m3t">

        <h4 class="title is-4">"Get in touch" section</h4>

        <p>
            The contact section makes it possible to link to various platforms such as Xing, LinkedIn and Twitter.
        </p>

    </section>

</section>

<hr class="m3t">

<section class="m3t">

    <h3 class="title is-3">Development</h3>

    <p>
        The website was developed in the <a href="https://laravel.com">Laravel framework</a>. The complete project,
        including source code, is licensed under the <a href="https://opensource.org/licenses/AGPL-3.0">AGPL-3.0</a>
        and is available on <a href="https://github.com/jkniest/jkniest.de">Github</a>.
    </p>
    <br>
    <p>
        The site was developed with the <a href="https://en.wikipedia.org/wiki/Test-driven_development">TDD method</a>
        (test-driven development). This means all functions of this site are fully automated tested and in case of an
        error a report is sent to me.
    </p>
    <br>
    <p>
        During development <b>8</b> Laravel updates were carried out to keep up-to-date.
    </p>

</section>

<hr class="m3t">

<section class="m3t">

    <h3 class="title is-3">Conclusion</h3>

    <p>
        The objectives of the project were achieved. The site is a great platform for presenting my projects. There
        will be some changes in the following weeks or months. For example the integration of my work experiences.
    </p>

</section>
