<div class="swiper-container m3t" id="gallery-top">

    <div class="swiper-wrapper">

        @foreach($project->getMedia() as $media)

            <div class="swiper-slide">
                @include('partials.projects.media.'.$media->getType())
            </div> {{-- div.swiper-slide --}}

        @endforeach

    </div> {{-- div.swiper-wrapper --}}

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div> {{-- div.swiper-container --}}

<div class="swiper-container" id="gallery-thumbs">

    <div class="swiper-wrapper">

        @foreach($project->getMedia() as $media)

            <div class="swiper-slide" style="background-image:url('{{$media->getThumb()}}')"></div>

        @endforeach

    </div>

</div>

@push('scripts')

<script>
    var galleryTop = new Swiper('#gallery-top', {
        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });

    var galleryThumbs = new Swiper('#gallery-thumbs', {
        // Positioning
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',

        // Touch
        touchRatio: 1,
        slideToClickedSlide:true,

        // Autoplay
        autoplay: 5000,
        autoplayDisableOnInteraction: true
    });

    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;
</script>

@endpush