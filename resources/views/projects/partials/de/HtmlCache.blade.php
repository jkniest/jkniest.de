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
    Das Package "HTMLCache" wurde entwickelt um die HTML-Version in Laravel-Webseiten cachen zu können und sich
    somit die Datenbank-Abfragen bei jedem Aufruf sparen kann.
</section>

<section class="m3t">
    <h3 class="title is-3">Warum?</h3>

    <p>
        Dieses Package entstand ursprünglich durch diese Webseite (jkniest.de). Da die Funktionalitäten allerdings
        auch in anderen Projekten von mir benötigt werden wurden diese als Package extrahiert.
    </p>
</section>

<hr class="m3t">

<section class="m3t">
    <h3 class="title is-3">Funktionen</h3>

    <section class="m2t">

        <h4 class="title is-4">Sprach-Basiertes Cachen</h4>

        <p>
            Beim cachen einer Seite wird die Sprache beachtet, so dass jede Sprachee ihre eigene gecachte Version hat.
            Dies wird z.B. auf der jkniest.de Seite deutlich, da jedes Projekt in Deutsch und Englisch gelesen werden
            kann.
        </p>

    </section>

    <section class="m2t">

        <h4 class="title is-4">Benutzer-Basiertes Cachen</h4>

        <p>
            Optional kann jede Seite auch für einen Benutzer speziell gecacht werden. Somit ist es möglich z.B.
            Dashboard-Seiten oder Profilseite zu cachen, die nur für einen einzigen Benutzer ansehbar sind.
        </p>

    </section>

    <section class="m2t">

        <h4 class="title is-4">Skalierbarkeit</h4>

        <p>
            Durch eine sehr einfache interne API kann das Package sehr einfach erweitert werden. In dem Projekt
            befindet sich beispielweise eine Anleitung, wie man das Package mit "Pagination" kompatibel macht.
        </p>

    </section>

</section>

<hr class="m3t">

<section class="m3t">

    <h3 class="title is-3">Entwicklung</h3>

    <p>
        Das Package wurde mit und für das <a href="https://laravel.com">Laravel Framework</a> entwickelt. Der Quellcode
        ist unter der <a href="https://opensource.org/licenses/MIT">MIT</a> lizensiert &mdash; somit kann jeder es für
        seine eigenen Zwecke benutzen und anpassen. Der Quellcode steht auf
        <a href="https://github.com/jkniest/htmlcache">Github</a> zur Verfügung.
    </p>

</section>
