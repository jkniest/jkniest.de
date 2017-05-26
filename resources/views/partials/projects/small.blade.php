<div class="columns is-multiline small m6t">

    @foreach($smallProjects as $project)

        <div class="column is-one-quarter">

            @include('partials.projects.card', [
                'project' => $project,
                'hover' => false,
                'type' => 'small'
                ])

        </div> {{-- div.column --}}

    @endforeach

</div> {{-- div.colums.small --}}