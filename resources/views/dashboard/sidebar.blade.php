<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">لوحة التحكم</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-1 pb-1 mb-1 d-flex">
                {{-- <div class="image">
                    <img src="my photo.jpeg" class="img-circle elevation-2" alt="User Image">

                </div> --}}

                <a class="navbar-brand" href="/">
                    <img src="{{ asset('website/img/Home/logo.png') }}" width="85px" height="85px" class="d-inline-block " alt="logo">مكتبتي
                </a>
                <div class="info">
                    {{-- <a href="#" class="d-block">{{ Auth::user()->name }}</a> --}}
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    
                    <li class="nav-item has-treeview menu-open">
                        
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('dashboard/all_books') }}" class="nav-link">
                                    <i class="fa fa-star nav-icon"></i>
                                    <p>الكتب</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/books') }}" class="nav-link">
                                    <i class="fa fa-star nav-icon"></i>
                                    <p>إضافة كتاب</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/all_categories') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>الاقسام</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/categories') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>إضافة قسم</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/all_wisdoms') }}" class="nav-link">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>الحكم</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/wisdoms') }}" class="nav-link">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>إضافة حكمة</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/all_contacts') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>آراء العملاء</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{ url('dashboard/projects') }}" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                المشاريع
                                <span class="right badge badge-danger">جدید</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                رابط بسيط
                                <span class="right badge badge-danger">جدید</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                رابط بسيط
                                <span class="right badge badge-danger">جدید</span>
                            </p>
                        </a>
                    </li> --}}
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>