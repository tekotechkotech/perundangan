<form action="{{ route('pemesanan.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_anak">Nama Anak</label>
        <input type="text" class="form-control" id="nama_anak" name="nama_anak" value="{{ old('nama_anak') }}">
    </div>

    <div class="form-group">
        <label for="bpk_anak">Nama Bapak Anak</label>
        <input type="text" class="form-control" id="bpk_anak" name="bpk_anak" value="{{ old('bpk_anak') }}">
    </div>

    <div class="form-group">
        <label for="ibu_anak">Nama Ibu Anak</label>
        <input type="text" class="form-control" id="ibu_anak" name="ibu_anak" value="{{ old('ibu_anak') }}">
    </div>

    <div class="form-group">
        <label for="keterangan_anak">Keterangan Anak</label>
        <textarea class="form-control" id="keterangan_anak" name="keterangan_anak">{{ old('keterangan_anak') }}</textarea>
    </div>

    <div class="form-group">
        <label for="alamat_acara">Alamat Acara</label>
        <input type="text" class="form-control" id="alamat_acara" name="alamat_acara" value="{{ old('alamat_acara') }}">
    </div>

    <div class="form-group">
        <label for="tgl_waktu_acara">Tanggal dan Waktu Acara</label>
        <input type="datetime-local" class="form-control" id="tgl_waktu_acara" name="tgl_waktu_acara" value="{{ old('tgl_waktu_acara') }}">
    </div>

    <div class="form-group">
        <label for="hiburan_acara">Hiburan Acara</label>
        <input type="text" class="form-control" id="hiburan_acara" name="hiburan_acara" value="{{ old('hiburan_acara') }}">
    </div>

    <div class="form-group">
        <label for="alamat_akad">Alamat Akad</label>
        <input type="text" class="form-control" id="alamat_akad" name="alamat_akad" value="{{ old('alamat_akad') }}">
    </div>

    <div class="form-group">
        <label for="tgl_waktu_akad">Tanggal dan Waktu Akad</label>
        <input type="datetime-local" class="form-control" id="tgl_waktu_akad" name="tgl_waktu_akad" value="{{ old('tgl_waktu_akad') }}">
    </div>

    <div class="form-group">
        <label for="yg_bahagia">Yang Berbahagia</label>
        <textarea class="form-control" id="yg_bahagia" name="yg_bahagia">{{ old('yg_bahagia') }}</textarea>
    </div>

    <div class="form-group">
        <label for="turun_mengundang">Turun Mengundang</label>
        <textarea class="form-control" id="turun_mengundang" name="turun_mengundang">{{ old('turun_mengundang') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
