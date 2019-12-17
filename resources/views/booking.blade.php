@extends('index')
@section('konten')
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Booking</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                  <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                  <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

<div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Data Booking
                  <a href="{{route('booking.create')}}" button type="button" class="btn btn-primary">Tambah</button> </a>
                  </h4>
                  <p class="card-category">Tabel ini menunjukkan data booking yang dilakukan customer</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID Booking</th>
                      <th>ID Customer</th>
                      <th>ID Mobil</th>
                      <th>Tanggal Pinjam</th>
                      <th>Jadwal Kembali</th>
                      <th>Tanggal Dikembalikan</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($booking as $value)
                      <tr>
                        <td>{{$value->id_booking}}</td>
                        <td>{{$value->id_customer}}</td>
                        <td>{{$value->id_mobil}}</td>
                        <td>{{$value->tanggal_pinjam}}</td>
                        <td>{{$value->jadwal_kembali}}</td>
                        <td>{{$value->tanggal_dikembalikan}}</td>
                        <td>
                          <div class="btn-group">
                            <a href="{{route('booking.edit', $value->id_booking)}}" class="btn btn-success">
                            <i class="fas fa-edit"></i></a>
                          </div>                        
                            <form action="{{route('booking.destroy', $value->id_booking)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div>

@endsection