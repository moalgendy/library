

<section class="section-one text-center">
    <div class="container">
    @foreach ($wisdom as $wisdom)

        <div class="content-me mySlides">
            <h2>حكمة اليوم</h2>
            <p>" {{ $wisdom->title }} "</p>
            <span>- {{ $wisdom->say }} -</span>
        </div>
    @endforeach

    </div>
</section>



{{-- script from slides --}}

    {{-- <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    // setTimeout(showSlides, 3000); // Change image every 4 seconds
    }
    </script> --}}

{{-- 86400000 --}}
