
<!--Start Navbar-->

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li style="padding-left: 10px;" class="nav-item">
                <a class="nav-link" href="/">الصفحة الرئيسية <span class="sr-only">(current)</span></a>
                </li>
                
                <li style="padding-left: 7px;" class="nav-item dropdown">
                        
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                    الأقسام
                    <span class="caret"></span></a>
                    
                    <ul class="dropdown-menu" style="background-color: #006c74;text-align: right;">
                        @foreach ($categories as $category)
                        <li><a style=" color: #fff; padding-right: 10px;" href="{{ route('category.book',$category->id) }}">{{ $category->name }}</a></li>
                        @endforeach

                    </ul>
                </li>
                    
                    

                    <li style="padding-left: 10px;" class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}"> التواصل </a>
                    </li>

                    @if (Route::has('login'))
                     @auth
                     <li style="padding-left: 20px;" class="nav-item dropdown">
                        
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label"> @if (Auth::user()->profile_photo_path)
                           <img class="h-8 w-8 rounded-full object-cover" style="width: 2rem;height: 2rem;border-radius: 9999px;" src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}" />
                        @else
                           <img class="h-8 w-8 rounded-full object-cover" style="width: 2rem;height: 2rem;border-radius: 9999px;" src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> 
                        @endif <span class="caret"></span></a>
                           
                        <ul class="dropdown-menu" style="background-color: #006c74">
                           <li><a style="padding-left: 5px;color: #fff"  href="{{ url('user/profile') }}">البروفايل</a></li>
                           <li><a style="padding-left: 5px;color: #fff" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">تسجيل الخروج</a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                           </form></li>
                        </ul>
                     </li>
                  @else

                  
                  <li style="padding-left: 20px;" class="nav-item dropdown">
                        
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                    تسجيل
                       {{-- <img class="h-8 w-8 rounded-full object-cover" style="width: 2rem;height: 2rem;border-radius: 9999px;"  />  --}}
                    <span class="caret"></span></a>
                       
                    <ul class="dropdown-menu" style="background-color: #006c74;text-align: right;">
                       <li><a style="padding-right: 10px;color: #fff" href="{{ route('login') }}">تسجيل الدخول</a></li>
                       <li><a style="padding-right: 10px;color: #fff" href="{{ route('register') }}">حساب جديد</a></li>
                    </ul>
                 </li>
                


                
                @endauth
                @endif
                
                </li>
            </ul>
        </div>
        <a class="navbar-brand" href="/">
            <img src="{{ asset('website/img/Home/logo.png') }}" width="65px" height="65px" class="d-inline-block " alt="logo">مكتبتي
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
    
    </div>
</nav>

<!--End Navbar-->