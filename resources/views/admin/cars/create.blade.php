@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Tambah Data
        </div>
        <div class="card-body">
            <form action="{{route('cars.store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="nama_mobil">Nama Mobil</label>
                    <input type="text" class="form-control" name="nama_mobil" value="{{old('nama_mobil')}}">
                </div>
                <div class="form-group">
                    <label for="Harga_sewa">Harga sewa</label>
                    <input type="number" class="form-control" name="Harga_sewa" value="{{old('Harga_sewa')}}">
                </div>
                <div class="form-group">
                    <label for="bahan_bakar">Bahan bakar</label>
                    <input type="text" class="form-control" name="bahan_bakar" value="{{old('bahan_bakar')}}">
                </div>
                <div class="form-group">
                    <label for="jumlah_kursi">jumlah_kursi</label>
                    <input type="number" class="form-control" name="jumlah_kursi" value="{{old('jumlah_kursi')}}">
                </div>
                <div class="form-group">
                    <label for="transmisi">transmisi</label>
                    <select name="transmisi" id="transmisi" class="form-control">
                        <option value="manual">Manual</option>
                        <option value="otomatis">Otomatis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="tersedia">Tersedia</option>
                        <option value="tidak tersedia">Tidak Tersedia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="deskripsi">deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="5">{{ old('deskripsi')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="p3k">p3k</label>
                    <select name="p3k" id="p3k" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                <div class="form-group">
                    <label for="charger">charger</label>
                    <select name="charger" id="charger" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                <div class="form-group">
                    <label for="audio">audio</label>
                    <select name="audio" id="audio" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                <div class="form-group">
                    <label for="ac">ac</label>
                    <select name="ac" id="ac" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" name="gambar">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                
                </div>
            </form>
        </div>
    </div>
@endsection