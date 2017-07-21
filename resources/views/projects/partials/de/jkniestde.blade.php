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
    Das Portfolio "jkniest.de" wurde entwickelt, um mich und meine Projekte vorzustellen. Hier auf der Seite finden
    Sie einige meiner privaten Arbeiten, die ich im Laufe meines Lebens entwickelt und verwirklicht habe.
</section>

<section class="m3t">
    <h3 class="title is-3">Warum?</h3>

    <p>
        Ich wollte eine Platform, auf der ich mich und alle meine Projekte übersichtlich präsentieren kann. Nach
        kurzem Überleben habe ich mich für ein eigenes kleines Portfolio entschieden.
    </p>
    <br>
    <p>
        Die Domain ist leicht weiter zu geben oder bei Bewerbungsn anzuhängen, als Arbeitsproben-Referenz.
    </p>
</section>

<hr class="m3t">

<section class="m3t">
    <h3 class="title is-3">Funktionen</h3>

    <section class="m2t">

        <h4 class="title is-4">Projekt-Übersicht</h4>

        <p>
            Auf der <a href="{{route('welcome')}}">Startseite</a> befindet sich eine Übersicht aller Projekte mit
            Cover-Bild und
            Hover-Effekt. Über diese Übersicht gelangt man zu den Projekt-Detail Ansichten.
        </p>

    </section>

    <section class="m3t">

        <h4 class="title is-4">Projekt Details</h4>

        <p>
            Wie auf dieser Seite zu sehen, kann man sich leicht alle Details über ein bestimmtes Projekt anschauen.
            Zum einen über die längeren Beschreibungen, wie auch durch die "Projekt Informationen"-Box.
        </p>
        <br>
        <p>
            Jedes Projekt hat einige Bilder oder Videos, die in einem Slider angezeigt werden.
        </p>
        <br>
        <p>
            In der Informations-Box können auf einem Blick direkt wichtige Informationen, wie die Programmiersprache
            oder das Erscheinungsjahr entnommen werden.
        </p>

    </section>

    <section class="m3t">

        <h4 class="title is-4">Mehrsprachigkeit</h4>

        <p>
            Die komplette Seite ist auf Deutsch und <a href="{{route('lang', ['code' => 'en'])}}">Englisch</a>
            verfügbar. Jedes Projekt und jeder Text
            wurden übersetzt und eingebunden, so dass Informationen auch international gelesen werden können.
        </p>

    </section>

    <section class="m3t">

        <h4 class="title is-4">Kontakt-Bereich</h4>

        <p>
            Der Kontakt-Bereich erlaubt es übersichtlich Verlinkungen zu verschiedenen Platformen, wie Xing und
            LinkedIn, zu erstellen.
        </p>

    </section>

</section>

<hr class="m3t">

<section class="m3t">

    <h3 class="title is-3">Entwicklung</h3>

    <p>
        Die Webseite wurde mit dem <a href="https://laravel.com">Laravel Framework</a> entwickelt. Das komplette
        Projekt, samt Quellcode, ist unter der <a href="https://opensource.org/licenses/AGPL-3.0">AGPL-3.0</a>
        lizensiert und steht auf <a href="https://github.com/jkniest/jkniest.de">Github</a> zur Verfügung.
    </p>
    <br>
    <p>
        Entwickelt wurde die Seite mit dem
        <a href="https://en.wikipedia.org/wiki/Test-driven_development">TDD-Verfahren</a> (Test-Driven-Development).
        Das bedeutet, alle Funktionen der Seite werden automatisiert getestet und im Falle eines Fehlers
        wird ein Fehlerbericht an mich gesendet.
    </p>
    <br>
    <p>Während der Entwicklung wurden <b>6</b> Laravel Updates durchgeführt, um immer auf dem neusten Stand zu sein.</p>

</section>

<hr class="m3t">

<section class="m3t">

    <h3 class="title is-3">Fazit</h3>

    <p>
        Die Ziele des Projektes wurden erreicht. Die Seite bietet sich als Platform an, um meine Projekte zu
        präsentieren. Es werden in den folgenden Wochen oder Monaten noch einige Änderungen erfolgen, wie die
        Einbindung meiner Arbeitserfahrung.
    </p>

</section>
