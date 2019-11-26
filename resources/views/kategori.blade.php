@extends('index')

@section('kategori')
active
@endsection

@section('konten')

<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)"><b>Kategori</b></a>
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

<div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Kategori Paket</h4>
                  <p class="card-category">27th November, 2019</p>
                  <a href="{{route('kategori.create')}}" button type="button" class="btn btn-primary">Tambah</button> </a>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Nama</th>
                      <th>Biaya Harian</th>
                      <th>Denda (/jam)</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                      @foreach($kategori as $value)
                      <tr>
                        <td width="1">{{$value->nama_kategori}}</td>
                        <td>{{$value->biaya_harian}}</td>
                        <td>{{$value->denda_perjam}}</td>
                        <td>
                          <div class="btn-group">
                            <a href="{{route('kategori.edit', $value->nama_kategori)}}"
                                class="btn btn-success"><i class="fas fa-edit"></i></a>
                          </div> 
                          <form action="{{route('kategori.destroy', $value->nama_kategori)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                          </form> 
                        </td>
                        <!-- <td>
                            <a href="{{route('kategori.edit', $value->nama_kategori)}}" class="btn btn-success">Edit</a>
                            <form action="{{route('kategori.destroy', $value->nama_kategori)}}" method="POST"></form>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </td> -->
                       </tr>
                      @endforeach
                      <tr>
                        <td>Platinum</td>
                        <td>Rp 1.500.000</td>
                        <td>Rp 100.000</td>
                      </tr>
                      <tr>
                        <td>Gold</td>
                        <td>Rp 1.100.000</td>
                        <td>Rp 80.000</td>
                      </tr>
                      <tr>
                        <td>Silver</td>
                        <td>Rp 800.000</td>
                        <td>Rp 60.000</td>
                      </tr>
                      <tr>
                        <td>Bronze</td>
                        <td>Rp 500.000</td>
                        <td>Rp 40.000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
  </div>
@endsection