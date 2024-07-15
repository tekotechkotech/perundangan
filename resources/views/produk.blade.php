@extends('layouts.master')

@section('title', $title)

@section('content')
    <h2>Pemesanan</h2>
    <p>This is the pemesanan page.</p>


      <table style="border-radius: 10px" class=" table table-hover border" >
        <thead >
          <tr >
            <th scope="col">#</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Harga Satuan</th>
            <th scope="col">Stok</th>
            <th scope="col"></th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($a as $item)
          <tr class="">
            <th scope="row">
              
              {{ $loop->iteration }}
            </th>
            <td>
              <div href="#" class="btn  p-0 m-0 px-2 text-{{ $item->text }}" style="border-radius: 100px;background-color:#{{ $item->warna_produk }}">
                {{ $item->nama_produk }}
              </div>
            </td>
            <td>{{ $item->deskripsi_produk }}</td>
            <td>Rp. {{ number_format((int)$item->harga, 0, ',', '.') }}</td>
            <td> {{ number_format((int)$item->stok, 0, ',', '.') }}</td>
            <td><a href="#" class="btn btn-success btn-sm btn-block">Detail</a></td>
          </tr> 
          @endforeach
          
        </tbody>
      </table>
      @endsection