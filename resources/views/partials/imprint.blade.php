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

<div class="container m3t p1" id="imprint">

    <div class="content">

        @if(app()->getLocale() == 'de')

            <h1>Impressum</h1>

            <h2>Angaben gemäß § 5 TMG:</h2>
            <p>
                Jordan Kniest<br/>
                Zum Freden 18<br/>
                49186 Bad Iburg
            </p>

            <h2>Kontakt:</h2>
            <p>
                Telefon: +49 174 403 125 7<br/>
                E-Mail: kontakt@jkniest.de
            </p>

            <h2>Haftung für Inhalte</h2>
            <p>
                Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf
                diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als
                Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu
                überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.
            </p>
            <p>
                Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen
                bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis
                einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden
                wir diese Inhalte umgehend entfernen.
            </p>

            <h2>Haftung für Links</h2>
            <p>Unser Angebot enthält Links zu
                externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese
                fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der
                jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt
                der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der
                Verlinkung nicht erkennbar.
            </p>
            <p>Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist
                jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von
                Rechtsverletzungen werden wir derartige Links umgehend entfernen.
            </p>

            <h2>Urheberrecht</h2>
            <p>Die durch
                die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen
                Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der
                Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.
                Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet.
            </p>
            <p>
                Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter
                beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine
                Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden
                von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.
            </p>
        @else {{-- if: locale != de --}}

        <h2>Information provided according to Sec. 5 German Telemedia Act (TMG):</h2>
        <p>
            Jordan Kniest<br/>
            Zum Freden 18<br/>
            49186 Bad Iburg
        </p>

        <h2>Contact:</h2>
        <p>
            Telephone: +49 174 403 125 7<br/>
            Email: kontakt@jkniest.de
        </p>

        <h2>Liability for Contents</h2>
        <p>
            As service providers, we are liable for own contents of these websites
            according to Sec. 7, paragraph 1 German Telemedia Act (TMG). However, according to Sec. 8 to 10 German
            Telemedia Act (TMG), service providers are not obligated to permanently monitor submitted or stored
            information or to search for evidences that indicate illegal activities.
        </p>
        <p>
            Legal obligations to
            removing information or to blocking the use of information remain unchallenged. In this case, liability
            is only possible at the time of knowledge about a specific violation of law. Illegal contents will be
            removed immediately at the time we get knowledge of them.
        </p>

        <h2>Liability for Links</h2>
        <p>
            Our offer
            includes links to external third party websites. We have no influence on the contents of those websites,
            therefore we cannot guarantee for those contents. Providers or administrators of linked websites are
            always responsible for their own contents.
        </p>
        <p>
            The linked websites had been checked for possible
            violations of law at the time of the establishment of the link. Illegal contents were not detected at
            the time of the linking. A permanent monitoring of the contents of linked websites cannot be imposed
            without reasonable indications that there has been a violation of law. Illegal links will be removed
            immediately at the time we get knowledge of them.
        </p>

        <h2>Copyright</h2>
        <p>
            Contents and compilations
            published on these websites by the providers are subject to German copyright laws. Reproduction,
            editing, distribution as well as the use of any kind outside the scope of the copyright law require a
            written permission of the author or originator. Downloads and copies of these websites are permitted for
            private use only.<br/>
            The commercial use of our contents without permission of the originator is
            prohibited.
        </p>
        <p>
            Copyright laws of third parties are respected as long as the contents on these
            websites do not originate from the provider. Contributions of third parties on this site are indicated
            as such. However, if you notice any violations of copyright law, please inform us. Such contents will be
            removed immediately.
        </p>

        @endif

    </div>

</div>