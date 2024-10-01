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
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Tanggal Kadaluarsa</th>
                    <th>Tersedia</th>
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>