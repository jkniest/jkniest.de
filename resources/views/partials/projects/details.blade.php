<div class="panel">

    <div class="panel-heading">

        @lang('jkniest.project-info')

    </div> {{-- div.panel-heading --}}

    @component('partials.projects.panel-meta', ['key' => 'jkniest.year'])
        {{$project->getYear()}}
    @endcomponent

    @foreach($project->getMeta() as $key => $value)

        @component('partials.projects.panel-meta', ['key' => 'jkniest.meta.' . $key])
            {{$value}}
        @endcomponent

    @endforeach

</div> {{-- div.panel --}}