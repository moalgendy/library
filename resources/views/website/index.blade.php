<!DOCTYPE html>
<html lang="ar">

@include('website.header')


@include('website.nav')


@include('website.slider')


@include('website.wisdom')


<!--Start main side-->

<section class="main-side">
    
    <div class="container">
        <div class="row">
            
            @include('website.aside')



            @include('website.books')


        </div>
    </div>
</section>

<!--End main side-->


@include('website.footer')

</body>
</html>