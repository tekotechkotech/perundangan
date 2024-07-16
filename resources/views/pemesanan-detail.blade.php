@extends('layouts.master')

@section('title', $title)

@section('content')
    <h2>Pemesanan {{ $a->kode_pemesanan }}</h2>
    <p>Rp. {{ number_format((int)$a->total_harga, 0, ',', '.')  }} | {{ $a->tanggal_pemesanan }}</p>

    {{ $a->name }}
    {{ $a->nohp }}

    
    
    



      <table style="border-radius: 10px" class=" table table-hover border" >
        <thead >
          <tr >
            <th class="text-center" scope="col">#</th>
            <th class="text-left" scope="col">Nama Barang</th>
            <th class="text-right" scope="col">Harga Satuan</th>
            <th class="text-center" scope="col">Qty</th>
            <th class="text-center border-left" scope="col">Total Harga</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($b as $item)
          <tr>
            <th class="text-center" scope="row">{{ $loop->iteration }}</th>
            <td class="text-left">{{ $item->nama_produk }}</td>
            <td class="text-right">{{ number_format((int)$item->harga, 0, ',', '.')  }}</td>
            <td class="text-center">{{ $item->jumlah }}</td>
            <td class="text-right border-left">{{ number_format((int)$item->harga_total, 0, ',', '.')  }}&nbsp;&nbsp;</td>
          </tr> 
          @endforeach
          <tr class="table-bordered">
            <td colspan="4" class=" text-center"><b>Jumlah</b></td>
            <td class="text-right"><b>{{ number_format((int)$a->total_harga, 0, ',', '.') }}</b>&nbsp;&nbsp;</td>
          </tr>
          <tr class="table-bordered">
            <td colspan="4" class=" text-center"><b>Dibayar</b></td>
            <td class="text-right"><b>{{ number_format((int)$a->total_harga, 0, ',', '.') }}</b>&nbsp;&nbsp;</td>
          </tr>
          <tr class="table-bordered">
            <td colspan="4" class=" text-center"><b>Kurang / Kembali</b></td>
            <td class="text-right"><b>{{ number_format((int)$a->total_harga, 0, ',', '.') }}</b>&nbsp;&nbsp;</td>
          </tr>
        </tbody>
      </table>
      @endsection