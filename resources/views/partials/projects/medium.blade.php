<div class="columns medium m6t">

    @foreach($mediumProjects as $project)

        <div class="column is-one-third">

            @include('partials.projects.card', [
                'project' => $project,
                'hover' => false,
                'type' => 'medium'
            ])

        </div> {{-- div.column --}}

    @endforeach

</div> {{-- div.colums.featured --}}