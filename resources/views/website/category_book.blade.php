<!DOCTYPE html>
<html lang="ar">

@include('website.header')


@include('website.nav')


{{-- @include('website.slider') --}}


@include('website.wisdom')


<!--Start main side-->

<section class="main-side">
    
    <div class="container">
        
        <div class="row">
            


            @include('website.aside')



            
                    <!--Start books-->
    

                    <div class="col-lg-9  content-my-side text-right ">

                        <div class="computer">
                            <div class="row">
                                {{-- @if ( $category->books->count() <= 3) --}}
                                    
                                
                                @foreach ($books as $book)

                                <div class="col-lg-4 text-center">
                                        
                                    <div class="box">
                                        {{-- <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div> --}}
                                        <div class="img">
                                            <img src="{{ asset('books/' . $book->image) }}"  class="d-block w-100" alt="">
                                        </div>
                                        <h3>{{ $book->title }}</h3>
                                        <p>ARTIFICIAL</p>
                                        <a href="{{ url('download/pdf', $book->id) }}">حمل الآن<i class="fas fa-arrow-left"></i></a>
                                        
                                    </div>

                                </div>
                                @endforeach

                                
                            </div>
                        </div>

                        
                    </div>

                    <!--End books-->


        </div>
    </div>
</section>

<!--End main side-->


@include('website.footer')

</body>
</html>