
<!--Start Aside-->


<aside class="col-lg-3 text-right">
    <div>
        <form action="{{ url('search_product') }}" method="get" class="d-flex" role="search">
        <input class="form-control me-2" type="search" name="search" placeholder="إبحث عن كتاب...." aria-label="Search">
        <input class="btn btn-outline-info" value="بحث" type="submit" style="margin-right: 5px">
        </form>
    </div>
    <br>
    <h2>الأقسام<i class="fas fa-search"></i></h2>
    
        
    <ul>
        {{-- <li><a href="/">الصفحة الرئيسية<i class="fas fa-home"></i></a></li> --}}

        @foreach ($categories as $category)
        <li><a href="{{ route('category.book',$category->id) }}">{{ $category->name }}<i class="fas fa-tv"></i></a></li>
        @endforeach
    </ul>
    {{-- <div>
        <img src="img/Home/logo.png" class="d-block w-100" alt="logo">
    </div> --}}
</aside>

<!--End Aside-->