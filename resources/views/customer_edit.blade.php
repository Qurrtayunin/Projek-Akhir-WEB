@extends('index')
@section('konten')

    <div class="row justify-content-center">
        <div class="col-md-12">
            {!! Form::model($item['route'=> ['customer.update',
            $item->id_customer],'role'=>'form','method'=>'put']) !!}

            {!! Form::label('name','Nama') !!}

            {!! Form::text('name',null,['class'=>'form-control']) !!}

        <button type="submit" class="btn btn-primary">Simpan</button>

        {!! Form::close() !!}