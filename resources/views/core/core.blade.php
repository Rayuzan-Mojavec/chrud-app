<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <!-- AdminLTE App -->
    <script src="js/adminlte.min.js"></script>


    <link rel="stylesheet" href="css/adminlte.min.css">
    <link rel="icon" href="{{ url('gif.gif') }}">

    <style>
        @font-face {
            font-family: "MyWebFont";
            src: url("/font/GoogleSans-Regular.ttf");
        }


        body {
            font-family: "MyWebFont";
        }

    </style>

</head>

<body class="hold-transition sidebar-mini bootstrap-dark">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item d-none d-sm-inline-block ps-2">
                    <a class="nav-link bg-primary rounded" data-widget="pushmenu" href="#" role="button">ዘ
                        </a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link text-decoration-none">
                <span class="brand-text font-weight-light">Dashboard (&beta;)</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- SidebarSearch Form -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/employee" class="nav-link">
                                <p>
                                    Employee (&yen;)
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/student" class="nav-link">
                                <p>
                                    Student (&euro;)
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link">
                                <p>
                                    About (&cent;)
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper overflow-auto">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                @yield('content')
            </div>

            <!-- /.content-header -->

            <div class="justify-content-center align-items-center px-5">
                @if (session()->has('success'))
                    <div class="justify-content-center align-items-center alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="tubuh-permasehian text-center">
                    @yield('main-copy')
                </div>
            </div>

            <!-- Main content -->
            <div class="d-flex m-0 px-3 pb-5 justify-content-center align-items-center">
                @yield('main-header')
            </div>


            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Main Footer -->
        <footer class="main-footer ">
            <!-- To the right -->
            <div class="ningenisasi float-right d-none d-sm-inline ">
                ニンゲン&trade;の産物
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; &reg; 2022.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->



</body>

</html>
