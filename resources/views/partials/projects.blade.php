<div class="container projects p1" id="projects">

    <div class="columns is-multiline medium m6t">

        @foreach($projects as $project)

            <div class="column is-one-third">

                @include('partials.projects.card', ['project' => $project])

            </div> {{-- div.column --}}

        @endforeach

    </div> {{-- div.colums.featured --}}

</div> {{-- div.container.projects --}}