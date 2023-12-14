@extends('utama')
@section('content')

<body>
    <h2>Data Pembelian Barang</h2>
    <a href="{{ route('create') }}">Tambah Data</a>
    <div class="row mt-5">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No Barang</th>
                                <th>Nama Barang</th>
                                <th>Varian</th>
                                <th>Tanggal Kadaluarsa</th>
                                <th>Tanggal Produksi</th>
                                <th>Harga Beli</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangList as $barang)
                                <tr>
                                    <td>{{ $barang->no_barang }}</td>
                                    <td>{{ $barang->namabarang }}</td>
                                    <td>{{ $barang->varian }}</td>
                                    <td>{{ $barang->tanggal_kadaluarsa }}</td>
                                    <td>{{ $barang->tanggal_produksi }}</td>
                                    <td>{{ $barang->hargabeli }}</td>
                                    <td>
                                        <a href="{{ route('edit', $barang->id) }}" class="btn btn-primary ">Edit</a>
                                        <a action="{{ route('destroy', $barang->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" >Hapus</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

