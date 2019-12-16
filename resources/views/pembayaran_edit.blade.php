@extends('index')
@section('konten')

<html lang="en">
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}" >

    <form action="{{route('pembayaran.update',$pembayaran->id_pembayaran)}}" method="POST">
      @csrf
      @method('PUT')
  <div class="form-group">
    <label>Edit Pembayaran</label>
    <input name="id_booking" type="text" class="form-control" placeholder="Id Booking">
  </div>
  <div class="form-group">
    <input name="total" type="text" class="form-control" placeholder="Total">
  </div>
  <div class="form-group">
    <input name="status" type="text" class="form-control" placeholder="Status">
  </div>
  <div class="form-group">
    <input name="denda" type="text" class="form-control" placeholder="Denda">
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

