<div class="swiper-container m3t">

    <div class="swiper-wrapper">

        @foreach($project->getMedia() as $media)

            <div class="swiper-slide">
                <img src="{{$media}}" alt="">
            </div> {{-- div.swiper-slide --}}

        @endforeach

    </div> {{-- div.swiper-wrapper --}}

    <div class="swiper-pagination"></div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div> {{-- div.swiper-container --}}



@push('scripts')

<script>
    new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: '.swiper-pagination',

        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',

        //autoHeight: true
    });
</script>

@endpush