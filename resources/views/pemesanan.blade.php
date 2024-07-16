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
            <th scope="row">{{ $item->kode_pemesanan }}</th>
            <td>{{ \Carbon\Carbon::parse($item->tanggal_pemesanan)->translatedFormat('l, d F Y') }}</td>
            <td>{{ $item->user }}</td>
            <td>
              @foreach ($item->detail as $itu)
              <span class="badge badge-pill text-{{ $itu['text'] }}" style="background-color:#{{ $itu['warna'] }};">
                {{ $itu['barang'] }} - Qty: {{ $itu['qty'] }}
              </span>
              @endforeach
            </td>
            <td>Rp. {{ number_format((int)$item->total, 0, ',', '.') }}</td>
            <td><a href="#" class="btn btn-success btn-sm btn-block">Detail</a></td>
          </tr> 
          @endforeach
          
        </tbody>
      </table>
      @endsection