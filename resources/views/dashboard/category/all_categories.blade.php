<!DOCTYPE html>

<html lang="en">

<head>

    <base href="/public">

    
    @include('dashboard.css')

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->

        @include('dashboard.navbar')


        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @extends('dashboard.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">جميع الاقسام</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                                <li class="breadcrumb-item active">جميع الاقسام</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        
                        <!-- /.col-md-6 -->
                        
            
                        <div class="main-panel">
                            <div class="content-wrapper">
                
                                
                
                
                                {{-- <div class="div_center"> --}}
                
                                    {{-- <h4 class="card-title">Add Products</h4> --}}
                                        <div class="row">
                                            
                                            <div class="col-30 grid-margin stretch-card">
                                                @if (session()->has('message'))
                                    
                                            <div class="alert alert-success">
                            
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                                {{ session()->get('message') }}
                                            </div>
                            
                                            @endif
                                                <div class="card" >
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th>آى دى</th>
                                                                    <th>القسم</th>
                                                                    <th>تعديل</th>
                                                                    <th>حذف</th>
                                                                    
                                        
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @forelse ($categories as $category)
                                                                    <tr>
                                                                        <td>{{ $category->id }}</td>
                                                                        <td>{{ $category->name }}</td> 
                                                                    

                                                                        <td>
                                                                            <a href="{{ route('category.edit' , $category->id) }}" class="btn btn-outline-primary btn">edit</a>
                                                                        </td>
                                                                        <td>
                                                                            <a onclick="return confirm('Are You Sure To Delete This!')" href="{{ route('category.destroy' , $category->id) }}" class="btn btn-outline-danger btn">delete</a>
                                                                        </td>
                                                                        {{-- <td><label class="badge badge-danger">Pending</label></td> --}}
                                                                    </tr>
                                                                    @empty
                                                                    <tr>
                                                                        <td style="text-align: center;" colspan="16">
                                                                            لا توجد بيانات
                                                                        </td>
                                                                    </tr>
                                                                    @endforelse
                                                                
                                                                </tbody>
                                                            </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                        
                                    </div>
            
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Main Footer -->
        @include('dashboard.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

        @include('dashboard.script')
</body>