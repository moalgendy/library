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

                                

                                <div class="col-lg-9 ">
                                    @if (session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                    {{ session()->get('message') }}
                                </div>
                                @endif
                                <form action="{{ route('add_contact') }}" method="post" >
                                  @csrf

                                  <h3 style="margin-bottom: 10px">تواصل معنا</h3>
                                  @if (Auth::user())
                                  <input style="display: none" type="text" name="name" placeholder="الاسم" class="form-control">
                                  <input style="margin-bottom: 10px" type="phone" name="phone"  placeholder="رقم التليفون" class="form-control">
                                  <input style="display: none" type="email" name="email" placeholder="الايميل" class="form-control">
                                  <textarea name="title" style="margin-bottom: 10px" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="ما هي المشكلة"></textarea>

                                  @else
                                  <input  type="text" style="margin-bottom: 10px" name="name" placeholder="الاسم" class="form-control">
                                  <input  type="phone" style="margin-bottom: 10px" name="phone"  placeholder="رقم التليفون" class="form-control">
                                  <input  type="email" style="margin-bottom: 10px" name="email" placeholder="الايميل" class="form-control">
                                  <textarea name="title" style="margin-bottom: 10px" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="ما هي المشكلة"></textarea>

                                  @endif
                                  <input type="submit" class="btn btn-info" value="إرسال">
                                </form>
                            </div>
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