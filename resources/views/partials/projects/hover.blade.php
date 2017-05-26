<div class="hover p1">

    <h3 class="title is-3">{{$project->getName()}}</h3>
    <hr>

    @include($project->getDescription())

    <a href="{{route('project', ['slug' => $project->getSlug()])}}" class="button is-primary">
        @lang('jkniest.get-more')
    </a>

</div> {{-- div.hover --}}