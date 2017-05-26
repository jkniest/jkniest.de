<section class="hero m3t is-unselectable" id="projects">

    <div class="hero-body">

        <div class="container">

            <h1 class="title">
                @lang('jkniest.projects')
            </h1> {{-- h1.title --}}

            <h2 class="subtitle">
                @lang('jkniest.some-projects')
            </h2> {{-- h2.subtitle --}}

            <hr>

        </div> {{-- div.container --}}

    </div> {{-- div.hero-body --}}

</section> {{-- section.hero --}}

<div class="container projects p1">

    @include('partials.projects.featured')

    @include('partials.projects.medium')

    @include('partials.projects.small')

</div> {{-- div.container.projects --}}