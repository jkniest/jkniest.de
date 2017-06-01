<div class="container m4t" id="project-main">

    <div class="columns">

        <div class="column is-three-quarters">

            <h1 class="title is-1">{{$project->getName()}}</h1>

            @include('partials.projects.tags')

            <div class="m2t">
                @include($project->getView())
            </div>

        </div> {{-- div.column.is-three-quarters --}}

        <div class="column">

            @include('partials.projects.details')

        </div> {{-- div.column --}}

    </div> {{-- div.columns --}}

</div> {{-- div.container --}}