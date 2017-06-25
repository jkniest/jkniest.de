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
    GENA-Render is a cluster rendering software. This means users can upload their <a href="#">blender</a> models and
    multiple computers or servers, calculate the individual frames, and then return them to the web platform.
</section>

<section class="m3t">
    <h3 class="title is-3">Why?</h3>

    <p>
        By a fortuitous coincidence, I and two friends have got 50 patterned computers. Of course we did not just want
        to let them get stuck in a corner. So we started to think about what we could do with them.
    </p>
    <br><br>
    <p>
        Since my friends worked relatively much with Blender and we all looked at it as a nice learning project, we
        started with the development of a render farm. Thus, the computers can calculate the frames of the models.
        In addition, a web platform was created to upload new models and keep an overview of all rendered images.
    </p>
</section>

<hr class="m3t">

<section class="m3t">
    <h3 class="title is-3">Features</h3>

    <section class="m2t">

        <h4 class="title is-4">Users / Roles</h4>

        <p>
            Users can register, log in, and manage their profiles, and remove them if necessary. There are various user
            roles that decide how many parallel jobs can be given to the cluster and how these are in contrast to other
            user groups prioritized. Thus, it was possible to create "premium" groups that would be treated more
            prioritized.
        </p>

    </section>

    <section class="m3t">

        <h4 class="title is-4">Jobs</h4>

        <p>
            Each user can enter jobs into the system. Each job consists of a Blender model and the frames that need to
            be rendered. Additionally, you can make blender-specific settings, such as the "Render Engine".
        </p>
        <br><br>
        <p>
            The progress of an order can be observed on the overview page. There, the user sees the progress and all
            previously rendered frames. If the job is finished, the user can download all rendered frames as a ZIP
            archive.
        </p>

    </section>

    <section class="m3t">

        <h4 class="title is-4">API</h4>

        <p>
            All actions, such as adding jobs and downloading frames, can also be done using the API. The user can
            independently generate and delete API keys.
        </p>

    </section>

    <section class="m3t">

        <h4 class="title is-4">Clustering</h4>

        <p>
            The individual computers and servers can connect to the web platform to create a cluster. Each job is
            automatically distributed to all computers that are currently free. The data between the web platform and
            the computer is transferred completely encrypted and individual computers can be deactivated directly in
            the web backend by administrators.
        </p>

    </section>

    <section class="m3t">

        <h4 class="title is-4">Administration backend</h4>

        <p>
            Administrators can make all important settings regarding users, jobs and computers, directly in an online
            backend.
        </p>

    </section>

</section>

<hr class="m3t">

<section class="m3t">

    <h3 class="title is-3">Development</h3>

    <p>
        The website was developed with the <a href="https://laravel.com">laravel framework</a>. The client software
        was realised with python.
    </p>

</section>

<hr class="m3t">

<section class="m3t">

    <h3 class="title is-3">Conclusion</h3>

    <p>
        A room with more than 8 computers will be very fast, very warm. It's really cool to see how several computers
        together solve a problem. The project was interesting and I unfortunately, because of the lost location for the
        computer, aborted.
    </p>

</section>
