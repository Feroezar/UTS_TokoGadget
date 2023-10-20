@extends('master')

@section('konten')
  <h4>Selamat Datang <b>{{Auth::user()->name}}</b>, Anda Login sebagai <b>{{Auth::user()->role}}</b>.</h4>
  <a href="{{ route('hpbase.index') }}" class="btn btn-md btn-success mb-3">Data</a>
@endsection