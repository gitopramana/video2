<form action="{{ url('mahasiswa/' . $mahasiswa->id) }} " method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    NBI: <input type="text" name="nbi" value="{{ $mahasiswa->nbi}}">
    NAMA: <input type="text" name="nama_mhs" value="{{ $mahasiswa->nama_mhs}}">
    <button type="submit">Simpan</button>
</form>