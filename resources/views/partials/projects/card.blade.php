<div class="card fade">

    <div class="card-image">

        <figure class="image">

            @if (!$hover)
                <a href="{{route('project', ['slug' => $project->getSlug()])}}">
            @endif

            <img src="{{$project->getCoverPath(isset($size) ? $size : 512)}}" alt="{{$project->getName()}}">

            @if (!$hover)
                </a>
            @else
                @include('partials.projects.hover')
            @endif

        </figure>

    </div> {{-- div.card-image --}}

    <div class="card-content">

        <div class="content">

            <a href="{{route('project', ['slug' => $project->getSlug()])}}">
                @if ($type == 'small')
                    <h2 class="title is-4">{{$project->getName()}}</h2>
                @elseif($type == 'medium')
                    <h2 class="title is-3">{{$project->getName()}}</h2>
                @else
                    <h2 class="title is-2">{{$project->getName()}}</h2>
                @endif
            </a>

        </div> {{-- div.content --}}

    </div> {{-- div.card-content --}}

</div> {{-- div.card --}}
