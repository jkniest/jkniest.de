@if (config('app.debug'))

    {{-- Featured warnings --}}
    @if (count(config('portfolio.featured')) > 2)

        <article class="message is-danger">
            <div class="message-body">
                <b>Achtung!</b> Das Array <code>featured</code> darf nicht mehr als 2 Einträge beinhalten!
            </div>
        </article>

    @endif


    {{-- Medium warnings --}}
    @if (count(config('portfolio.medium')) > 3)

        <article class="message is-danger">
            <div class="message-body">
                <b>Achtung!</b> Das Array <code>medium</code> darf nicht mehr als 3 Einträge beinhalten!
            </div>
        </article>

    @endif

@endif