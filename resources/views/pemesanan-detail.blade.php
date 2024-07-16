@extends('layouts.master')

@section('title', $title)

@section('content')
<h2>Pemesanan {{ $a->kode_pemesanan }}</h2>
<div class="row">
  <div class="col">
    
    <span>
      Rp. {{ number_format((int)$a->total_harga, 0, ',', '.')  }} 
      </span>
    <p> {{ $a->tanggal_pemesanan }}</p>
  </div>
  <div class="col-4">
    <div class="row">
      <div class="col-4">
        Pelanggan
      </div>
      <div class="col-7 ">
        : 
        <span class="font-weight-bold">
          {{ $a->name }}
          </span>
      </div>
      <div class="col-4">
        No HP
      </div>
      <div class="col-7 ">
        : 
        <span class="font-weight-bold">
          {{ $a->nohp }}
          </span>
      </div>
    </div>
  </div>
</div>


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
            <td class="text-right"><b>{{ number_format((int)$a->dibayar, 0, ',', '.') }}</b>&nbsp;&nbsp;</td>
          </tr>
          <tr class="table-bordered">
            <td colspan="4" class=" text-center">
              <b>{{ $a->total_harga - $a->dibayar >=0?"Kurang":"Kembali" }}</b>
            </td>
            <td class="text-right"><b>{{ number_format((int)$a->total_harga - $a->dibayar, 0, ',', '.') }}</b>&nbsp;&nbsp;</td>
          </tr>
        </tbody>
      </table>

      <hr>


      <h5>Pembayaran</h5>

      <table style="border-radius: 10px" class=" table table-hover border" >
        <thead >
          <tr >
            <th class="text-center" scope="col">#</th>
            <th class="text-left" scope="col">Tanggal</th>
            <th class="text-center" scope="col">Keterangan</th>
            <th class="text-center" scope="col">Metode Pembayaran</th>
            <th class="text-right " scope="col">Nominal</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($c as $ite)
          <tr>
            <th class="text-center" scope="row">{{ $loop->iteration }}</th>
            <td class="text-left">{{ $ite->tanggal_pembayaran }}</td>
            <td class="text-center">{{ $ite->deskripsi  }}</td>
            <td class="text-center">{{ $ite->metode_pembayaran }}</td>
            <td class="text-right border-left">{{ number_format((int)$ite->nominal, 0, ',', '.')  }}&nbsp;&nbsp;</td>
          </tr> 
          @endforeach
          <tr class="table-bordered">
            <td colspan="4" class=" text-center"><b>Jumlah</b></td>
            <td class="text-right"><b>{{ number_format((int)$a->dibayar, 0, ',', '.') }}</b>&nbsp;&nbsp;</td>
          </tr>
        </tbody>
      </table>



      @endsection