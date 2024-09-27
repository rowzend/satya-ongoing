@extends('layouts.center')
@section('konten')
    <div class="container">
        <div class="card my-4 shadow" data-aos="fade-up">
            <div class="card-body">
                <h2 class="card-title">Usulan Satya Lencana</h2>
                <p class="card-text">Silakan mengisi form di bawah ini untuk mengajukan usulan.</p>
            </div>
        </div>

        <div class="card mb-4 shadow" data-aos="fade-up" data-aos-delay="100">
            <div class="card-header">
                <h4 class="card-title">Buat Usulan Satya Lencana</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('usulan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="text" class="form-control" id="nip" name="nip" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="tingkatan" class="form-label">Tingkatan</label>
                        <select class="form-select" id="tingkatan" name="tingkatan" required>
                            <option value="">Pilih Tingkatan</option>
                            <option value="X">X</option>
                            <option value="XX">XX</option>
                            <option value="XXX">XXX</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="periode" class="form-label">Periode</label>
                        <select class="form-select" id="periode" name="periode" required>
                            <option value="">Pilih Bulan</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="pengantar" class="form-label">Pengantar</label>
                        <input type="text" class="form-control" id="pengantar" name="pengantar" required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>

                    <div class="mb-3">
                        <label for="drh" class="form-label">DRH (File)</label>
                        <input type="file" class="form-control" id="drh" name="drh" required>
                    </div>

                    <div class="mb-3">
                        <label for="pernyataan" class="form-label">Pernyataan (File)</label>
                        <input type="file" class="form-control" id="pernyataan" name="pernyataan" required>
                    </div>

                    <div class="mb-3">
                        <label for="cpns" class="form-label">CPNS</label>
                        <input type="file" class="form-control" id="cpns" name="cpns" required>
                    </div>

                    <div class="mb-3">
                        <label for="pns" class="form-label">PNS</label>
                        <input type="file" class="form-control" id="pns" name="pns" required>
                    </div>

                    <div class="mb-3">
                        <label for="skkp" class="form-label">SKKP</label>
                        <input type="file" class="form-control" id="skkp" name="skkp" required>
                    </div>

                    <div class="mb-3">
                        <label for="piagam" class="form-label">Piagam (Optional)</label>
                        <input type="file" class="form-control" id="piagam" name="piagam">
                    </div>

                    <button type="submit" class="btn btn-primary">Kirim Usulan</button>
                    <a href="{{ route('usulan.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
