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
    GENA-Render ist eine Cluster-Rendering-Software. Das bedeutet, Anwender können ihre <a href="#">Blender</a>-Modelle
    hochladen und mehrere Computer, bzw. Server, berechnen die einzelnen Frames und senden diese dann an die
    Web-Platform zurück.
</section>

<section class="m3t">
    <h3 class="title is-3">Warum?</h3>

    <p>
        Durch einen glücklichen Zufall, sind zwei Freunde und ich, an 50 ausgemusterte Computer gelangt. Natürlich
        wollten wir diese nicht einfach in einer Ecke verstauben lassen und haben begonnen uns zu überlegen, was wir
        mit diesen machen könnten.
    </p>
    <br><br>
    <p>
        Da meine Freunde relativ viel mit Blender gearbeitet haben und wir es alle als nettes Lernprojekt ansahen,
        haben wir mit der Entwicklung einer Render-Farm begonnen. Somit können die Computer, die Frames der Modelle
        berechnen. Zusätzlich wurde eine Webplatform geschaffen, um neue Modelle hochzuladen und einen Überblick über
        alle gerenderten Bilder zu bewahren.
    </p>
</section>

<hr class="m3t">

<section class="m3t">
    <h3 class="title is-3">Funktionen</h3>

    <section class="m2t">

        <h4 class="title is-4">Benutzer / Benutzergruppen</h4>

        <p>
            Benutzer können sich registrieren, einloggen und ihre Profile verwalten und ggf. entfernen. Es gibt
            verschiedene Benutzerrollen, die entscheiden, wie viele parallele Aufträge man an den Cluster geben kann
            und wie diese, im Gegensatz zu anderen Benutzergruppen, priorisiert sind. Somit war es möglich, "Premium"
            Gruppen zu erstellen, die priorisierter behandelt würden.
        </p>

    </section>

    <section class="m3t">

        <h4 class="title is-4">Aufträge</h4>

        <p>
            Jeder Benutzer kann Aufträge in das System geben. Jeder Auftrag besteht aus einem Blender-Modell und den
            Frames, die gerendert werden müssen. Zusätzlich kann man noch Blender-spezifische Einstellungen tätigen,
            wie die "Render-Engine".
        </p>
        <br><br>
        <p>
            Der Fortschritt eines Auftrags kann auf der jeweiligen Übersichtsseite beobachtet werden. Dort sieht der
            Benutzer den Fortschritt und alle bereits gerenderten Frames. Sollte der Auftrag abgeschlossen sein, kann
            der Benutzer sich alle gerenderten Frames als ZIP-Archiv herunterladen.
        </p>

    </section>

    <section class="m3t">

        <h4 class="title is-4">API</h4>

        <p>
            Sämtliche Aktionen, wie Jobs hinzufügen und Frames herunterladen, ist ebenfalls über eine API realisierbar.
            Der Benutzer kann selbstständig API-Schlüssel generieren und löschen.
        </p>

    </section>

    <section class="m3t">

        <h4 class="title is-4">Clustering</h4>

        <p>
            Die einzelnen Computer und Server können sich mit der Webplatform verbinden und so einen Cluster aufbauen.
            Jeder Job wird automatisiert auf alle Computer aufgeteilt, die derzeitig frei sind. Die Daten zwischen
            Webplatform und Computer werden komplett verschlüsselt übertragen und einzelne Computer können direkt im
            Web-Backend von Administratoren deaktiviert werden.
        </p>

    </section>

    <section class="m3t">

        <h4 class="title is-4">Administratoren Backend</h4>

        <p>
            Administratoren können alle wichtigen Einstellungen bzgl. Benutzern, Jobs und Computern, direkt in einem
            online Backend tätigen.
        </p>

    </section>

</section>

<hr class="m3t">

<section class="m3t">

    <h3 class="title is-3">Entwicklung</h3>

    <p>
        Die Webseite wurde mit dem <a href="https://laravel.com">Laravel Framework</a> entwickelt. Die Client-Software
        wurde mit Python realisiert.
    </p>

</section>

<hr class="m3t">

<section class="m3t">

    <h3 class="title is-3">Fazit</h3>

    <p>
        Ein Raum mit mehr als 8 Computern wird sehr schnell, sehr warm. Es ist echt cool zu sehen, wie mehrere Computer
        zusammen ein Problem lösen. Das Projekt war interessant und wurde leider, auf Grund des verlorenen Standortes
        für die Computer, abgebrochen.
    </p>

</section>
