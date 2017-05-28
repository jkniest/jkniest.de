<div class="card fade">

    <div class="card-image">

        <figure class="image">
            <img src="{{$project->getCoverPath(isset($size) ? $size : 512)}}" alt="{{$project->getName()}}">

            @include('partials.projects.hover')

        </figure>

    </div> {{-- div.card-image --}}

    <div class="card-content">

        <div class="content">

            <a href="{{route('project', ['slug' => $project->getSlug()])}}">
                <h2 class="title is-3">{{$project->getName()}}</h2>
            </a>

        </div> {{-- div.content --}}

    </div> {{-- div.card-content --}}

</div> {{-- div.card --}}
