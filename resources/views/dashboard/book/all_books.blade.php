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
                            <h1 class="m-0 text-dark">جميع الكتب</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                                <li class="breadcrumb-item active">جميع الكتب</li>
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
                                                                    <th>اسم الكتاب</th>
                                                                    <th> اسم الكاتب</th>
                                                                    <th> القسم </th>
                                                                    <th>الوصف</th>
                                                                    <th>الصور</th>
                                                                    <th>التعديل</th>
                                                                    <th>الحذف</th>
                                                                    
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $i = 0; ?>
                                                                    @forelse ($categories as $category)

                                                                    <tr>
                                                                        
                                                                        

                                                                        @foreach ($category->books as $project)
                                                                        <?php $i++; ?>
                                                                        <td>{{ $i }}</td>
                                                                        
                                                                        <td>{{ $project->title }}</td> 
                                                                        <td>{{ $project->content }}</td>
                                                                        <td>{{ $category->name }}</td>

                                                                        <td width="200">{{ $project->desc }}</td>
                                                                        {{-- <td>{{ $project->message }}</td> --}}

                                                                        <td><img style="width: 60px;height: 60px;" src="books/{{ $project->image }}"></td>
                                                                        <td>
                                                                            <a href="{{ route('book.edit' , $project->id) }}" class="btn btn-outline-primary btn">edit</a>
                                                                        </td>
                                                                        <td>
                                                                            <a onclick="return confirm('Are You Sure To Delete This!')" href="{{ route('book.destroy' , $project->id) }}" class="btn btn-outline-danger btn">delete</a>
                                                                        </td>
                                                                        {{-- <td><label class="badge badge-danger">Pending</label></td> --}}
                                                                    </tr>
                                                                    @endforeach
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