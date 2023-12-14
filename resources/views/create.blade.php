@extends('utama')
@section('content')
<body>

    <h2>Form Pembelian Barang</h2>

    <form method="POST" action="{{ route('store') }}">
        @csrf
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
                            <input type="text" class="form-control" placeholder="Nomor Barang" name="no_barang" required><br>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang:</label>
                            <input type="text" class="form-control" placeholder="Nama Barang" name="namabarang" required><br>
                        </div>
                        <div class="form-group">
                            <label for="varian">Varian:</label>
                            <input type="text" class="form-control" placeholder="Varian Barang" name="varian" required><br>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa:</label>
                            <input type="date" class="form-control" placeholder="Expired" name="tanggal_kadaluarsa" required><br>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_produksi">Tanggal Produksi:</label>
                            <input type="date" class="form-control" placeholder="Tanggal Produksi" name="tanggal_produksi" required><br>
                        </div>
                        <div class="form-group">
                            <label for="harga_beli">Harga Beli:</label>
                            <input type="number" class="form-control" placeholder="Harga" name="hargabeli" required><br>
                        </div>
                            <button type="submit" class="btn btn-primary me-2">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </body>
    @endsection