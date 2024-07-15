@extends('layouts.master')

@section('title', $title)

@section('content')
    <h2>Pemesan</h2>
    <p>This is the pemesanan page.</p>


      <table style="border-radius: 10px" class=" table table-hover border" >
        <thead >
          <tr >
            <th scope="col">#</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">No HP</th>
            <th scope="col">Pemesanan</th>
            <th scope="col" class="text-center"><sup>Terbayar</sup> / <sub>Total</sub></th>
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
              {{ $item->name }}
            </td>
            <td>
              {{ $item->nohp }}
            </td>
            <td>
              @foreach ($item->detail as $itu)
              <span  class="badge badge-pill badge-primary   m-0 px-2 text-light bg-dark" style="border-radius: 100px;">
                  #{{ $itu['kode_pemesanan'] }} 
              </span>
              @endforeach
            </td>
            <td class="text-center"><sup>Rp. {{ number_format((int)$item->total, 0, ',', '.') }}</sup>/<sub>Rp. {{ number_format((int)$item->total, 0, ',', '.') }}</sub></td>
            <td><a href="#" class="btn btn-success btn-sm btn-block">Detail</a></td>
          </tr> 
          @endforeach
          
        </tbody>
      </table>
      @endsection