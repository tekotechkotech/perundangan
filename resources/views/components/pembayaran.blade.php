

{{-- <div class="collapse py-2" id="collapseExample"> --}}
  <div class="card my-3">

    <div class="card-header font-weight-bold py-1 my-0">
      Tambah Pembayaran
    </div>
    {{-- {{ $a->id_pemesanan }} --}}
    <div class=" card-body">
      
      <form action="{{ route('pembayaran') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
              <input type="hidden" name="id_pemesanan" class="form-control" placeholder="Nominal" value="{{ $a->id_pemesanan }}" >

              <input type="number" name="nominal" class="form-control @error('nominal') is-invalid @enderror" placeholder="Nominal" value="{{ old('nominal') }}" >
                @error('nominal')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <input type="text" name="metode_pembayaran" class="form-control @error('metode_pembayaran') is-invalid @enderror" placeholder="Metode Pembayaran" value="{{ old('metode_pembayaran') }}" >
                @error('metode_pembayaran')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Keterangan" value="{{ old('keterangan') }}">
                @error('keterangan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <button type="submit" class="btn btn-block btn-dark">Tambah</button>
            </div>
        </div>
    </form>
    

    </div>
  </div>
{{-- </div> --}}

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
    <tr class="table-bordered">
      <td colspan="5" class=" text-center"></td>
    </tr>
    <tr class="table-bordered">
      @if ($a->total_harga-$c->sum('nominal')==0)
      <td colspan="5" class=" text-center"><b> {{ $a->total_harga-$c->sum('nominal')==0 }}LUNAS </b></td>    
      @endif
      <td colspan="4" class=" text-center"><b> {{ $a->total_harga-$c->sum('nominal')>0?"Kurang":"Kembali" }} 
      </b></td>
      <td class="text-right"><b>{{ number_format((int)$a->total_harga-$c->sum('nominal'), 0, ',', '.') }}</b>&nbsp;&nbsp;</td>
    </tr>
  </tbody>
</table>