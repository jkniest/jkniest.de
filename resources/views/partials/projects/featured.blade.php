<div class="columns featured">

    @foreach($featuredProjects as $project)

        <div class="column is-half">

            @include('partials.projects.card', [
                'project' => $project,
                'hover' => true,
                'type' => 'featured',
                'size' => '1024'
            ])

        </div> {{-- div.column --}}

    @endforeach

</div> {{-- div.colums.featured --}}