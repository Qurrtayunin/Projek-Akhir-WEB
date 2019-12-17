@extends('index')
@section('konten')

<html lang="en">
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}" >

    <form action="{{route('mobil.update',$mobil->id_mobil)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
    <label>Edit Mobil</label>
    <input name="nama_kategori" type="text" class="form-control" placeholder="Nama Kategori">
  </div>
  <div class="form-group">
    <input name="nama_mobil" type="text" class="form-control" placeholder="Nama Mobil">
  </div>
  <div class="form-group">
    <input name="tahun_produksi" type="text" class="form-control" placeholder="Tahun Produksi">
  </div>
  <div class="form-group">
    <input name="no_plat" type="text" class="form-control" placeholder="Nomor Plat">
  </div>
  <div class="form-group">
    <input name="warna" type="text" class="form-control" placeholder="Warna">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}"></script>
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')}}"></script>
  
</html>

@endsection

