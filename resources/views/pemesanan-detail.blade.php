@extends('layouts.master')

@section('title', $title)

@section('content')

{{-- <style>
  .active{

  }
</style> --}}
<div class="row">
  <div class="col-sm-12 col-md-4 col-lg-4">
    <h2>Pemesanan {{ $a->kode_pemesanan }} </h2>

  </div>
  <div class="col-sm-12 col-md-4 col-lg-4">
    <a href="/pemesanan/{{ $a->kode_pemesanan }}/invoice" class="btn {{ $apa=="invoice"?"btn-dark":"btn-outline-dark" }} btn-sm my-1 px-3">Invoice</a>
    <a href="/pemesanan/{{ $a->kode_pemesanan }}/pembayaran" class="btn {{ $apa=="pembayaran"?"btn-dark":"btn-outline-dark" }} btn-sm my-1 px-3">Pembayaran</a>


  </div>
  <div class="col-sm-12 col-md-4 col-lg-4">
    <h2 class="text-right">Total Rp. {{ number_format((int)$a->total_harga, 0, ',', '.')  }}  </h2>

  </div>
</div>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade {{ $apa=="invoice"?"show active":"" }} " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    @include('components.invoice')
  </div>
  <div class="tab-pane fade {{ $apa=="pembayaran"?"show active":"" }} " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    @include('components.pembayaran')

  </div>
</div>

      @endsection