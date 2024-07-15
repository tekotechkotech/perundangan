@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h2>Pemesanan</h2>
    <p>This is the pemesanan page.</p>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">KODE</th>
            <th scope="col">Pemesan</th>
            <th scope="col">Pemesanan</th>
            <th scope="col">Total Harga</th>
            <th scope="col"></th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($a as $item)
          <tr>
            <th scope="row">{{ $item->kode_pemesanan }}</th>
            <td>{{ $item->user }}</td>
            <td>
              @foreach ($item->detail as $itu)
              <span class="badge badge-pill badge-primary">
                {{ $itu['barang'] }} - Qty: {{ $itu['qty'] }}
              </span>
                @endforeach
            </td>
            <td>Rp. {{ number_format((int)$item->total, 0, ',', '.') }}</td>
            <td><a href="#" class="btn btn-success btn-sm">Detail</a></td>
          </tr> 
          @endforeach
          
        </tbody>
      </table>
@endsection