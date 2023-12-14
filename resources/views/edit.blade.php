@extends('utama')
@section('content')

<body>
    <h1>Form Edit Barang</h1>

    <form action="{{ route('update', $barang->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description">
                        Basic form layout
                    </p>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="no_barang">No Barang:</label>
                            <input type="text" class="form-control" placeholder="Nomor Barang" name="no_barang" value="{{ $barang->no_barang }}" required><br>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang:</label>
                            <input type="text" class="form-control" placeholder="Nama Barang" name="namabarang" value="{{ $barang->namabarang }}" required><br>
                        </div>
                        <div class="form-group">
                            <label for="varian">Varian:</label>
                            <input type="text" class="form-control" placeholder="Varian Barang" name="varian" value="{{ $barang->varian }}" required><br>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa:</label>
                            <input type="date" class="form-control" placeholder="Expired" name="tanggal_kadaluarsa" value="{{ $barang->tanggal_kadaluarsa }}" required><br>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_produksi">Tanggal Produksi:</label>
                            <input type="date" class="form-control" placeholder="Tanggal Produksi" name="tanggal_produksi" value="{{ $barang->tanggal_produksi }}" required><br>
                        </div>
                        <div class="form-group">
                            <label for="harga_beli">Harga Beli:</label>
                            <input type="number" class="form-control" placeholder="Harga Barang" name="hargabeli" value="{{ $barang->hargabeli }}" required><br>
                        </div>
                            <button type="submit" class="btn btn-primary ">Simpan</button>
                        </form>

                        <a href="{{ route('index') }}" class="btn btn-danger" >Kembali ke Daftar Barang</a>
                    </div>
                </div>
            </div>
        </form>
    </body>
    @endsection