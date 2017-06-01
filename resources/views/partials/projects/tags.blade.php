@if(count($project->getTags()) > 0)
    <div class="tags">

        @foreach($project->getTags() as $tag)

            <span class="tag is-dark">{{$tag}}</span>

        @endforeach

    </div> {{-- div.tags --}}
@endif