@extends('layouts.master')

@section('title', $title)

@section('content')
    <h2>Pemesanan</h2>
    <p>This is the pemesanan page.</p>


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
              
      @if (isset($item['data']) && is_array($item['data']) || is_object($item['data']))

              @foreach ($item['data'] as $itu)
              <span class="badge badge-pill badge-secondary text-dark">
                  Data {{ $itu['type'] }}
                  @if (isset($itu['detail']) && is_array($itu['detail']) || is_object($itu['detail']))
                  @foreach ($itu['detail'] as $ini)
                  <span class="badge badge-pill text-{{ $ini['text'] }}" style="background-color:#{{ $ini['warna'] }};">
                    {{ $ini['barang'] }} - Qty: {{ $ini['qty'] }}
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