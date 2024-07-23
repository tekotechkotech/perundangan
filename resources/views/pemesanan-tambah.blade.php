@extends('layouts.master')

@section('title', $title)

@section('content')

    {{-- <style>
  .active{

  }
</style> --}}
    <div class="card">
        <div class="card-header">Data Pemesan</div>
        <div class="card-body">
            <div class="form-group">
                <label for="nama_p1">Nama</label>
                <input type="text" class="form-control" id="nama_p1" name="nama_p1" value="{{ old('nama_p1') }}">
            </div>

            <div class="form-group">
                <label for="bpk_p1">No HP</label>
                <input type="text" class="form-control" id="bpk_p1" name="bpk_p1" value="{{ old('bpk_p1') }}">
            </div>
            <div class="form-group">
                <label for="bpk_p1">Email</label>
                <input type="text" class="form-control" id="bpk_p1" name="bpk_p1" value="{{ old('bpk_p1') }}">
            </div>
        </div>
    </div>
<hr>
    <div class="card">
      <div class="card-header">
        Data Pemesanan
      </div>
      <div class="card-body">
        @if ($apa=='Nikah')
        @include('components.input-nikah')
        @elseif ($apa=='Khitan')
        @include('components.input-khitan')
        @endif
      </div>
    </div>

@endsection
