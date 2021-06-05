<form action="{{ route('mahasiswa.store') }} " method="post">
    @csrf
    NBI: <input type="text" name="nbi">
    NAMA: <input type="text" name="nama_mhs">
    <button type="submit">Simpan</button>
</form>