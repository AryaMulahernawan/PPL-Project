<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang Kelontong</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Daftar Barang Kelontong</h1>

        <!-- Tombol Tambah Barang -->
        <div class="mb-3">
            <a href="{{ route('barang_kelontong.create') }}" class="btn btn-success">Tambah Barang</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Tanggal Kadaluarsa</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->tanggal_kadaluarsa }}</td>
                    <td>{{ $item->tersedia ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    <td>
                        <a href="{{ route('barang_kelontong.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('barang_kelontong.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
