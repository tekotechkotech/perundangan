@extends('layouts.master')

@section('title', $title)

@section('content')
    <h2>Pemesanan</h2>
    <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-9">
            <p>This is the pemesanan page.</p>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="dropdown">
                <a class="btn btn-block btn-sm btn-success dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Tambah Pesanan
                </a>
              
                <div class="dropdown-menu btn-block">
                  <a class="dropdown-item" href="/pemesanan/addNikah">Undangan Nikah</a>
                  <a class="dropdown-item" href="/pemesanan/addKhitan">Undangan Khitan</a>
                  {{-- <a class="dropdown-item" href="/pemesanan/addYasin">Buku Yasin</a> --}}
                  {{-- <a class="dropdown-item" href="/pemesanan/addBanner">Banner</a> --}}
                  {{-- <a class="dropdown-item" href="#">Banner</a> --}}
                </div>
              </div>


             {{-- <a href="#" class="btn btn-block btn-sm btn-success">Tambah Pesanan</a> --}}
        </div>
    </div>


      <table style="border-radius: 10px" class=" table table-hover border" >
        <thead >
          <tr >
            <th scope="col">KODE</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Pemesanan</th>
            <th scope="col">Total Harga</th>
            <th scope="col"></th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($a as $item)
    <tr>
        <th scope="row">{{ $item['kode_pemesanan'] }}</th>
        <td>{{ \Carbon\Carbon::parse($item['tanggal_pemesanan'])->translatedFormat('l, d F Y') }}</td>
        <td>{{ $item['user'] }}</td>
        <td>
            @if (isset($item['data']) && (is_array($item['data']) || is_object($item['data'])))
                @foreach ($item['data'] as $itu)
                    <span class="badge badge-pill badge-secondary text-light p-2 ">
                        {{ ucwords($itu['type']) }}

                        @if (isset($itu['detail']) && (is_array($itu['detail']) || is_object($itu['detail'])))
                            @foreach ($itu['detail'] as $ini)
                                <span class="badge badge-pill text-{{ $ini->text_produk }}" style="background-color:#{{ $ini->warna_produk }};">
                                    {{ $ini->nama_produk }} - Qty: {{ $ini->jumlah }}
                                </span>
                            @endforeach
                        @endif
                    </span>
                @endforeach
            @endif
        </td>
        <td>Rp. {{ number_format((int)$item['total'], 0, ',', '.') }}</td>
        <td><a href="pemesanan/{{ $item['kode_pemesanan'] }}/invoice" class="btn btn-success btn-sm btn-block">Detail</a></td>
    </tr>
@endforeach
          
        </tbody>
      </table>
      @endsection