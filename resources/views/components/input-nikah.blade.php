

<form action="{{ route('pemesanan.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_p1">Nama Mempelai Putra</label>
        <input type="text" class="form-control" id="nama_p1" name="nama_p1" value="{{ old('nama_p1') }}">
    </div>

    <div class="form-group">
        <label for="bpk_p1">Nama Bapak Mempelai Putra</label>
        <input type="text" class="form-control" id="bpk_p1" name="bpk_p1" value="{{ old('bpk_p1') }}">
    </div>

    <div class="form-group">
        <label for="ibu_p1">Nama Ibu Mempelai Putra</label>
        <input type="text" class="form-control" id="ibu_p1" name="ibu_p1" value="{{ old('ibu_p1') }}">
    </div>

    <div class="form-group">
        <label for="keterangan_p1">Keterangan Mempelai Putra</label>
        <textarea class="form-control" id="keterangan_p1" name="keterangan_p1">{{ old('keterangan_p1') }}</textarea>
    </div>

    <div class="form-group">
        <label for="nama_p2">Nama Mempelai Putra</label>
        <input type="text" class="form-control" id="nama_p2" name="nama_p2" value="{{ old('nama_p2') }}">
    </div>

    <div class="form-group">
        <label for="bpk_p2">Nama Bapak Mempelai Putra</label>
        <input type="text" class="form-control" id="bpk_p2" name="bpk_p2" value="{{ old('bpk_p2') }}">
    </div>

    <div class="form-group">
        <label for="ibu_p2">Nama Ibu Mempelai Putra</label>
        <input type="text" class="form-control" id="ibu_p2" name="ibu_p2" value="{{ old('ibu_p2') }}">
    </div>

    <div class="form-group">
        <label for="keterangan_p2">Keterangan Mempelai Putra</label>
        <textarea class="form-control" id="keterangan_p2" name="keterangan_p2">{{ old('keterangan_p2') }}</textarea>
    </div>

    <div class="form-group">
        <label for="alamat_acara">Alamat Acara</label>
        <input type="text" class="form-control" id="alamat_acara" name="alamat_acara"
            value="{{ old('alamat_acara') }}">
    </div>

    <div class="form-group">
        <label for="tgl_waktu_acara">Tanggal dan Waktu Acara</label>
        <input type="datetime-local" class="form-control" id="tgl_waktu_acara" name="tgl_waktu_acara"
            value="{{ old('tgl_waktu_acara') }}">
    </div>

    <div class="form-group">
        <label for="hiburan_acara">Hiburan Acara</label>
        <input type="text" class="form-control" id="hiburan_acara" name="hiburan_acara"
            value="{{ old('hiburan_acara') }}">
    </div>

    <div class="form-group">
        <label for="alamat_akad">Alamat Akad</label>
        <input type="text" class="form-control" id="alamat_akad" name="alamat_akad"
            value="{{ old('alamat_akad') }}">
    </div>

    <div class="form-group">
        <label for="tgl_waktu_akad">Tanggal dan Waktu Akad</label>
        <input type="datetime-local" class="form-control" id="tgl_waktu_akad" name="tgl_waktu_akad"
            value="{{ old('tgl_waktu_akad') }}">
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
