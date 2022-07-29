<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <style>
        .kamar {
            width: 100%;
            height: 400px;
        }

    </style>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Kamar</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Fasilitas</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                {{-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> --}}

                <!-- Messages Dropdown Menu -->
                {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                    <h3 class="dropdown-item-title">
                        Brad Diesel
                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
    </div>
    <!-- Message End -->
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
        <!-- Message Start -->
        <div class="media">
            <img src="{{asset('dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
                <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
        </div>
        <!-- Message End -->
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
        <!-- Message Start -->
        <div class="media">
            <img src="{{asset('dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
                <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
        </div>
        <!-- Message End -->
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
    </div>
    </li> --}}
    <!-- Notifications Dropdown Menu -->

    {{-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> --}}
    <h3 class="mr-3 fw-bold">HOTEL HEBAT</h3>
    </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                {{-- <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul> --}}
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                {{-- <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row --> --}}
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        
        <!-- Main content -->
        <div class="content">
            <img class="kamar" src="https://images.mgbedbank.com/PROD/MGDocuments/ID10000421/Photos/432549928.jpg"
                alt="">

                <div class="col-md-12">
             <div class="card-body">
                <div class="row">
                    <label class="col-sm-2 col-form-label">Tanggal Chek in</label>
                    <div class="col-2">
                      <input type="date" class="form-control" placeholder=".col-3">
                    </div>
                    <label class="col-sm-2 col-form-label">Tanggal Chek Out</label>
                    <div class="col-2">
                      <input type="date" class="form-control" placeholder=".col-4">
                    </div>
                    <label class="col-sm-2 col-form-label">Jumlah Kamar</label>
                    <div class="col-1">
                      <input type="text" class="form-control" placeholder="Jumlah Kamar">
                    </div>
                    <div class="col-sm-1">
                        <button type="submit" class="form-control btn btn-primary">Pesan</button>
                  </div>
                </div>
             </div>
          </div>

         <div class="card card-info">
            <div class="col-md-12">
                <div class="card-body">
                    <h2 class="text-center">Tentang Kami</h2><br>
                    <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                </div>
              </div>
         </div>
        
            <h1 class="mb-4 mt-5">Form Pemesanan</h1>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pemesan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Masukan nama pemesan">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="exampleInputPassword1"
                                placeholder="Masukan alamat email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Handphone</label>
                            <input type="number" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Masukan no telepon">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Tamu</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Masukan nama tamu">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Masukan tipe kamar">
                        </div>
                        <button type="submit" class="btn btn-primary">Konfirmasi Pemesanan</button>
                    </form>
                </div>
            </div>
            <div class="container mt-4">
                <h1 class="text-dark mt-4" style="font-weight: 900;font-family: 'Poppins', sans-serif; ">Fasilitas</h1>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="news">
                            <div class="card" style="width: 300px;">
                                <img src="{{ asset('gambar/kolem.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="mb-4" style="font-weight: 900;font-family: 'Poppins', sans-serif;">Kolam
                                        Renang</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card" style="width: 300px;">
                            <img src="{{ asset('gambar/makanan.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="mb-4" style="font-weight: 900;font-family: 'Poppins', sans-serif;">Makanan
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card" style="width: 300px;">
                            <img src="{{ asset('gambar/nyaman.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="mb-4" style="font-weight: 900;font-family: 'Poppins', sans-serif;">Kenyamanan
                                    Hotel</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                        <div class="d-flex">
                            <div class="col-sm-12">
                                <h1>Tipe Superior</h1>
                                <h4 class="mt-4">Fasilitas :</h4>
                                <p>
                                    <ul>
                                        <li>Kamar berukuran luas 32 m2</li>
                                        <li>Kamar mandi shower</li>
                                        <li>Coffee maker</li>
                                        <li>AC</li>
                                        <li>LED TV 32 inch</li>
                                    </ul>
                                </p>
                            </div>
                            <div class="col-sm-12">
                                <h1>Tipe Deluxe</h1>
                                <h4 class="mt-4">Fasilitas :</h4>
                                <p>
                                    <ul>
                                        <li>Kamar berukuran luas 45 m2</li>
                                        <li>Kamar mandi shower dan bathtub</li>
                                        <li>Coffee maker</li>
                                        <li>AC</li>
                                        <li>Sofa</li>
                                        <li>LED TV 40 inch</li>
                                    </ul>
                                </p>
                            </div>
                        </div>

                    </div>
                    
                    <div class="row mb-2">
                    <div class="d-flex">
                            <div class="col-md-10">
                                <div class="card" style="width: 300px;">
                                    <img src="{{ asset('gambar/nyaman.jpg') }}" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="card" style="width: 300px;">
                                    <img src="{{ asset('gambar/nyaman.jpg') }}" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            
        </div>
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    {{-- <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> --}}
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>

</html>
